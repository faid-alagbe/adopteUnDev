<?php

namespace App\Form;

use App\Entity\Langages;
use App\Entity\Postes;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'nomInput',
                    'placeholder' => 'Entrez votre nom',
                ]
            ])
            ->add('localisation' , TextType::class, [
                'label' => 'Localisation',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'nomInput',
                    'placeholder' => 'Rennes, France',
                ]
            ])
            ->add('experience_requise', IntegerType::class, [
                'label' => 'Année d\'Experience',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'nomInput',
                    'placeholder' => '0',
                ]
            ])
            ->add('salaire', IntegerType::class, [
                'label' => 'Salaire proposer',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'nomInput',
                    'placeholder' => '0',
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description du Poste',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'biographieInput',
                    'placeholder' => 'Décrivez-vous',
                ]
            ])
            ->add('langages', EntityType::class, [
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Postes::class,
        ]);
    }
}
