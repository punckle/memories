<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    /**
     * @Route("/about", name="about")
     */
    public function index()
    {
        return $this->render('about/index.html.twig');
    }

    /**
     * @Route("/general", name="general_about")
     */
    public function generalAbout()
    {
        return $this->render('about/general.html.twig');
    }
}
