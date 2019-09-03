<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request,\Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $mail = (new \Swift_Message("Formulaire de contact - 60 ans d'Alain"))
                ->setFrom($data['mail'])
                ->setTo('baillet.manon@gmail.com')
                ->setBody($this->renderView(
                    'messages/contact.html.twig', [
                        'subject' => $data['subject'],
                        'description' => $data['description'],
                        'contact' => $data['mail']
                    ]
                ),
                    'text/html'
                );
            $mailer->send($mail);

            $this->addFlash('success', 'Votre message a bien été envoyé. Quelqu\'un y répondra dès que possible');

            return $this->redirectToRoute('home');
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
