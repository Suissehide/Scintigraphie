<?php

namespace App\Form;

use App\Entity\Suivi;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class SuiviType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('suivi', ChoiceType::class, array(
                'label' => ' ',
                'required' => 'true',
                'expanded' => true,
                'multiple' => false,
                'placeholder' => false,
                'choices' => array(
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                ),
                'required' => false,
            ))
            ->add('evenements', PackType::class, array())
            
            // Scintigraphie

            ->add('dateScintigraphie', DateType::class, array(
                'label' => 'Date de la scintigraphie',
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'attr' => array(
                    'placeholder' => 'dd/mm/yyyy',
                ),
                'required' => false,
            ))

            ->add('fcRepos', IntegerType::class, array(
                'label' => 'FC de repos',
                'attr' => array(
                    'unity' => 'battements par min',
                    'data-min' => '45',
                    'data-max' => '150',
                    'step' => '1',
                ),
                'required' => false,
            ))
            ->add('fcMax', IntegerType::class, array(
                'label' => 'FC max',
                'attr' => array(
                    'unity' => 'battements par min',
                    'data-min' => '72',
                    'data-max' => '220',
                    'step' => '1',
                ),
                'required' => false,
            ))
            ->add('taRepos', NumberType::class, array(
                'label' => 'TA systolique de repos',
                'attr' => array(
                    'unity' => 'mmHg',
                    'data-min' => '80',
                    'data-max' => '200',
                    'step' => '1',
                ),
                'required' => false,
            ))
            ->add('taPic', NumberType::class, array(
                'label' => 'TA systolique au pic',
                'attr' => array(
                    'unity' => 'mmHg',
                    'data-min' => '80',
                    'data-max' => '200',
                    'step' => '1',
                ),
                'required' => false,
            ))
            ->add('rythme', ChoiceType::class, array(
                'label' => 'Rythme cardiaque',
                'placeholder' => '',
                'choices' => array(
                    'Sinusal' => 'Sinusal',
                    'FA' => 'FA',
                    'ESV bi ou trigéminées' => 'ESV bi ou trigéminées',
                ),
                'required' => false,
            ))
            ->add('fractionRepos', NumberType::class, array(
                'label' => 'Fraction d’éjection au repos',
                'attr' => array(
                    'unity' => '%',
                    'data-min' => '25',
                    'data-max' => '70',
                    'step' => '0.1',
                ),
                'required' => false,
            ))
            ->add('fractionEffort', NumberType::class, array(
                'label' => 'Fraction d’éjection sous régadénoson',
                'attr' => array(
                    'unity' => '%',
                    'data-min' => '25',
                    'data-max' => '70',
                    'step' => '0.1',
                ),
                'required' => false,
            ))
            ->add('debitReposGlobal', NumberType::class, array(
                'label' => 'Neuroesthésiométrie (valeur la plus haute)',
                'attr' => array(
                    'unity' => 'volt',
                    'data-min' => '3',
                    'data-max' => '50',
                    'step' => '0.1',
                ),
                'required' => false,
            ))
            ->add('debitRegadenosonGlobal', NumberType::class, array(
                'label' => 'Neuroesthésiométrie (valeur la plus haute)',
                'attr' => array(
                    'unity' => 'volt',
                    'data-min' => '3',
                    'data-max' => '50',
                    'step' => '0.1',
                ),
                'required' => false,
            ))

            ->add('debitReposSegment', BullseyeType::class, array())
            ->add('debitRegadenosonSegment', BullseyeType::class, array())
            ->add('analyseReposSegment', BullseyeType::class, array())
            ->add('analyseRegadenosonSegment', BullseyeType::class, array())
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Suivi::class,
        ]);
    }
}
