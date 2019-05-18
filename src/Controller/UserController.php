<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Form\SettingsType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/inscription", name="registration")
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
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
     * @return Response
     */
    public function settings(Request $request)
    {
        $user = $this->getUser();
        $img = $user->getProfilePicture();

        $form = $this->createForm(SettingsType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($request->files->get('settings')['profilePicture'] != null) {
                $file = $form->get('profilePicture')->getData();
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move($this->getParameter('upload_directory'), $fileName);
                $user->setProfilePicture($fileName);
            } else {
                $user->setProfilePicture($img);
            }
            $this->getDoctrine()->getManager()->flush($user);

            $this->addFlash('success', 'Les changements ont été sauvegardés !');

            $this->redirectToRoute('settings');
        }

        return $this->render('user/settings.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/delete", name="delete_account")
     */
    public function deleteAccount(ObjectManager $manager)
    {
        $user = $this->getUser();

        $manager->remove($user);
        $manager->flush();

        $this->get('security.token_storage')->setToken(null);

        $this->addFlash('success', 'Votre compte a bien été supprimé');

        return $this->redirectToRoute('home');
    }
}
