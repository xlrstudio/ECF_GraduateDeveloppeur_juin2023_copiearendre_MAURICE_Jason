<?php

namespace App\Form;

use App\Entity\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Contracts\Service\Attribute\Required;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;


class FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Prenom')
            ->add('email')
            ->add('Couverts')
            ->add('Heure', ChoiceType::class, [
                'choices' => [
                '12:00' => '12:00',
                '12:15' => '12:15',
                '12:30' => '12:30',
                '12:45' => '12:45',
                '13:00' => '13:00',
                '13:15' => '13:15',
                '13:30' => '13:30',
                '19:00' => '19:00',
                '19:15' => '19:15',
                '19:30' => '19:30',
                '19:45' => '19:45',
                '20:00' => '20:00',
                '20:15' => '20:15',
                '20:30' => '20:30',
                '20:45' => '20:45',
                '21:00' => '21:00',
                '21:15' => '21:15',
                '21:30' => '21:30',
                '21:45' => '21:45',
                '22:00' => '22:00',
                ],])
            ->add('Allergies')
            ->add('Date', DateType::class, [
                'widget' => 'single_text',
                    'html5' => false,
                'format' => 'yyyy-mm-dd',

                'attr' => ['class' => 'js-datepicker'],]);
        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
        ]);
    }
}
