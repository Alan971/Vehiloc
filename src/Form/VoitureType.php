<?php

namespace App\Form;

use App\Entity\Voiture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VoitureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('Marque', TextType::class)
            ->add('Name', TextType::class)
            // ->add('RentAgency', TextType::class)
            ->add('SeatNumber', NumberType::class
                
            )
            ->add('GearType', TextType::class)
            ->add('PricePerDay',MoneyType::class )
            ->add('PricePerMonth', MoneyType::class)
            // ->add('PowerType', TextType::class)
            ->add('Comment', TextareaType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Voiture::class,
        ]);
    }
}
