<?php

namespace ASFF\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ASFF\TournoisBundle\Entity\Tournois;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
		
		$repository = $em->getRepository('ASFFTournoisBundle:Tournois');
		$listTournois = $repository->findAll();

		$repository = $em->getRepository('ASFFActualiteBundle:Actu');
		$actu = $repository->findOneBy(array('urgent' => true));

        return $this->render('ASFFCoreBundle:Default:index.html.twig', array('listTournois' => $listTournois, 'actu' => $actu));
    }
}
