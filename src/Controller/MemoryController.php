<?php

namespace App\Controller;

use App\Entity\Memory;
use App\Entity\User;
use App\Form\MemoryType;
use App\Repository\MemoryRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
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
        $memories = $memoryRepository->findAll();

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
     */
    public function show(Memory $memory)
    {
        return $this->render('memory/show.html.twig', [
            'memory' => $memory
        ]);
    }

    /**
     * @Route("/utilisateur/souvenirs", name="user_memories")
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
     */
    public function editMemory(Memory $memory, Request $request, ObjectManager $manager)
    {
        $form = $this->createForm(MemoryType::class, $memory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($request->files->get('memory')['pictures'] != null) {
                $file = $form->get('pictures')->getData();
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move($this->getParameter('upload_directory'), $fileName);
                $memory->setPictures($fileName);
            }
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
}
