<?php

namespace App\Form\Type;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extensions\Core\Type\TextType;
use Symfony\Component\Form\Extensions\Core\Type\EmailTYpe;
use Symfony\Component\Form\Extensions\Core\Type\TextAreaType;

class UsersFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('firstname', TextType::class)
        ->add('lastname', TextType::class)
        ->add('Email', EmailType::class)
        ->add('Message', TextAreaType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class'=>Users::class,]);
    }
}