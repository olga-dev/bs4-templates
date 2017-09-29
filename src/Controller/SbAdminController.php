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
        return $this->render('sb-admin/home/index.html.twig');
    }

    /**
     * @Route("/sb-admin/morris", name="sb-admin_morris")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function morrisAction()
    {
        return $this->render('sb-admin/morris/index.html.twig');
    }

    /**
     * @Route("/sb-admin/tables", name="sb-admin_tables")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function tablesAction()
    {
        return $this->render('sb-admin/tables/index.html.twig');
    }

    /**
     * @Route("/sb-admin/login", name="sb-admin_login")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction()
    {
        return $this->render('sb-admin/login/index.html.twig');
    }

    /**
     * @Route("/sb-admin/blank", name="sb-admin_blank")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function blankAction()
    {
        return $this->render('sb-admin/blank-page/index.html.twig');
    }

    /**
     * @Route("/sb-admin/grid", name="sb-admin_grid")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function gridAction()
    {
        return $this->render('sb-admin/grid-system/index.html.twig');
    }

    /**
     * @Route("/sb-admin/icons", name="sb-admin_icons")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function iconsAction()
    {
        return $this->render('sb-admin/icons/index.html.twig');
    }

    /**
     * @Route("/sb-admin/typography", name="sb-admin_typography")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function typographyAction()
    {
        return $this->render('sb-admin/typography/index.html.twig');
    }

    /**
     * @Route("/sb-admin/notifications", name="sb-admin_notifications")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function notificationsAction()
    {
        return $this->render('sb-admin/notifications/index.html.twig');
    }

    /**
     * @Route("/sb-admin/buttons", name="sb-admin_buttons")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function buttonsAction()
    {
        return $this->render('sb-admin/buttons/index.html.twig');
    }

    /**
     * @Route("/sb-admin/panel-wells", name="sb-admin_panel-wells")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function panelAndWellsAction()
    {
        return $this->render('sb-admin/panels-and-wells/index.html.twig');
    }

    /**
     * @Route("/sb-admin/forms", name="sb-admin_forms")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function formsAction()
    {
        return $this->render('sb-admin/forms/index.html.twig');
    }

    /**
     * @Route("/sb-admin/flot", name="sb-admin_flot")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function flotAction()
    {
        return $this->render('sb-admin/flot/index.html.twig');
    }
}
