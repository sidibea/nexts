<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('email', EmailType::class)
            ->add('username', TextType::class)
            ->add('roles', CollectionType::class, array(

                'entry_type' => ChoiceType::class,
                'entry_options' => array(
                    'label' => false,
                    'attr' => [
                        'class' => 'selectpicker form-control'
                    ],
                    'placeholder' => 'Choose an option',
                    'choices' => array(
                        'Regular user' => 'ROLE_REGULAR_USER',
                        'Moderator' => 'ROLE_MODERATOR',
                        'Power user' => 'ROLE_POWER_USER'
                    )
                )
            ))

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
