<?php

namespace ASFF\TournoisBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TournoisType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
      ->add('date',      DateType::class, array('label' => 'Date de publication'))
      ->add('adversaire',     TextType::class, array('label' => 'Nom du tournois'))
	  ->add('dateTournois',      DateType::class, array('label' => 'Date du tournois'))
	  ->add('dateLimit',      DateType::class, array('label' => "Date limite d'inscription"))
	  ->add('series',    TextType::class, array('label' => "Séries", 'required' => false))
	  ->add('TableauxPoules',    TextType::class, array('label' => "Tableaux/Poules", 'required' => false))
	  ->add('remarque',    TextareaType::class, array('label' => "Remarques", 'required' => false))
	  ->add('lienTournois',    TextType::class, array('label' => "Lien Web du tournois", 'required' => false))
	  ->add('lienLigue',    TextType::class, array('label' => "Lien Web de la ligue", 'required' => false))
      ->add('auteur',    TextType::class, array('label' => 'Auteur'))
      ->add('save',      SubmitType::class, array('label' => 'Sauvegarder'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ASFF\TournoisBundle\Entity\Tournois'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'asff_tournoisbundle_tournois';
    }


}
