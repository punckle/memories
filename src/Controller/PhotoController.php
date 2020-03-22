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
     * @Route("/photos/famille_mathis", name="mathis")
     * @IsGranted("ROLE_USER")
     */
    public function mathis()
    {
        return $this->render('photo/mathis.html.twig');
    }

    /**
     * @Route("/photos/lauriane/1", name="lauriane1")
     */
    public function lauriane1()
    {
        return $this->render('photo/lauriane_1.html.twig');
    }

    /**
     * @Route("/photos/lauriane/2", name="lauriane2")
     */
    public function lauriane2()
    {
        return $this->render('photo/lauriane_2.html.twig');
    }

    /**
     * @Route("/photos/lauriane/3", name="lauriane3")
     */
    public function lauriane3()
    {
        return $this->render('photo/lauriane_3.html.twig');
    }

    /**
     * @Route("/photos/manon", name="manon")
     */
    public function manon()
    {
        return $this->render('photo/manon.html.twig');
    }
}
