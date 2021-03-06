<?php

namespace Oidnus\AdminThemeBundle\Event;

/**
 * Holds all events used by the theme
 *
 */
class ThemeEvents
{


    /**
     * Used to receive notification data
     */
    const THEME_NOTIFICATIONS         = 'theme.notifications';
    /**
     * Used to receive message data
     */
    const THEME_MESSAGES              = 'theme.messages';
    /**
     * Used to receive task data
     */
    const THEME_TASKS                 = 'theme.tasks';
    /**
     *
     */
    const THEME_NAVBAR_USER           = 'theme.navbar_user';
    /**
     * used to receive breadcrumb data
     */
    const THEME_BREADCRUMB            = 'theme.breadcrumb';
    /**
     * used to receive the current user for the sidebar
     */
    const THEME_SIDEBAR_USER          = 'theme.sidebar_user';
    /**
     * Used for searching
     * @unused
     */
    const THEME_SIDEBAR_SEARCH        = 'theme.sidebar_search';
    /**
     * Used to receive the sidebar menu data
     */
    const THEME_SIDEBAR_SETUP_MENU    = 'theme.sidebar_setup_menu';
    /**
     *
     */
    const THEME_SIDEBAR_ACTIVATE_MENU = 'theme.sidebar_activate_menu';

}