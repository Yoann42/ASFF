<?php

namespace ASFF\ActualiteBundle\Form;

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

class ActuType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
      ->add('date',      DateType::class, array('label' => 'Date de publication'))
      ->add('titre',     TextType::class, array('label' => "Titre de l'annonce"))
      ->add('auteur',    TextType::class, array('label' => 'Auteur'))
      ->add('contenu',   TextareaType::class, array('label' => "Contenu de l'annonce"))
      ->add('publier', CheckboxType::class, array('label' => "Publier", 'required' => false))
      ->add('urgent', CheckboxType::class, array('label' => "Urgent, à publier en entête", 'required' => false))
	    ->add('image',     ImageType::class, array('label' => "Ajouter une image à l'annonce", 'required' => false))
      ->add('save',      SubmitType::class, array('label' => 'Sauvegarder'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ASFF\ActualiteBundle\Entity\Actu'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'asff_actualitebundle_actu';
    }


}
