<?php
namespace tximista\cliente1\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		parent::buildForm($builder, $options);

		// add customize field
		$builder->add('name');
	}

	public function getName()
	{
		return 'tximistacliente1_user_registration';
	}
}
