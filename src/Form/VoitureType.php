<?php

namespace App\Form;

use App\Entity\Voiture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VoitureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('matricule')
            ->add('marque')
            ->add('modele')
            ->add('klm')
            ->add('annee',DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd', // Spécifiez le format de date qui convient à votre besoin
            ])
            ->add('prix')
            //->add('reservation')
           // ->add('id_ft')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Voiture::class,
        ]);
    }
}
