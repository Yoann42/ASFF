<?php

namespace ASFF\ClubBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LeClubController extends Controller
{
	public function associationAction()
    {
		return $this->render('ASFFClubBundle:Le Club:association.html.twig');
	}

	public function contactsAction()
    {
		return $this->render('ASFFClubBundle:Le Club:contacts.html.twig');
	}

	public function lebureauAction()
    {
		return $this->render('ASFFClubBundle:Le Club:lebureau.html.twig');
	}

	public function lieuhoraireAction()
    {
		return $this->render('ASFFClubBundle:Le Club:lieuhoraire.html.twig');
	}
}
