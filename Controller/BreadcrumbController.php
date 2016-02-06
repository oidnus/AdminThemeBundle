<?php

namespace Oidnus\AdminThemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BreadcrumbController extends Controller
{
    public function breadcrumbAction()
    {
        return $this->render('@OidnusAdminTheme/breadcrumb/breadcrumb.html.twig');
    }
}
