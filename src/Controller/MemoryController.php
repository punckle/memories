<?php

namespace App\Controller;

use App\Entity\Memory;
use App\Entity\User;
use App\Form\MemoryType;
use App\Repository\MemoryRepository;
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
}
