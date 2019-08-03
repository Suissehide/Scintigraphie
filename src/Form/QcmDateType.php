<?php

namespace App\Form;

use App\Entity\QcmDate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class QcmDateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('question', TextareaType::class, array(
                'label' => 'Question',
                'empty_data' => '',
                'attr' => array(
                    'readonly' => true,
                ),
                'required' => false,
            ))
            ->add('reponse', ChoiceType::class, array(
                'label' => 'Réponse',
                'expanded' => true,
                'multiple' => false,
                'placeholder' => false,
                'choices' => array(
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                ),
                'required' => false,
            ))
            ->add('date', DateType::class, array(
                'label' => 'Date de l\'événement',
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'required' => false,
                'attr' => array(
                    'placeholder' => 'dd/mm/yyyy',
                ),
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => QcmDate::class,
        ]);
    }
}
