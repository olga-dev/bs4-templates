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
     * @Route("/business-casual/", name="business-casual_home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('business-casual/home/index.html.twig');
    }

    /**
     * @Route("/business-casual/about", name="business-casual_about")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function aboutAction()
    {
        return $this->render('business-casual/about/index.html.twig');
    }

    /**
     * @Route("/business-casual/blog", name="business-casual_blog")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function blogAction()
    {
        return $this->render('business-casual/blog/index.html.twig');
    }

    /**
     * @Route("/business-casual/contact", name="business-casual_contact")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contactAction()
    {
        return $this->render('business-casual/contact/index.html.twig');
    }
}
