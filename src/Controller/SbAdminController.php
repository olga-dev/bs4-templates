<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SbAdminController extends Controller
{
    /**
     * @Route("/sb-admin/", name="sb-admin_home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('sb-admin/index.html.twig');
    }

    /**
     * @Route("/sb-admin/morris", name="sb-admin-morris_home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function morrisAction()
    {
        return $this->render('sb-admin/morris.html.twig');
    }
}
