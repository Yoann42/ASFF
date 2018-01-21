<?php

namespace ASFF\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GalerieController extends Controller
{
    public function indexAction()
    {
        return $this->render('ASFFCoreBundle:Galerie:index.html.twig');
    }
}
