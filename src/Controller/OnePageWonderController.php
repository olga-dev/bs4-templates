<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class OnePageWonderController
 * @package App\Controller
 */
class OnePageWonderController extends Controller
{
    /**
     * @Route("/one-page-wonder/", name="one-page-wonder_home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('one-page-wonder/index.html.twig');
    }

    /**
     * @Route("/one-page-wonder/about", name="one-page-wonder_about")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function aboutAction()
    {
        return $this->render('one-page-wonder/about.html.twig');
    }

    /**
     * @Route("/one-page-wonder/service", name="one-page-wonder_service")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function serviceAction()
    {
        return $this->render('one-page-wonder/service.html.twig');
    }

    /**
     * @Route("/one-page-wonder/contact", name="one-page-wonder_contact")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contactAction()
    {
        return $this->render('one-page-wonder/contact.html.twig');
    }
}