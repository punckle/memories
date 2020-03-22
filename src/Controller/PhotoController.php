<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class PhotoController extends AbstractController
{
    /**
     * @Route("/photos", name="photos")
     * @IsGranted("ROLE_USER")
     */
    public function index()
    {
        return $this->render('photo/index.html.twig');
    }

    /**
     * @Route("/photos/bbh", name="bbh")
     * @IsGranted("ROLE_USER")
     */
    public function bbh()
    {
        return $this->render('photo/bbh.html.twig');
    }

    /**
     * @Route("/photos/mathis", name="mathis")
     * @IsGranted("ROLE_USER")
     */
    public function mathis()
    {
        return $this->render('photo/mathis.html.twig');
    }
}
