<?php

namespace App\Form;

use App\Entity\Paraclinique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ParacliniqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('hba1c', NumberType::class, array(
                'label' => 'Hba1c',
                'attr' => array(
                    'unity' => '%',
                    'data-min' => '3',
                    'data-max' => '15',
                ),
                'required' => false,
            ))
            ->add('ldl', NumberType::class, array(
                'label' => 'LDL-Cholestérol',
                'attr' => array(
                    'unity' => 'g/l',
                    'data-min' => '0.3',
                    'data-max' => '2.5',
                ),
                'required' => false,
            ))
            ->add('hdl', NumberType::class, array(
                'label' => 'HDL-Cholestérol',
                'attr' => array(
                    'unity' => 'g/l',
                    'data-min' => '0.3',
                    'data-max' => '1.5',
                ),
                'required' => false,
            ))
            ->add('triglycerides', NumberType::class, array(
                'label' => 'Triglycérides',
                'attr' => array(
                    'unity' => 'g/l',
                    'data-min' => '0.4',
                    'data-max' => '10',
                ),
                'required' => false,
            ))
            ->add('creatininemie', NumberType::class, array(
                'label' => 'Creatininémie',
                'attr' => array(
                    'unity' => 'µmol/l',
                    'data-min' => '30',
                    'data-max' => '300',
                ),
                'required' => false,
            ))
            ->add('dfg', NumberType::class, array(
                'label' => 'DFG (CKD-EPI)',
                'attr' => array(
                    'unity' => 'ml/min',
                    'data-min' => '20',
                    'data-max' => '150',
                ),
                'required' => false,
            ))
            ->add('microAlb', ChoiceType::class, array(
                'label' => 'Micro ALB (valeur sur 24 heures)',
                'placeholder' => '',
                'choices' => array(
                    '0 à 30' => '0 à 30',
                    '30 à 300' => '30 à 300',
                    '> 300' => '> 300',
                ),
                'required' => false,
            ))
            ->add('rapport', ChoiceType::class, array(
                'label' => 'Rapport albuminurie/créatininurie',
                'placeholder' => '',
                'choices' => array(
                    '0 à 30' => '0 à 30',
                    '30 à 300' => '30 à 300',
                    '> 300' => '> 300',
                ),
                'required' => false,
            ))
            ->add('ipsDroit', NumberType::class, array(
                'label' => 'IPS droit',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '0.2',
                    'data-max' => '1.5',
                ),
                'required' => false,
            ))
            ->add('ipsGauche', NumberType::class, array(
                'label' => 'IPS gauche',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '0.2',
                    'data-max' => '1.5',
                ),
                'required' => false,
            ))
            ->add('tbpiDroit', NumberType::class, array(
                'label' => 'TBPI droit',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '0.2',
                    'data-max' => '1.5',
                ),
                'required' => false,
            ))
            ->add('tbpiGauche', NumberType::class, array(
                'label' => 'TBPI gauche',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '0.2',
                    'data-max' => '1.5',
                ),
                'required' => false,
            ))
            ->add('neuroesthesiometrie', NumberType::class, array(
                'label' => 'Neuroesthésiométrie (valeur la plus basse)',
                'attr' => array(
                    'unity' => 'volt',
                    'data-min' => '3',
                    'data-max' => '50',
                ),
                'required' => false,
            ))


            ->add('fcRepos', IntegerType::class, array(
                'label' => 'FC de repos',
                'attr' => array(
                    'unity' => 'battements par min',
                    'data-min' => '45',
                    'data-max' => '150',
                ),
                'required' => false,
            ))
            ->add('fcMax', IntegerType::class, array(
                'label' => 'FC max',
                'attr' => array(
                    'unity' => 'battements par min',
                    'data-min' => '72',
                    'data-max' => '220',
                ),
                'required' => false,
            ))
            ->add('taRepos', NumberType::class, array(
                'label' => 'TA systolique de repos',
                'attr' => array(
                    'unity' => 'mmHg',
                    'data-min' => '80',
                    'data-max' => '200',
                ),
                'required' => false,
            ))
            ->add('taPic', NumberType::class, array(
                'label' => 'TA systolique au pic',
                'attr' => array(
                    'unity' => 'mmHg',
                    'data-min' => '80',
                    'data-max' => '200',
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
            ->add('fraction', NumberType::class, array(
                'label' => 'Fraction d’éjection scintigraphie',
                'attr' => array(
                    'unity' => '%',
                    'data-min' => '25',
                    'data-max' => '70',
                ),
                'required' => false,
            ))
            ->add('debitReposGlobal', NumberType::class, array(
                'label' => 'Neuroesthésiométrie (valeur la plus basse)',
                'attr' => array(
                    'unity' => 'ml/min/g',
                    'data-min' => '0.5',
                    'data-max' => '4',
                ),
                'required' => false,
            ))
            ->add('debitRegadenosonGlobal', NumberType::class, array(
                'label' => 'Neuroesthésiométrie (valeur la plus basse)',
                'attr' => array(
                    'unity' => 'ml/min/g',
                    'data-min' => '0.5',
                    'data-max' => '4',
                ),
                'required' => false,
            ))


            ->add('debitReposSegment', BullseyeType::class, array())
            ->add('debitRegadenosonSegment', BullseyeType::class, array())
            ->add('analyseReposSegment', BullseyeType::class, array())
            ->add('analyseRegadenosonSegment', BullseyeType::class, array())


            ->add('coronaireDroiteStenose', ChoiceType::class, array(
                'label' => 'Coronaire droite',
                'placeholder' => '',
                'choices' => array(
                    '< 50%' => '< 50%',
                    '> 50%' => '> 50%',
                    '> 70%' => '> 70%',
                    'Occlusion' => 'Occlusion',
                ),
                'required' => false,
            ))
            ->add('coronaireDroiteFFR', ChoiceType::class, array(
                'label' => 'Coronaire droite',
                'placeholder' => '',
                'choices' => array(
                    'FFR < 0.7' => 'FFR < 0.7',
                    'FFR > 0.7' => 'FFR > 0.7',
                    'FFR pas de donnée' => 'FFR pas de donnée',
                ),
                'required' => false,
            ))
            ->add('ivaStenose', ChoiceType::class, array(
                'label' => 'IVA',
                'placeholder' => '',
                'choices' => array(
                    '< 50%' => '< 50%',
                    '> 50%' => '> 50%',
                    '> 70%' => '> 70%',
                    'Occlusion' => 'Occlusion',
                ),
                'required' => false,
            ))
            ->add('ivaFFR', ChoiceType::class, array(
                'label' => 'IVA',
                'placeholder' => '',
                'choices' => array(
                    'FFR < 0.7' => 'FFR < 0.7',
                    'FFR > 0.7' => 'FFR > 0.7',
                    'FFR pas de donnée' => 'FFR pas de donnée',
                ),
                'required' => false,
            ))
            ->add('circonflexeStenose', ChoiceType::class, array(
                'label' => 'Circonflexe',
                'placeholder' => '',
                'choices' => array(
                    '< 50%' => '< 50%',
                    '> 50%' => '> 50%',
                    '> 70%' => '> 70%',
                    'Occlusion' => 'Occlusion',
                ),
                'required' => false,
            ))
            ->add('circonflexeFFR', ChoiceType::class, array(
                'label' => 'Circonflexe',
                'placeholder' => '',
                'choices' => array(
                    'FFR < 0.7' => 'FFR < 0.7',
                    'FFR > 0.7' => 'FFR > 0.7',
                    'FFR pas de donnée' => 'FFR pas de donnée',
                ),
                'required' => false,
            ))
            ->add('diagonaleStenose', ChoiceType::class, array(
                'label' => 'Diagonale',
                'placeholder' => '',
                'choices' => array(
                    '< 50%' => '< 50%',
                    '> 50%' => '> 50%',
                    '> 70%' => '> 70%',
                    'Occlusion' => 'Occlusion',
                ),
                'required' => false,
            ))
            ->add('diagonaleFFR', ChoiceType::class, array(
                'label' => 'Diagonale',
                'placeholder' => '',
                'choices' => array(
                    'FFR < 0.7' => 'FFR < 0.7',
                    'FFR > 0.7' => 'FFR > 0.7',
                    'FFR pas de donnée' => 'FFR pas de donnée',
                ),
                'required' => false,
            ))
            ->add('marginaleStenose', ChoiceType::class, array(
                'label' => 'Marginale',
                'placeholder' => '',
                'choices' => array(
                    '< 50%' => '< 50%',
                    '> 50%' => '> 50%',
                    '> 70%' => '> 70%',
                    'Occlusion' => 'Occlusion',
                ),
                'required' => false,
            ))
            ->add('marginaleFFR', ChoiceType::class, array(
                'label' => 'Marginale',
                'placeholder' => '',
                'choices' => array(
                    'FFR < 0.7' => 'FFR < 0.7',
                    'FFR > 0.7' => 'FFR > 0.7',
                    'FFR pas de donnée' => 'FFR pas de donnée',
                ),
                'required' => false,
            ))
            ->add('pontageStenose', ChoiceType::class, array(
                'label' => 'Pontage',
                'placeholder' => '',
                'choices' => array(
                    '< 50%' => '< 50%',
                    '> 50%' => '> 50%',
                    '> 70%' => '> 70%',
                    'Occlusion' => 'Occlusion',
                ),
                'required' => false,
            ))
            ->add('pontageFFR', ChoiceType::class, array(
                'label' => 'Pontage',
                'placeholder' => '',
                'choices' => array(
                    'FFR < 0.7' => 'FFR < 0.7',
                    'FFR > 0.7' => 'FFR > 0.7',
                    'FFR pas de donnée' => 'FFR pas de donnée',
                ),
                'required' => false,
            ))


            ->add('iec', ChoiceType::class, array(
                'label' => 'IEC/Sartan',
                'required' => 'true',
                'expanded' => true,
                'multiple' => false,
                'placeholder' => false,
                'choices' => array(
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                ),
            ))
            ->add('betaBloquant', ChoiceType::class, array(
                'label' => 'Beta bloquant',
                'required' => 'true',
                'expanded' => true,
                'multiple' => false,
                'placeholder' => false,
                'choices' => array(
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                ),
            ))
            ->add('antiAgregant', ChoiceType::class, array(
                'label' => 'Anti agregant',
                'required' => 'true',
                'expanded' => true,
                'multiple' => false,
                'placeholder' => false,
                'choices' => array(
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                ),
            ))
            ->add('antiAldosterone', ChoiceType::class, array(
                'label' => 'Anti Aldosterone',
                'required' => 'true',
                'expanded' => true,
                'multiple' => false,
                'placeholder' => false,
                'choices' => array(
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                ),
            ))
            ->add('antiDiabetique', ChoiceType::class, array(
                'label' => 'Anti diabetique oral ',
                'required' => 'true',
                'expanded' => true,
                'multiple' => false,
                'placeholder' => false,
                'choices' => array(
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                ),
            ))
            ->add('insuline', ChoiceType::class, array(
                'label' => 'Insuline',
                'required' => 'true',
                'expanded' => true,
                'multiple' => false,
                'placeholder' => false,
                'choices' => array(
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                ),
            ))
            ->add('diuretique', ChoiceType::class, array(
                'label' => 'Diuretique',
                'required' => 'true',
                'expanded' => true,
                'multiple' => false,
                'placeholder' => false,
                'choices' => array(
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                ),
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Paraclinique::class,
        ]);
    }
}
