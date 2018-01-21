<?php
// src/ASFF/UserBundle/Controller/MonCompteController.php;

namespace ASFF\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

require_once(__DIR__.'\..\..\poona.php');

class MonCompteController extends Controller
{
	
	public function indexAction()
	{
		$em = $this->getDoctrine()->getManager();
		$user = $this->getUser();
		$ListInscriptionsTournois = $em->getRepository('ASFFTournoisBundle:InscriptionsTournois')->findByUser($user);

		if(!empty($user->getLicence()))
		{
			$joueur = getPoonaJoueur($user->getLicence());
			$user->setMsn($joueur->simple);
			$user->setAim($joueur->double);
			$user->setYim($joueur->mixte);
			
			$em->persist($user);
			$em->flush();
		}
		
		return $this->render('ASFFUserBundle:MonCompte:index.html.twig', array('user' => $user, 'ListInscriptionsTournois' => $ListInscriptionsTournois));
	}

}
