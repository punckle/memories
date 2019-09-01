<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Form\SettingsType;
use App\Repository\UserRepository;
use App\Security\LoginFormAuthenticator;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;

class UserController extends AbstractController
{
    /**
     * @Route("/inscription", name="registration")
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @param GuardAuthenticatorHandler $guardHandler
     * @param LoginFormAuthenticator $authenticator
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function registration(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, LoginFormAuthenticator $authenticator)
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword($passwordEncoder->encodePassword($user, $form->get('password')->getData()));
            $user->setProfilePicture('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6JN5ua_iwdXe-SNEfjtCozzySIqJnYxOtUDUfaRc5KGA0eCefxA');
            $user->setHasCompletedProfile(false);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $mail = (new \Swift_Message("Nouvelle inscription sur '60 ans d'Alain'"))
                ->setFrom($user->getEmail())
                ->setTo('baillet.manon@gmail.com')
                ->setContent($this->renderView(
                    'messages/registration.html.twig', [
                        'user' => $user
                    ]
                ));

            $this->addFlash('success', 'Merci pour votre inscription ! Un e-mail a été envoyé à l\'administrateur afin qu\'il valide votre demande');
            return $this->redirectToRoute('home');
        }

        return $this->render('user/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/utilisateurs", name="users")
     * @param UserRepository $userRepository
     * @return Response
     */
    public function index(UserRepository $userRepository)
    {
        $users = $userRepository->findAll();

        return $this->render('user/index.html.twig', [
            'users' => $users
        ]);
    }

    /**
     * @param User $user
     * @Route("/utilisateur/{id}/details", name="user_details")
     * @return Response
     */
    public function show(User $user)
    {
        return $this->render('user/show.html.twig', [
            'user' => $user
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

            if ($user->getProfilePicture() != 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6JN5ua_iwdXe-SNEfjtCozzySIqJnYxOtUDUfaRc5KGA0eCefxA' && $user->getBiography() != null && $user->getHasCompletedProfile() == false) {
                $user->setHasCompletedProfile(true);
                $this->getDoctrine()->getManager()->persist($user);
                $this->getDoctrine()->getManager()->flush();
                $this->addFlash('success', 'Bravo, votre profil est complet !');
            } else {
                $this->addFlash('warning', 'Vous pouvez compléter votre profil pour que les utilisateurs 
                et Alain puissent vous reconnaître ! Petit conseil : personnalisez votre photo de profil et 
                présentez-vous en quelques phrases.');
            }

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
