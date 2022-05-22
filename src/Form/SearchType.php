<?php

namespace App\Form;

use App\Classe\Search;
use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType
{

    public function buildForm( FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add ('string', TextType::class,[
                'label' =>'Rechercher',
                'required' =>false,
                'attr'=>[
                    'placeholder'=>'Votre recherche ...',
                ]
            ])
            ->add('categories', EntityType::class ,[
                'label' =>'false',
                'required' =>'false',
                'class' => Category::class,
                'multiple' =>true,
                'expended' => true
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Search::class, 
            'method'=>'GET', /*pour que les données transitent par l'url et puissent être copiées*/
            'csrf_protection' =>false, /* aucun besoin de crypting ou de sécurité */
        ]);       

    }

    public function getBlockPrefix()
    {
        return ''; /* pour eviter d'avoir le prefixe search dans l'url*/
    }
}