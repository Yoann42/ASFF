<?php

namespace ASFF\TournoisBundle\Controller;

use ASFF\TournoisBundle\Entity\Tournois;
use ASFF\TournoisBundle\Entity\InscriptionsTournois;
use ASFF\TournoisBundle\Form\InscriptionsTournoisType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

require_once(__DIR__.'\..\..\poona.php');

class InscriptionController extends Controller
{
	/**
    * @Security("has_role('ROLE_JOUEUR')")
    */
	public function addAction(Request $request, $id)
	{
		$em = $this->getDoctrine()->getManager();
		
		$tournois = $em->getRepository('ASFFTournoisBundle:Tournois')->find($id);
		
		// ou null si l'id $id  n'existe pas, d'où ce if :
		if (null === $tournois) {
		  throw new NotFoundHttpException("Le tournois d'id ".$id." n'existe pas.");
		}
		
		$user = $this->getUser();
		$date = new \DateTime();
		
		if ( $date < $tournois->getDateLimit() )
		{
			if ( $em->getRepository('ASFFTournoisBundle:InscriptionsTournois')->findByUserAndTournois($user, $tournois) != NULL )
				return $this->render('ASFFTournoisBundle:Inscription:add.html.twig', array('tournois' => $tournois, 'user' => $user, 'ok' => 0));
			else
			{
				if(!empty($user->getLicence()))
				{
					$joueur = getPoonaJoueur($user->getLicence());
					$user->setMsn($joueur->simple);
					$user->setAim($joueur->double);
					$user->setYim($joueur->mixte);
					
					$em->persist($user);
					$em->flush();
				}
				
				$InscriptionsTournois = new InscriptionsTournois();
				$form = $this->createForm(InscriptionsTournoisType::class, $InscriptionsTournois);
		
				if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

					$InscriptionsTournois->setTournois($tournois);
					$InscriptionsTournois->setUser($user);
					$em->persist($InscriptionsTournois);
					$em->flush();
					
					return $this->redirectToRoute('asff_tournois_view', array('id' => $tournois->getId()));
				}	
				
				return $this->render('ASFFTournoisBundle:Inscription:add.html.twig', array('tournois' => $tournois, 'user' => $user, 'ok' => 1, 'form' => $form->createView()));
			}
		}
		else
			return $this->render('ASFFTournoisBundle:Inscription:add.html.twig', array('tournois' => $tournois, 'user' => $user, 'ok' => 2));
    }
	
	/**
    * @Security("has_role('ROLE_JOUEUR')")
    */
	public function deleteAction(Request $request, $id)
	{
		$em = $this->getDoctrine()->getManager();
		
		$tournois = $em->getRepository('ASFFTournoisBundle:Tournois')->find($id);
		
		// ou null si l'id $id n'existe pas, d'où ce if :
		if (null === $tournois) {
		  throw new NotFoundHttpException("Le tournois d'id ".$id." n'existe pas.");
		}

		$InscriptionsTournois = $em->getRepository('ASFFTournoisBundle:InscriptionsTournois')->findByUserAndTournois($this->getUser(), $tournois);
		$em->remove($InscriptionsTournois);
		$em->flush();

    	return $this->render('ASFFTournoisBundle:Inscription:delete.html.twig', array('tournois' => $tournois));
	}
	
	/**
    * @Security("has_role('ROLE_JOUEUR')")
    */
	public function editAction(Request $request, $id)
	{
		$em = $this->getDoctrine()->getManager();
		
		$tournois = $em->getRepository('ASFFTournoisBundle:Tournois')->find($id);
		
		// ou null si l'id $id  n'existe pas, d'où ce if :
		if (null === $tournois) {
		  throw new NotFoundHttpException("Le tournois d'id ".$id." n'existe pas.");
		}
		
		$user = $this->getUser();
		$date = new \DateTime();
		
		if(!empty($user->getLicence()))
		{
			$joueur = getPoonaJoueur($user->getLicence());
			$user->setMsn($joueur->simple);
			$user->setAim($joueur->double);
			$user->setYim($joueur->mixte);
			
			$em->persist($user);
			$em->flush();
		}
		
		$InscriptionsTournois = $em->getRepository('ASFFTournoisBundle:InscriptionsTournois')->findByUserAndTournois($user, $tournois);
		$form = $this->createForm(InscriptionsTournoisType::class, $InscriptionsTournois);
		
		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

			$InscriptionsTournois->setTournois($tournois);
			$InscriptionsTournois->setUser($user);
			$InscriptionsTournois->setDate($date);
			$em->persist($InscriptionsTournois);
			$em->flush();
			
			return $this->redirectToRoute('asff_tournois_view', array('id' => $tournois->getId()));
		}	
		
		return $this->render('ASFFTournoisBundle:Inscription:edit.html.twig', array('tournois' => $tournois, 'user' => $user, 'form' => $form->createView()));
	}
}
