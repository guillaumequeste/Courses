<?php

namespace App\Form;

use App\Entity\Hippodrome;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HippodromeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('piste')
            ->add('corde')
            ->add('circonference')
            ->add('region')
            ->add('departement')
            ->add('ville')
            ->add('surnom')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Hippodrome::class,
        ]);
    }
}
