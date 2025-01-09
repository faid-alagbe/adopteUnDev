<?php

namespace App\Form;

use App\Entity\ProfilsDev;
use App\Entity\User;
use App\Entity\Langages;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfilsDevType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Votre Nom',
                'attr' => [
                    'class'  => 'form-control',
                    'id' => 'firstnameInput',
                    'placeholder' => 'Enter your firstname',
                    'required' => true

                ]
            ])
            ->add('prenom')
            ->add('localisation')
            ->add('experience')
            ->add('salaire_min')
            ->add('biographie')
            ->add('avatar')
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
            ])
            ->add('langages', EntityType::class, [
                'class' => Langages::class,
                'choice_label' => 'id',
                'multiple' => true,
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