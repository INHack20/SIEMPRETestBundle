<?php

namespace SIEMPRE\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('post')
            //->add('fechaPublicacion')
            ->add('category','entity',array(
                'class' => 'SIEMPRE\\TestBundle\\Entity\\Category',
                'property' => 'nombre',
                'empty_value' => '.: Seleccione :.'
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SIEMPRE\TestBundle\Entity\Post'
        ));
    }

    public function getName()
    {
        return 'siempre_testbundle_posttype';
    }
}
