<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class AgencyController
 * @package App\Controller
 */
class AgencyController extends Controller
{
    /**
     * @Route("/agency/", name="agency_home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('agency/index.html.twig');
    }
}
