<?php

namespace App\Form;

use App\Entity\Company;
use App\Entity\CompanyCrters;
use App\Entity\Langages;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompanyCrtersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('salaire', IntegerType::class, [
                'label' => 'Salaire',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'locationInput',
                    'placeholder' => '10000',
                ]
            ])
            ->add('location', TextType::class, [
                'label' => 'Localisation',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'locationInput',
                    'placeholder' => 'Ville, Pays',
                ]
            ])
            ->add('experienceYear', IntegerType::class, [
                'label' => 'Experience Réquis',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'locationInput',
                    'placeholder' => '3',
                ]
            ])
            ->add('technologies', EntityType::class, [
                'class' => Langages::class, // Entité liée
                'choice_label' => 'nom', // Champ affiché dans la liste déroulante
                'multiple' => true, // Permet la sélection multiple
                'expanded' => false, // Garde la liste déroulante (false pour dropdown, true pour cases à cocher)
                'label' => 'Langages maîtrisés',
                'attr' => [
                    'class' => 'form-control', // Classe CSS pour le style
                    'data-choices' => true, // Attribut personnalisé si nécessaire
                    'data-choices-text-unique-true' => true, // Options uniques dans la liste
                    'id' => 'skillsInput', // ID personnalisé
                ],
            ])
            //             ->add('company', EntityType::class, [
            //                 'class' => Company::class,
            // 'choice_label' => 'id',
            //             ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CompanyCrters::class,
        ]);
    }
}
