<?php

namespace Mybasicmodule\Form ;


use Doctrine\DBAL\Types\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\Form\DateType;



/**
 * Summary of CommentType
 */
class CommentType extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('task')
        ->add('dueDate', DateType::class)
        ->add('save', SubmitType::class);
    }

}