<?php

namespace ASFF\ActualiteBundle\Controller;

use ASFF\ActualiteBundle\Entity\Actu;
use ASFF\ActualiteBundle\Form\ActuType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class ActuController extends Controller
{
	public function indexAction()
    {
		$mailer = $this->container->get('mailer');
		
		$repository = $this->getDoctrine()->getManager()->getRepository('ASFFActualiteBundle:Actu');

		$listActus = $repository->findBy(array('publier' => 1));

		// Et modifiez le 2nd argument pour injecter notre liste
		return $this->render('ASFFActualiteBundle:Actu:index.html.twig', array('listActus' => $listActus));
	}
	
	public function viewAction($id)
	{
		// On récupère le repository
		$actu = $this->getDoctrine()->getManager()->find('ASFFActualiteBundle:Actu', $id);

		// $actu est donc une instance de ASFF\ActualiteBundle\Entity\Actu
		// ou null si l'id $id  n'existe pas, d'où ce if :
		if (null === $actu) {
		  throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
		}

		// Le render ne change pas, on passait avant un tableau, maintenant un objet
		return $this->render('ASFFActualiteBundle:Actu:view.html.twig', array('actu' => $actu));
	}
	
	/**
    * @Security("has_role('ROLE_BUREAU')")
    */
	public function addAction(Request $request)
	{	
		$actu = new Actu();
		$form = $this->createForm(ActuType::class, $actu);
		
		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

			$em = $this->getDoctrine()->getManager();
			$em->persist($actu);
			$em->flush();

			return $this->redirectToRoute('asff_actualite_view', array('id' => $actu->getId()));
		}

    	return $this->render('ASFFActualiteBundle:Actu:add.html.twig', array('form' => $form->createView(),));
	}
	
	/**
    * @Security("has_role('ROLE_BUREAU')")
    */
	public function editAction($id, Request $request)
	{
		// Récupération d'une annonce déjà existante, d'id $id.
		$actu = $this->getDoctrine()
		  ->getManager()
		  ->getRepository('ASFFActualiteBundle:Actu')
		  ->find($id);
		
		$form = $this->createForm(ActuType::class, $actu);

		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

			$em = $this->getDoctrine()->getManager();
			$em->persist($actu);
			$em->flush();

			#$actu->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

			return $this->redirectToRoute('asff_actualite_view', array('id' => $actu->getId()));
		}

    	return $this->render('ASFFActualiteBundle:Actu:edit.html.twig', array('form' => $form->createView(),));
	}

	/**
    * @Security("has_role('ROLE_BUREAU')")
    */
	public function deleteAction(Request $request, $id)
	{
		$em = $this->getDoctrine()->getManager();

		$actu = $em->getRepository('ASFFActualiteBundle:Actu')->find($id);

		if (null === $actu) {
		  throw new NotFoundHttpException("L'actu d'id ".$id." n'existe pas.");
		}
		
		// On crée un formulaire vide, qui ne contiendra que le champ CSRF
		// Cela permet de protéger la suppression d'annonce contre cette faille
		$form = $this->get('form.factory')->create();

		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		  $em->remove($actu);
		  $em->flush();

		  return $this->redirectToRoute('asff_actualite_home');
		}

		return $this->render('ASFFActualiteBundle:Actu:delete.html.twig', array(
		  'actu' => $actu,'form'   => $form->createView(),));
	}

	public function menuAction()
	{
		$repository = $this->getDoctrine()->getManager()->getRepository('ASFFActualiteBundle:Actu');
		
		$listActus = $repository->findBy(array(), array('id' => 'desc'),3,0);

		return $this->render('ASFFActualiteBundle:Actu:menu.html.twig', array('listActus' => $listActus));
	}	
}
