<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class BusinessCasualController
 * @package App\Controller
 */
class BusinessCasualController extends Controller
{
    /**
     * @Route("/business-casual", name="business-casual_home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('business-casual/index.html.twig');
    }
}
