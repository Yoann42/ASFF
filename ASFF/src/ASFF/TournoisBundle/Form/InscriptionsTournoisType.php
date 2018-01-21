<?php

namespace ASFF\TournoisBundle\Form;

use Doctrine\ORM\EntityRepository;
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
use Symfony\Component\HttpFoundation\Request;


class InscriptionsTournoisType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      
      $builder
        ->add('match_simple', CheckboxType::class, array('label' => 'Simple', 'required' => false))
        ->add('match_double', CheckboxType::class, array('label' => 'Double', 'required' => false))
        ->add('match_mixte', CheckboxType::class, array('label' => 'Mixte', 'required' => false));

        $builder
      ->add('partenaire_double', EntityType::class, array(
        'class' => 'ASFF\UserBundle\Entity\Users', 
        'choice_label' => function ($user) {return $user->getPrenomNom();},
        'label' => 'ASFF',
        'required' => false,
        'query_builder' => function(EntityRepository $er) 
        {
          //$user = $this->getUser();

          /*if ($user->getSexe() == 'F')
            $retour = $er->createQueryBuilder('u')->findBy(array('u.sexe' => 'H'), array('u.prenom' => 'ASC'), 5, 0);
          else*/
            $retour = $er->createQueryBuilder('u')->orderBy('u.prenom', 'ASC');
          return $retour;
        }
      ))
      
      ->add('partenaire_double_ext',    TextType::class, array('label' => 'Exterieur', 'required' => false))
      ->add('club_double_ext',    TextType::class, array('label' => 'Club', 'required' => false))

      ->add('partenaire_mixte', EntityType::class, array(
        'class' => 'ASFF\UserBundle\Entity\Users', 
        'choice_label' => function ($user) {return $user->getPrenomNom();},
        'label' => 'ASFF',
        'required' => false,
        'query_builder' => function(EntityRepository $er) {return $er->createQueryBuilder('u')->orderBy('u.prenom', 'ASC');}))
      ->add('partenaire_mixte_ext',    TextType::class, array('label' => 'Eexterieur','required' => false))
      ->add('club_mixte_ext',    TextType::class, array('label' => 'Club','required' => false))

	    ->add('remarque',    TextareaType::class, array('required' => false))
      ->add('save',      SubmitType::class, array('label' => 'Soumettre'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ASFF\TournoisBundle\Entity\InscriptionsTournois'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'asff_tournoisbundle_inscriptiontournois';
    }


}
