<?php

namespace App\Form;

use App\Entity\Voiture;
use App\Enum\GearStatus as EnumGearStatus;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
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
            ->add('SeatNumber', ChoiceType::class, array(
                'choices' => array(
                '1' => '1', 
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6',
                '7' => '7',
                '8' => '8',
                '9' => '9',
                ),          
            ))
            ->add('GearType', EnumType::class, [
                'class' => EnumGearStatus::class,
            ])
            ->add('PricePerDay',MoneyType::class, [
                'divisor' => 100,
            ] )
            ->add('PricePerMonth', MoneyType::class, [
                'divisor' => 100,
            ])
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
