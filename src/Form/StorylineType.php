<?php

namespace App\Form;

use App\Entity\Forum;
use App\Entity\Storyline;
use App\Entity\User;
use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\EntityRepository;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class StorylineType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Solo writing - When you do not need contribution from other writers' => 'Solo writing',
                    'Group writing - Only the member of the group can contribute' => 'Group writing' ,
                    'Collaborative writing - When you need contribution from other writers' => 'Collaborative writing'
                ]
            ])
            ->add('description', CKEditorType::class)
            ->add('contributors',EntityType::class, array(
                'class' => User::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u');
                },
                'choice_label' => 'username',
                'multiple' => true,
                'required' => false
            ))

            ->add('imageFile', VichImageType::class, [
                'required' => false
            ])
            ->add('isEnabled')
            ->add('forum', EntityType::class, array(
                'class' => Forum::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u');
                },
                'choice_label' => 'name'
            ))

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Storyline::class,
        ]);
    }
}
