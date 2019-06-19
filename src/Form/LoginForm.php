<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoginForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'required' => FALSE,
                'label'    => FALSE,
                'attr'     => [
                    'placeholder'  => 'form.email',
                ]
            ])
            ->add('password', PasswordType::class, [
                'required' => FALSE,
                'label'    => FALSE,
                'attr'     => [
                    'placeholder'  => 'placeholder.password',
                ]
            ])
            ->add('captcha', HiddenType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'csrf_protection' => TRUE,
            'csrf_field_name' => '_token',
            'csrf_token_id'   => 'authenticate',
        ]);
    }
}