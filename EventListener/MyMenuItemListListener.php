<?php
namespace Oidnus\AdminThemeBundle\EventListener;

use Oidnus\AdminThemeBundle\Event\SidebarMenuEvent;
use Oidnus\AdminThemeBundle\Model\MenuItemModel;
use Symfony\Component\HttpFoundation\Request;

class MyMenuItemListListener {

    public function onSetupMenu(SidebarMenuEvent $event) {

        $request = $event->getRequest();

        foreach ($this->getMenu($request) as $item) {
            $event->addItem($item);
        }

    }

    protected function getMenu(Request $request) {
        $menuItems = array(
            $blog = new MenuItemModel('AAA', 'AAA', 'item_symfony_route', [], 'iconclasses fa fa-plane')
        );

//        $blog->addChild(new MenuItemModel('ChildOneItemId', 'ChildOneDisplayName', 'homepage', array(), 'fa fa-rss-square'));

        // A child with default circle icon
        $blog->addChild(new MenuItemModel('ChildTwoItemId', 'ChildTwoDisplayName', 'homepage'));
        return $this->activateByRoute($request->get('_route'), $menuItems);
    }

    protected function activateByRoute($route, $items) {

        foreach($items as $item) {
            if($item->hasChildren()) {
                $this->activateByRoute($route, $item->getChildren());
            }
            else {
                if($item->getRoute() == $route) {
                    $item->setIsActive(true);
                }
            }
        }

        return $items;
    }

}