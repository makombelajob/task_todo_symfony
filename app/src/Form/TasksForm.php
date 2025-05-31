<?php

namespace App\Form;

use App\Entity\Tasks;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TasksForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('createdAt', null, [
                'widget' => 'single_text',
            ])
            ->add('state', ChoiceType::class, [
                'choices' => [
                    'En entente' => 'En entente',
                    'En cours' => 'En cours',
                    'Completé' => 'Completé',
                ],

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tasks::class,
        ]);
    }
}
