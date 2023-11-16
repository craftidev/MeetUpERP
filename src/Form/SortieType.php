<?php

namespace App\Form;

use App\Entity\Sortie;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\Types\String_;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SortieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, ['label' => 'Nom de la sortie :'])
            ->add('dateHeureDebut', DateTimeType::class, ['label' => 'Date et heure de la sortie :'])
            ->add('duree', IntegerType::class, ['label' => 'Durée de la sortie en minutes :'])
            ->add('dateLimiteInscription', DateType::class, ['label' => 'Date limite d\'inscription :'])
            ->add('nbInscriptionsMax', IntegerType::class, ['label' => 'Nombre maximum d\'inscriptions :'])
            ->add('infosSortie', TextareaType::class, ['required' => false, 'label' => "Informations concernant la sortie :"])
            ->add('lieu', TextType::class,['label' => 'Lieu de la sortie :'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sortie::class,
        ]);
    }
}
