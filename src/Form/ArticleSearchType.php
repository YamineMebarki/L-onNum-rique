<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\ArticleSearch;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ArticleSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('articleSearch', TextType::class, [
                    'label' => false
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ArticleSearch::class,
            'method' => 'get',
            'csrf_protection' => false
        ]);
    }

    public function  getBlockPrefix()
    {
        return '';
    }
}
