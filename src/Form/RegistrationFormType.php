<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, [
                'attr' => [
                    'placeholder' => 'Prénom'
                ],
                'label' => false
            ])
            ->add('lastName', TextType::class, [
                'attr' => [
                    'placeholder' => 'Nom'
                ],
                'label' => false
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'placeholder' => 'E-mail'
                ],
                'label' => false
            ])
            ->add('password', PasswordType::class, [
                'attr' => [
                    'placeholder' => 'Mot de passe'
                ],
                'label' => false
            ])
            ->add('passwordConfirm', PasswordType::class, [
                'attr' => [
                    'placeholder' => 'Mot de passe'
                ],
                'label' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'csrf_protection' => false
        ]);
    }
}
