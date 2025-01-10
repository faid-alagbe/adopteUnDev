<?php

namespace App\Form;

use App\Entity\Company;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom de la Compagnie',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'nomInput',
                    'placeholder' => 'Entrez le nom de la compagnie',
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
            ->add('logo', FileType::class, [
                'label' => 'Logo',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'logoInput',
                ]
            ])
            ->add('presentation', TextareaType::class, [
                'label' => 'Présentation',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'presentationInput',
                    'placeholder' => 'Décrivez votre entreprise',
                ]
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Company::class,
        ]);
    }
}

