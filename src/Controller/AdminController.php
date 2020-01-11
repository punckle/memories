<?php

namespace App\Controller;

use App\Repository\MemoryRepository;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     * @param UserRepository $userRepository
     * @param MemoryRepository $memoryRepository
     * @return \Symfony\Component\HttpFoundation\Response
     * @IsGranted("ROLE_ADMIN")
     */
    public function index(UserRepository $userRepository, MemoryRepository $memoryRepository)
    {
        $users = $userRepository->findNewUsers();
        $totalUsers = $userRepository->findAll();
        $memories = $memoryRepository->findAll();

        return $this->render('admin/index.html.twig', [
            'users' => $users,
            'totalUsers' => $totalUsers,
            'memories' => $memories
        ]);
    }

    /**
     * @Route("/admin/users", name="admin_users")
     * @param UserRepository $userRepository
     * @return \Symfony\Component\HttpFoundation\Response
     * @IsGranted("ROLE_ADMIN")
     */
    public function adminUsers(UserRepository $userRepository)
    {
        $users = $userRepository->findAll();

        return $this->render('admin/users.html.twig', [
            'users' => $users
        ]);
    }

    /**
     * @param MemoryRepository $memoryRepository
     * @Route("/admin/memories", name="admin_memories")
     * @return \Symfony\Component\HttpFoundation\Response
     * @IsGranted("ROLE_ADMIN")
     */
    public function adminMemories(MemoryRepository $memoryRepository)
    {
        $memories = $memoryRepository->findAll();

        return $this->render('admin/memories.html.twig', [
            'memories' => $memories
        ]);
    }
}
