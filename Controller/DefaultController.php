<?php

namespace Oidnus\AdminThemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OidnusAdminThemeBundle:Default:index.html.twig');
    }
}
