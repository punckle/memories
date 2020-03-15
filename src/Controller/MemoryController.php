<?php

namespace App\Controller;

use App\Entity\Memory;
use App\Entity\User;
use App\Form\MemoryType;
use App\Repository\MemoryRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MemoryController extends AbstractController
{
    /**
     * @Route("/souvenirs", name="memories")
     * @param MemoryRepository $memoryRepository
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(MemoryRepository $memoryRepository)
    {
        $memories = $memoryRepository->findBy(['fifties' => false]);

        $latestMemories = $memoryRepository->latestMemories();

        return $this->render('memory/index.html.twig', [
            'memories' => $memories,
            'latestMemories' => $latestMemories
        ]);
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route("/souvenir/creation", name="memory_creation")
     * @IsGranted("ROLE_USER")
     */
    public function createMemory(Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(MemoryType::class);
        $form->handleRequest($request);

        $user = $this->getUser();
        $memory = new Memory();

        if ($form->isSubmitted() && $form->isValid()) {
            $memory->setUser($user);
            $memory->setTitle($form['title']->getData());
            $memory->setContent($form['content']->getData());
            if ($request->files->get('memory')['image'] != null) {
                $file = $form->get('image')->getData();
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move($this->getParameter('upload_directory'), $fileName);
                $memory->setImage($fileName);
            }

            $em->persist($memory);
            $em->flush();

            $this->addFlash('success', 'Votre souvenir a bien été enregistré !');

            return $this->redirectToRoute('memories');
        }

        return $this->render('memory/createMemory.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @param Memory $memory
     * @Route("/souvenir/{id}", name="memory_show")
     * @return \Symfony\Component\HttpFoundation\Response
     * @IsGranted("ROLE_USER")
     */
    public function show(Memory $memory)
    {
        return $this->render('memory/show.html.twig', [
            'memory' => $memory
        ]);
    }

    /**
     * @Route("/utilisateur/souvenirs", name="user_memories")
     * @IsGranted("ROLE_USER")
     */
    public function userMemories()
    {
        $user = $this->getUser();

        return $this->render('memory/user_memories.html.twig', [
            'user' => $user
        ]);
    }

    /**
     * @Route("/supprimer/souvenir/{id}", name="delete_memory")
     * @param Memory $memory
     * @param EntityManagerInterface $em
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Security("is_granted('ROLE_USER') and user === memory.getUser()", message="Ce souvenir ne vous appartient pas, vous ne pouvez pas le supprimer")
     */
    public function deleteMemory(Memory $memory, EntityManagerInterface $em)
    {
        $em->remove($memory);
        $em->flush();

        $this->addFlash('success', 'Le souvenir a bien été supprimé');

        return $this->redirectToRoute('user_memories');
    }

    /**
     * @param Memory $memory
     * @Route("/editer/souvenir/{id}", name="edit_memory")
     * @return \Symfony\Component\HttpFoundation\Response
     * @Security("is_granted('ROLE_ADMIN') or (is_granted('ROLE_USER') and user === memory.getUser())", message="Ce souvenir ne vous appartient pas, vous ne pouvez pas le modifier")
     */
    public function editMemory(Memory $memory, Request $request, ObjectManager $manager)
    {
        $form = $this->createForm(MemoryType::class, $memory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($memory);
            $manager->flush();

            $this->addFlash('success', 'Votre souvenir a bien été édité !');
            return $this->redirectToRoute('memory_show', ['id' => $memory->getId()]);
        }

        return $this->render('memory/edit.html.twig', [
            'form' => $form->createView(),
            'memory' => $memory
        ]);
    }

    /**
     * @Route("/souvenirs/cinquante", name="fifties")
     * @IsGranted("ROLE_USER")
     */
    public function fiftiesMemories(MemoryRepository $memoryRepository)
    {
        $fiftiesMemories = $memoryRepository->findBy(['fifties' => true]);

        return $this->render('memory/fiftiesMemories.html.twig', [
            'fiftiesMemories' => $fiftiesMemories
        ]);
    }

    /**
     * @Route("/souvenir/cinquante/{id}", name="show_fifties")
     */
    public function showFiftiesMemories(Memory $memory)
    {
        return $this->render('memory/fiftiesShow.html.twig', [
            'memory' => $memory
        ]);
    }
}
