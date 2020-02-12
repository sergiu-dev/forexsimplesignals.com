<?php

namespace App\Form;

use App\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'placeholder' => 'Name',
                    'autofocus' => true,
                    'required' => true,
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your name',
                    ]),
                ],
            ])
            ->add('email', TextType::class, [
                'attr' => [
                    'placeholder' => 'Email address',
                    'required' => true,
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your email address',
                    ]),
                ],
            ])
            ->add('subject', TextType::class, [
                'attr' => [
                    'placeholder' => 'Subject',
                    'required' => true,
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a subject',
                    ]),
                ],
            ])
            ->add('message', TextareaType::class, [
                'attr' => [
                    'placeholder' => 'Message',
                    'required' => true,
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your message',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}