<?php
// src/FrontendBundle/Form/FilmType.php

namespace FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class FilmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('parution')
            ->add('folder', FileType::class, array('label' => 'Folder (jpg file)'))
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FrontendBundle\Entity\Film',
        ));
    }
}