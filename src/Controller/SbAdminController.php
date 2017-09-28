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

    /**
     * @Route("/sb-admin/login", name="sb-admin_login")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction()
    {
        return $this->render('sb-admin/login.html.twig');
    }

    /**
     * @Route("/sb-admin/blank", name="sb-admin_blank")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function blankAction()
    {
        return $this->render('sb-admin/blank.html.twig');
    }

    /**
     * @Route("/sb-admin/grid", name="sb-admin_grid")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function gridAction()
    {
        return $this->render('sb-admin/grid.html.twig');
    }

    /**
     * @Route("/sb-admin/icons", name="sb-admin_icons")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function iconsAction()
    {
        return $this->render('sb-admin/icons.html.twig');
    }

    /**
     * @Route("/sb-admin/typography", name="sb-admin_typography")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function typographyAction()
    {
        return $this->render('sb-admin/typography.html.twig');
    }

    /**
     * @Route("/sb-admin/notifications", name="sb-admin_notifications")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function notificationsAction()
    {
        return $this->render('sb-admin/notifications.html.twig');
    }
}
