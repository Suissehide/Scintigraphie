<?php

namespace App\Form;

use App\Entity\Patient;
use App\Form\CardiovasculaireType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use phpDocumentor\Reflection\Types\Integer;

class PatientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                'label' => 'Nom',
                'required' => true,
            ))
            ->add('prenom', TextType::class, array(
                'label' => 'Prénom',
                'required' => true,
            ))
            ->add('sexe', ChoiceType::class, array(
                'label' => 'Sexe',
                'required' => 'true',
                'expanded' => true,
                'multiple' => false,
                'placeholder' => false,
                'choices' => array(
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ),
            ))
            ->add('dateNaissance', DateType::class, array(
                'label' => 'Date de naissance',
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'required' => false,
            ))
            ->add('age', IntegerType::class, array(
                'label' => 'Âge',
                'required' => false,
            ))

            ->add('cardiovasculaire', CardiovasculaireType::class, array(
                'label' => 'Cardiovasculaire'
            ))

            ->add('save', SubmitType::class, array('label' => 'Ajouter'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Patient::class,
            'allow_extra_fields' => true,
        ]);
    }
}
