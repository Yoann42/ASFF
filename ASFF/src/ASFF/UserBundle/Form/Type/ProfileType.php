<?php

namespace ASFF\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class ProfileType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('date_naissance', BirthdayType::class, array('placeholder' => array('year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',)))
			->add('licence', null, array('label' => 'Licence', 'translation_domain' => 'FOSUserBundle'))
			->add('image', ImageType::class, array('label' => 'Image', 'required' => false))
			;
	}
	
	public function getParent()
	{
		return 'FOS\UserBundle\Form\Type\ProfileFormType';
	}
}