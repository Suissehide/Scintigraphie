<?php

namespace App\Form;

use App\Entity\Paraclinique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

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
                    'step' => '0.1',
                ),
                'required' => false,
            ))
            ->add('ldl', NumberType::class, array(
                'label' => 'LDL-Cholestérol',
                'attr' => array(
                    'unity' => 'g/l',
                    'data-min' => '0.3',
                    'data-max' => '2.5',
                    'step' => '0.01',
                ),
                'required' => false,
            ))
            ->add('hdl', NumberType::class, array(
                'label' => 'HDL-Cholestérol',
                'attr' => array(
                    'unity' => 'g/l',
                    'data-min' => '0.3',
                    'data-max' => '1.5',
                    'step' => '0.01',
                ),
                'required' => false,
            ))
            ->add('triglycerides', NumberType::class, array(
                'label' => 'Triglycérides',
                'attr' => array(
                    'unity' => 'g/l',
                    'data-min' => '0.4',
                    'data-max' => '10',
                    'step' => '0.01',
                ),
                'required' => false,
            ))
            ->add('creatininemie', NumberType::class, array(
                'label' => 'Creatininémie',
                'attr' => array(
                    'unity' => 'µmol/l',
                    'data-min' => '30',
                    'data-max' => '300',
                    'step' => '0.01',
                ),
                'required' => false,
            ))
            ->add('dfg', NumberType::class, array(
                'label' => 'DFG (CKD-EPI)',
                'attr' => array(
                    'unity' => 'ml/min',
                    'data-min' => '20',
                    'data-max' => '150',
                    'step' => '0.01',
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
                    'step' => '0.1',
                ),
                'required' => false,
            ))
            ->add('ipsGauche', NumberType::class, array(
                'label' => 'IPS gauche',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '0.2',
                    'data-max' => '1.5',
                    'step' => '0.1',
                ),
                'required' => false,
            ))
            ->add('tbpiDroit', NumberType::class, array(
                'label' => 'TBPI droit',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '0.2',
                    'data-max' => '1.5',
                    'step' => '0.1',
                ),
                'required' => false,
            ))
            ->add('tbpiGauche', NumberType::class, array(
                'label' => 'TBPI gauche',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '0.2',
                    'data-max' => '1.5',
                    'step' => '0.1',
                ),
                'required' => false,
            ))
            ->add('neuroesthesiometrie', NumberType::class, array(
                'label' => 'Neuroesthésiométrie (valeur la plus haute)',
                'attr' => array(
                    'unity' => 'volt',
                    'data-min' => '3',
                    'data-max' => '50',
                    'step' => '0.1',
                ),
                'required' => false,
            ))

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

            // 
            ->add('ivaPourcentageRegdn', IntegerType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                ),
                'required' => false,
            ))
            ->add('ivaPourcentageRepos', IntegerType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                ),
                'required' => false,
            ))
            ->add('ivaDebitRegdn', NumberType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                    'step' => '0.01',
                ),
                'required' => false,
            ))
            ->add('ivaDebitRepos', NumberType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                    'step' => '0.01',
                ),
                'required' => false,
            ))
            ->add('ivaReserve', NumberType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                    'step' => '0.01',
                ),
                'required' => false,
            ))

            ->add('cxPourcentageRegdn', IntegerType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                ),
                'required' => false,
            ))
            ->add('cxPourcentageRepos', IntegerType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                ),
                'required' => false,
            ))
            ->add('cxDebitRegdn', NumberType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                    'step' => '0.01',
                ),
                'required' => false,
            ))
            ->add('cxDebitRepos', NumberType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                    'step' => '0.01',
                ),
                'required' => false,
            ))
            ->add('cxReserve', NumberType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                    'step' => '0.01',
                ),
                'required' => false,
            ))

            ->add('cdtePourcentageRegdn', IntegerType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                ),
                'required' => false,
            ))
            ->add('cdtePourcentageRepos', IntegerType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                ),
                'required' => false,
            ))
            ->add('cdteDebitRegdn', NumberType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                    'step' => '0.01',
                ),
                'required' => false,
            ))
            ->add('cdteDebitRepos', NumberType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                    'step' => '0.01',
                ),
                'required' => false,
            ))
            ->add('cdteReserve', NumberType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                    'step' => '0.01',
                ),
                'required' => false,
            ))

            ->add('totalPourcentageRegdn', IntegerType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                ),
                'required' => false,
            ))
            ->add('totalPourcentageRepos', IntegerType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                ),
                'required' => false,
            ))
            ->add('totalDebitRegdn', NumberType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                    'step' => '0.01',
                ),
                'required' => false,
            ))
            ->add('totalDebitRepos', NumberType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                    'step' => '0.01',
                ),
                'required' => false,
            ))
            ->add('totalReserve', NumberType::class, array(
                'label' => '',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                    'step' => '0.01',
                ),
                'required' => false,
            ))


            // Coronarographie

            ->add('dateCoronarographie', DateType::class, array(
                'label' => 'Date de la coronarographie',
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'attr' => array(
                    'placeholder' => 'dd/mm/yyyy',
                ),
                'required' => false,
            ))

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
            ->add('coronaireDroiteFFR', NumberType::class, array(
                'label' => 'Coronaire droite',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '0',
                    'data-max' => '1.2',
                    'step' => '0.1',
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
            ->add('ivaFFR', NumberType::class, array(
                'label' => 'IVA',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '0',
                    'data-max' => '1.2',
                    'step' => '0.1',
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
            ->add('circonflexeFFR', NumberType::class, array(
                'label' => 'Circonflexe',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '0',
                    'data-max' => '1.2',
                    'step' => '0.1',
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
            ->add('diagonaleFFR', NumberType::class, array(
                'label' => 'Diagonale',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '0',
                    'data-max' => '1.2',
                    'step' => '0.1',
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
            ->add('marginaleFFR', NumberType::class, array(
                'label' => 'Marginale',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '0',
                    'data-max' => '1.2',
                    'step' => '0.1',
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
            ->add('pontageFFR', NumberType::class, array(
                'label' => 'Pontage',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '0',
                    'data-max' => '1.2',
                    'step' => '0.1',
                ),
                'required' => false,
            ))

            ->add('coronaireDroiteCMR', NumberType::class, array(
                'label' => 'Coronaire',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '1',
                    'data-max' => '10',
                    'step' => '0.01',
                ),
                'required' => false,
            ))
            ->add('ivaCMR', NumberType::class, array(
                'label' => 'IVA',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '1',
                    'data-max' => '10',
                    'step' => '0.01',
                ),
                'required' => false,
            ))
            ->add('circonflexeCMR', NumberType::class, array(
                'label' => 'Circonflexe',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '1',
                    'data-max' => '10',
                    'step' => '0.01',
                ),
                'required' => false,
            ))
            ->add('diagonaleCMR', NumberType::class, array(
                'label' => 'Diagonale',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '1',
                    'data-max' => '10',
                    'step' => '0.01',
                ),
                'required' => false,
            ))
            ->add('marginaleCMR', NumberType::class, array(
                'label' => 'Marginale',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '1',
                    'data-max' => '10',
                    'step' => '0.01',
                ),
                'required' => false,
            ))
            ->add('pontageCMR', NumberType::class, array(
                'label' => 'Pontage',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '1',
                    'data-max' => '10',
                    'step' => '0.01',
                ),
                'required' => false,
            ))

            ->add('coronaireDroiteIMR', IntegerType::class, array(
                'label' => 'Coronaire',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                ),
                'required' => false,
            ))
            ->add('ivaIMR', IntegerType::class, array(
                'label' => 'IVA',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                ),
                'required' => false,
            ))
            ->add('circonflexeIMR', IntegerType::class, array(
                'label' => 'Circonflexe',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                ),
                'required' => false,
            ))
            ->add('diagonaleIMR', IntegerType::class, array(
                'label' => 'Diagonale',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                ),
                'required' => false,
            ))
            ->add('marginaleIMR', IntegerType::class, array(
                'label' => 'Marginale',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
                ),
                'required' => false,
            ))
            ->add('pontageIMR', IntegerType::class, array(
                'label' => 'Pontage',
                'attr' => array(
                    'unity' => '',
                    'data-min' => '',
                    'data-max' => '',
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
                'required' => false,
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
                'required' => false,
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
                'required' => false,
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
                'required' => false,
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
                'required' => false,
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
                'required' => false,
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
                'required' => false,
            ))

            //IRM cérébrale

            ->add('date', DateType::class, array(
                'label' => 'Date',
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'attr' => array(
                    'placeholder' => 'dd/mm/yyyy',
                ),
                'required' => false,
            ))
            ->add('fasekas', ChoiceType::class, array(
                'label' => 'Fasekas',
                'placeholder' => '',
                'choices' => array(
                    'Stade 1' => 'Stade 1',
                    'Stade 2' => 'Stade 2',
                    'Stade 3' => 'Stade 3',
                    'Stade 4' => 'Stade 4',
                ),
                'required' => false,
            ))
            ->add('avc', ChoiceType::class, array(
                'label' => 'AVC',
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Paraclinique::class,
        ]);
    }
}
