<?php

namespace App\Form;

use App\Entity\ProfilsDev;
use App\Entity\User;
use App\Entity\Langages;
use Doctrine\DBAL\Types\DecimalType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfilsDevType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'nomInput',
                    'placeholder' => 'Entrez votre nom',
                ]
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'prenomInput',
                    'placeholder' => 'Entrez votre prénom',
                ]
            ])
            ->add('localisation', TextType::class, [
                'label' => 'Localisation (Ville, Pays)',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'localisationInput',
                    'placeholder' => 'Entrez votre localisation',
                ]
            ])
            ->add('experience', IntegerType::class, [
                'label' => 'Années d\'expérience',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'experienceInput',
                    'placeholder' => 'Entrez vos années d\'expérience',
                ]
            ])
            ->add('salaire_min', TextType::class, [
                'label' => 'Salaire minimum (en €)',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'salaireMinInput',
                    'placeholder' => 'Entrez votre salaire minimum souhaité',
                ]
            ])
            ->add('biographie', TextareaType::class, [
                'label' => 'Biographie',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'biographieInput',
                    'placeholder' => 'Décrivez-vous',
                ]
            ])
            ->add('avatar', FileType::class, [
                'label' => 'Avatar',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'avatarInput',
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
            'data_class' => ProfilsDev::class,
        ]);
    }
}