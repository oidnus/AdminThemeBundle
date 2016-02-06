<?php

namespace Oidnus\AdminThemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavbarController extends Controller
{
    public function messagesAction()
    {
        return $this->render(
            'OidnusAdminThemeBundle:navbar:messages.html.twig'
        );
    }

    public function notificationsAction()
    {
        return $this->render(
            '@OidnusAdminTheme/navbar/notifications.html.twig'
        );
    }

    public function userAction()
    {
        return $this->render(
            '@OidnusAdminTheme/navbar/user.html.twig'
        );
    }

    public function tasksAction()
    {
        return $this->render(
            '@OidnusAdminTheme/navbar/tasks.html.twig'
        );
    }



}