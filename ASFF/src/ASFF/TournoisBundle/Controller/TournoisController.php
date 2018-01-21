<?php

namespace ASFF\TournoisBundle\Controller;

use ASFF\TournoisBundle\Entity\Tournois;
use ASFF\TournoisBundle\Form\TournoisType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\StreamedResponse;

require_once(__DIR__.'\..\..\poona.php');

class TournoisController extends Controller
{
    public function indexAction(Request $request)
    {
		$mailer = $this->container->get('mailer');
		$em = $this->getDoctrine()->getManager();
		
		$repository = $em->getRepository('ASFFTournoisBundle:Tournois');

		$user = $this->getUser();
		$ListInscriptionsTournois = $em->getRepository('ASFFTournoisBundle:InscriptionsTournois')->findByUser($user);

		$listTournois = $repository->findAll();

		// Et modifiez le 2nd argument pour injecter notre liste
		return $this->render('ASFFTournoisBundle:Tournois:index.html.twig', array('listTournois' => $listTournois, 'listInscriptionsTournois' => $ListInscriptionsTournois));
	}
	
	/**
    * @Security("has_role('ROLE_BUREAU')")
    */
	public function getparticipantsAction(Request $request, $id)
	{
		$em = $this->getDoctrine()->getManager();
		
		$tournois = $em->getRepository('ASFFTournoisBundle:Tournois')->find($id);
		
		// ou null si l'id $id  n'existe pas, d'où ce if :
		if (null === $tournois) {
		  throw new NotFoundHttpException("Le tournois d'id ".$id." n'existe pas.");
		}
		
		$response = new StreamedResponse();
		$response->setCallback(function() use ($tournois) 
		{
			$handle = fopen('php://output', 'w+');

			fputcsv($handle, [	'Tournois', 
								$tournois->getAdversaire()], ',');
								
			fputcsv($handle, [	'Date', 
								$tournois->getCsvDateTournois()], ',');
							
			fputcsv($handle, [	'Series', 
								$tournois->getSeries()], ',');

			fputcsv($handle, [	'Tableaux / Poules', 
								$tournois->getTableauxPoules()], ',');
					
			fputcsv($handle, [], ',');
			
			fputcsv($handle, [	'Pseudo', 
								'Nom', 
								'Prenom', 
								'Sexe',
								'Mail', 
								'Date de Naissance',
								"Date de l'inscription",
								'Licence', 
								'Classement S', 
								'Classement D',
								'Classement M',
								'SH',
								'SD',
								'DH',
								'DD',
								'DM',
								'Partenaire Double', 
								'Club Double',
								'Partenaire Mixte',
								'Club Mixte',
								'Commentaires du joueur'], 
							',');

			$em = $this->getDoctrine()->getManager();
			$ListInscrits = $em
					->getRepository('ASFFTournoisBundle:InscriptionsTournois')
					->findByTournois($tournois);

			$ListUsers = $em->getRepository('ASFFUserBundle:Users');
		
			foreach ($ListInscrits as $usertournois) {
				$user = $usertournois->getUser();
				if(!empty($user->getLicence()))
				{
					$joueur = getPoonaJoueur($user->getLicence());
					$user->setMsn($joueur->simple);
					$user->setAim($joueur->double);
					$user->setYim($joueur->mixte);
					
					$em->persist($user);
					$em->flush();
				}

				if ($usertournois->getMatchMixte() == true)
				{
					if ($user->getSexe() == 'H')
					{
						$SH = $user->getMsn();
						$SD = '';
					}
					else
					{
						$SH = '';
						$SD = $user->getMsn();
					}
				}
				else
				{
					$SH = '';
					$SD = '';
				}

				if ($usertournois->getMatchMixte() == true)
				{
					if (empty($usertournois->getPartenaireMixte()))
					{
						$partenairemixte = $usertournois->getPartenaireMixteExt();
						$clubmixte = $usertournois->getClubMixteExt();
					}
					else
					{

						$partenairemixte = $ListUsers->findOneBy(array('username' => $usertournois->getPartenaireMixte()))->getPrenomNom();
						$clubmixte = 'ASFF';
					}

						$DM = $user->getYim();
				}
				else 
				{
					$partenairemixte = '';
					$clubmixte = '';
					$DM = '';
				}

				if ($usertournois->getMatchDouble() == true)
				{
					if (empty($usertournois->getPartenaireDouble()))
					{
						$partenairedouble = $usertournois->getPartenaireDoubleExt();
						$clubdouble = $usertournois->getClubDoubleExt();
					}
					else
					{
						$partenairedouble = $ListUsers->findOneBy(array('username' => $usertournois->getPartenaireDouble()))->getPrenomNom();
						$clubdouble = 'ASFF';
					}

					if ($user->getSexe() == 'H')
					{
						$DH = $user->getAim();
						$DD = '';
					}
					else
					{
						$DH = '';
						$DD = $user->getAim();
					}
				}
				else 
				{
					$partenairedouble = '';
					$clubdouble = '';
					$DH = '';
					$DD = '';
				}


				$list = array($user->getUsername(),$user->getNom(), $user->getPrenom(), $user->getSexe(), $user->getEmail(), $user->getCsvDateNaissance(),
							  $usertournois->getCsvDate(), 
							  $user->getLicence(), $user->getMsn(), $user->getAim(), $user->getYim(), 
							  $SH, $SD, $DH, $DD, $DM,
							  $partenairedouble, $clubdouble, $partenairemixte, $clubmixte, 
							  $usertournois->getRemarque());

				fputcsv($handle, $list, ',');
			    
			}

			fclose($handle);
		});

		$response->setStatusCode(200);
		$response->headers->set('Content-Type', 'text/csv; charset=utf-8');
		$filename = $tournois->getAdversaire()."_".$tournois->getCsvDateTournois().".csv";
		$response->headers->set('Content-Disposition','attachment; filename='.$filename);

		return $response;
	}

	public function viewAction($id)
	{
		// On récupère le repository
		$em = $this->getDoctrine()->getManager();
		
		$tournois = $em->find('ASFFTournoisBundle:Tournois', $id);
		$ListInscrits = $em->getRepository('ASFFTournoisBundle:InscriptionsTournois')->findByTournois($tournois);

		
		// ou null si l'id $id  n'existe pas, d'où ce if :
		if (null === $tournois) {
		  throw new NotFoundHttpException("Le tournois d'id ".$id." n'existe pas.");
		}

		// Le render ne change pas, on passait avant un tableau, maintenant un objet
		return $this->render('ASFFTournoisBundle:Tournois:view.html.twig', array('tournois' => $tournois, 'ListInscrit' => $ListInscrits));
	}
	
	/**
    * @Security("has_role('ROLE_WEBMASTER')")
    */
	public function addAction(Request $request)
	{
		// Création de l'entité
		$tournois = new Tournois();
		$form = $this->createForm(TournoisType::class, $tournois);
		
		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

			$em = $this->getDoctrine()->getManager();
			$em->persist($tournois);
			$em->flush();

			return $this->redirectToRoute('asff_tournois_view', array('id' => $tournois->getId()));
		}

    	return $this->render('ASFFTournoisBundle:Tournois:add.html.twig', array('form' => $form->createView(),));
	}

	/**
    * @Security("has_role('ROLE_WEBMASTER')")
    */
	public function editAction($id, Request $request)
	{
		// Récupération d'une annonce déjà existante, d'id $id.
		$tournois = $this->getDoctrine()
		  ->getManager()
		  ->getRepository('ASFFTournoisBundle:Tournois')
		  ->find($id);
		
		$form = $this->createForm(TournoisType::class, $tournois);

		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

			$em = $this->getDoctrine()->getManager();
			$em->persist($tournois);
			$em->flush();

			return $this->redirectToRoute('asff_tournois_view', array('id' => $tournois->getId()));
		}

    	return $this->render('ASFFTournoisBundle:Tournois:edit.html.twig', array('form' => $form->createView(),));
	}

	/**
    * @Security("has_role('ROLE_WEBMASTER')")
    */
	public function deleteAction(Request $request, $id)
	{
		$em = $this->getDoctrine()->getManager();

		$tournois = $em->getRepository('ASFFTournoisBundle:Tournois')->find($id);

		if (null === $tournois) {
		  throw new NotFoundHttpException("Le tournois d'id ".$id." n'existe pas.");
		}
		
		// On crée un formulaire vide, qui ne contiendra que le champ CSRF
		// Cela permet de protéger la suppression d'annonce contre cette faille
		$form = $this->get('form.factory')->create();

		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		  $em->remove($tournois);
		  $em->flush();

		  return $this->redirectToRoute('asff_tournois_home');
		}

		return $this->render('ASFFTournoisBundle:Tournois:delete.html.twig', array(
		  'tournois' => $tournois,'form'   => $form->createView(),));
	}

}
