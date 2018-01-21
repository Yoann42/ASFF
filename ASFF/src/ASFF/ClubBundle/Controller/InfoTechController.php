<?php

namespace ASFF\ClubBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InfoTechController extends Controller
{
	public function conseilsAction()
    {
		return $this->render('ASFFClubBundle:Info Tech:conseils.html.twig');
	}

	public function formationsAction()
    {
		return $this->render('ASFFClubBundle:Info Tech:formations.html.twig');
	}

	public function liensAction()
    {
		return $this->render('ASFFClubBundle:Info Tech:liens.html.twig');
	}

	public function reglesdubadAction()
    {
		return $this->render('ASFFClubBundle:Info Tech:reglesdubad.html.twig');
	}
}
