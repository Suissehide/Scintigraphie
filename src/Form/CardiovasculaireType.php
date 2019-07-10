<?php

namespace App\Form;

use App\Entity\Cardiovasculaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class CardiovasculaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tabagisme', ChoiceType::class, array(
                'label' => 'Tabagisme',
                'placeholder' => '',
                'choices' => array(
                    'Sevré' => 'Sevré',
                    'Jamais fumé ou arrêté > 12 mois' => 'Jamais fumé ou arrêté > 12 mois',
                    'Arrêt depuis moins de 12 mois' => 'Arrêt depuis moins de 12 mois',
                    'Actif' => 'Actif',
                ),
                'required' => false,
            ))

            ->add('antecedents', PackType::class, array( ))

            ->add('precisions', PackType::class, array( ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cardiovasculaire::class,
        ]);
    }
}
