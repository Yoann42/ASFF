<?php

namespace ASFF\UserBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class RegistrationType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('prenom', null, array('label' => 'Prénom', 'translation_domain' => 'FOSUserBundle'))
			->add('nom', null, array('label' => 'Nom', 'translation_domain' => 'FOSUserBundle'))
			->add('sexe', ChoiceType::class, array('choices' => array('Homme' => 'H', 'Femme' => 'F'),'required' => 'false'))
			->add('date_naissance', BirthdayType::class, array('placeholder' => array('year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',)))
			->add('nom', null, array('label' => 'Nom', 'translation_domain' => 'FOSUserBundle'))
            ->add('licence', null, array('label' => 'Licence', 'translation_domain' => 'FOSUserBundle'))
			;
	}
	
	public function getParent()
	{
		return 'FOS\UserBundle\Form\Type\RegistrationFormType';
	}
}