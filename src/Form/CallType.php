<?php

namespace App\Form;

use App\Entity\Call;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CallType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('icon')
            ->add('title')
            ->add('shortDescription', TextareaType::class)
            ->add('description', TextareaType::class)
            ->add('enabled', )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Call::class,
        ]);
    }
}
