<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Form\SettingsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/inscription", name="registration")
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function registration(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword($passwordEncoder->encodePassword($user, $form->get('password')->getData()));
            $user->setProfilePicture('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6JN5ua_iwdXe-SNEfjtCozzySIqJnYxOtUDUfaRc5KGA0eCefxA');

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Merci pour votre inscription !');

            return $this->redirectToRoute('login');
        }

        return $this->render('user/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/parametres", name="settings")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function settings(Request $request)
    {
        $user = $this->getUser();
        $form = $this->createForm(SettingsType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dd('babar');
        }

        return $this->render('user/settings.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
