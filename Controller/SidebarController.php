<?php

namespace Oidnus\AdminThemeBundle\Controller;

use Oidnus\AdminThemeBundle\Event\SidebarMenuEvent;
use Oidnus\AdminThemeBundle\Event\ThemeEvents;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SidebarController extends Controller
{
    public function userPanelAction()
    {
        return $this->render(
            'OidnusAdminThemeBundle:sidebar:user_panel.html.twig'
        );
    }

    public function searchAction()
    {
        return $this->render(
            'OidnusAdminThemeBundle:sidebar:search.html.twig'
        );
    }

    public function menuAction(Request $request)
    {

        if (!$this->getDispatcher()->hasListeners(ThemeEvents::THEME_SIDEBAR_SETUP_MENU)) {
            return new Response();
        }

        $event   = $this->getDispatcher()->dispatch(ThemeEvents::THEME_SIDEBAR_SETUP_MENU,new SidebarMenuEvent($request));

        return $this->render(
            'OidnusAdminThemeBundle:sidebar:menu.html.twig',
            array(
                'menu' => $event->getItems()
            )
        );

    }

    /**
     * @return EventDispatcher
     */
    protected function getDispatcher()
    {
        return $this->get('event_dispatcher');
    }

}