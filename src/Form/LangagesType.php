<?php

namespace App\Form;

use App\Entity\Langages;
use App\Entity\Postes;
use App\Entity\ProfilsDev;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LangagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('postes', EntityType::class, [
                'class' => Postes::class,
'choice_label' => 'id',
'multiple' => true,
            ])
            ->add('profilsDevs', EntityType::class, [
                'class' => ProfilsDev::class,
'choice_label' => 'id',
'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Langages::class,
        ]);
    }
}
