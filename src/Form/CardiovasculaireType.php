<?php

namespace App\Form;

use App\Entity\Cardiovasculaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class CardiovasculaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateHTA', DateType::class, array(
                'label' => 'Depuis',
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'attr' => array(
                    'placeholder' => 'dd/mm/yyyy',
                ),
                'required' => false,
            ))
            ->add('systolique', IntegerType::class, array(
                'label' => 'Tension artérielle systolique (moyenne)',
                'attr' => array(
                    'unity' => 'mmHg',
                    'data-min' => '90',
                    'data-max' => '180',
                ),
                'required' => false,
            ))
            ->add('diastolique', IntegerType::class, array(
                'label' => 'Tension artérielle diastolique (moyenne)',
                'attr' => array(
                    'unity' => 'mmHg',
                    'data-min' => '50',
                    'data-max' => '100',
                ),
                'required' => false,
            ))
            ->add('tabagisme', ChoiceType::class, array(
                'label' => 'Tabagisme',
                'placeholder' => '',
                'choices' => array(
                    'Jamais fumé ou arrêt > 12 mois' => 'Jamais fumé ou arrêt > 12 mois',
                    'Arrêt < 12 mois' => 'Arrêt < 12 mois',
                    'Actif' => 'Actif',
                ),
                'required' => false,
            ))
            ->add('paquetAnnee', IntegerType::class, array(
                'label' => 'Nombre de paquets par année',
                'attr' => array(
                    'unity' => 'paquets/année',
                    'data-min' => '5',
                    'data-max' => '120',
                ),
                'required' => false,
            ))
            ->add('alcool', ChoiceType::class, array(
                'label' => 'Alcool > 30g par jour',
                'required' => 'true',
                'expanded' => true,
                'multiple' => false,
                'placeholder' => false,
                'choices' => array(
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                ),
            ))
            ->add('poids', IntegerType::class, array(
                'label' => 'Poids',
                'attr' => array(
                    'unity' => 'kg',
                    'data-min' => '45',
                    'data-max' => '150',
                ),
                'required' => false,
            ))
            ->add('taille', IntegerType::class, array(
                'label' => 'Taille',
                'attr' => array(
                    'unity' => 'cm',
                    'data-min' => '140',
                    'data-max' => '210',
                ),
                'required' => false,
            ))
            ->add('tourDeTaille', IntegerType::class, array(
                'label' => 'Tour de taille',
                'attr' => array(
                    'unity' => 'cm',
                    'data-min' => '50',
                    'data-max' => '150',
                ),
                'required' => false,
            ))
            ->add('diabete', ChoiceType::class, array(
                'label' => ' ',
                'required' => 'true',
                'expanded' => true,
                'multiple' => false,
                'placeholder' => false,
                'choices' => array(
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                ),
            ))
            ->add('dateDiabete', DateType::class, array(
                'label' => 'Depuis',
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'attr' => array(
                    'placeholder' => 'dd/mm/yyyy',
                ),
                'required' => false,
            ))
            ->add('retinopathie', ChoiceType::class, array(
                'label' => 'Rétinopathie ',
                'required' => 'true',
                'expanded' => true,
                'multiple' => false,
                'placeholder' => false,
                'choices' => array(
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                ),
            ))
            ->add('microalbuminurie', ChoiceType::class, array(
                'label' => 'Microalbuminurie connue',
                'required' => 'true',
                'expanded' => true,
                'multiple' => false,
                'placeholder' => false,
                'choices' => array(
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                    'Info non disponible' => 'Info non disponible',
                ),
            ))
            ->add('neuropathie', ChoiceType::class, array(
                'label' => 'Neuropathie',
                'required' => 'true',
                'expanded' => true,
                'multiple' => false,
                'placeholder' => false,
                'choices' => array(
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                    'Info non disponible' => 'Info non disponible',
                ),
            ))
            ->add('antecedents', PackType::class, array())

            ->add('precisions', PackType::class, array())
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cardiovasculaire::class,
        ]);
    }
}
