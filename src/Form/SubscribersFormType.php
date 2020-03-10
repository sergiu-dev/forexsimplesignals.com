<?php

namespace App\Form;

use App\Entity\Subscribers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class SubscribersFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
	            'attr' => [
		            'placeholder' => 'Enter email address',
		            'required' => true,
	            ],
	            'constraints' => [
		            new NotBlank([
			            'message' => 'Please enter your email address',
		            ]),
	            ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Subscribers::class,
        ]);
    }
}
