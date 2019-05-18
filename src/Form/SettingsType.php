<?php

namespace App\Form;

use App\Entity\User;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SettingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'attr' => [
                    'placeholder' => 'Votre adresse e-mail'
                ]
            ])
            ->add('firstName', TextType::class, [
                'attr' => [
                    'placeholder' => 'Votre prénom'
                ]
            ])
            ->add('lastName', TextType::class, [
                'attr' => [
                    'placeholder' => 'Votre nom de famille'
                ]
            ])
            ->add('profilePicture', FileType::class, [
                'label' => 'Changez votre photo de profil',
                'required' => false,
                'data_class' => null
            ])
            ->add('biography', CKEditorType::class, [
                'label' => 'Présentez-vous en quelques lignes'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
