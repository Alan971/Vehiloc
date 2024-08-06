<?php

namespace App\Form;

use App\Entity\Voiture;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\Factory\Cache\ChoiceLabel;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType as TypeTextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Test\TypeTestCase;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VoitureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Marque', TextType::class)
            ->add('Name', TextType::class)
            ->add('RentAgency', TextType::class)
            ->add('SeatNumber', NumberType::class,[
                'choice_label' => [1,2,3,4,5,6,7,8,9] 
            ])
            ->add('GearType')
            ->add('PricePerDay')
            ->add('PricePerMonth')
            ->add('PowerType')
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
