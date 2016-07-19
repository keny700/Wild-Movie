<?php
// src/FrontendBundle/Form/CommentType.php

namespace FrontendBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('comment', 'textarea');
    }

    public function getName()
    {
        return 'comment';
    }
}