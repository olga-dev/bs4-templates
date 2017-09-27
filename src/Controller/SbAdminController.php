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
     * @Route("/sb-admin/morris", name="sb-admin_morris")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function morrisAction()
    {
        return $this->render('sb-admin/morris.html.twig');
    }

    /**
     * @Route("/sb-admin/tables", name="sb-admin_tables")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function tablesAction()
    {
        return $this->render('sb-admin/tables.html.twig');
    }
}
