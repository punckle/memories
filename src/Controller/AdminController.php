<?php

namespace App\Controller;

use App\Repository\MemoryRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
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
}
