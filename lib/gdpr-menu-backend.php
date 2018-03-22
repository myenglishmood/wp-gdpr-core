<?php

namespace wp_gdpr\lib;

/**
 * lib element to add menu page
 */
class Gdpr_Menu_Backend {
	const MENU_PAGE_TITLE = 'WP GDPR';

	const PAGE_SLUG = 'wp_gdpr';

	const MENU_TITLE = 'WP GDPR';

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'add_menu_callback' ) );
	}

	/**
	 * add menu page
	 */
	public function add_menu_callback()
    {
        add_menu_page(self::MENU_PAGE_TITLE, self::MENU_TITLE, 'manage_options', self::PAGE_SLUG, '', GDPR_URL . 'assets/images/wp-gdpr.svg');

        add_submenu_page(static::PAGE_SLUG, __('List of data requests', 'wp_gdpr'), __('List of data requests', 'wp_gdpr'), 'manage_options', self::PAGE_SLUG, array($this, 'set_wp_gdpr_listOfDataRequests'));
        add_submenu_page(static::PAGE_SLUG, __('List of delete requests', 'wp_gdpr'), __('List of delete requests', 'wp_gdpr'), 'manage_options', 'deletelist', array($this, 'set_wp_gdpr_listOfDeleteRequests'));
        add_submenu_page(static::PAGE_SLUG, __('List of plugins', 'wp_gdpr'), __('List of plugins', 'wp_gdpr'), 'manage_options', 'pluginlist', array($this, 'set_wp_gdpr_listOfPlugins'));
        add_submenu_page(static::PAGE_SLUG, __('Settings', 'wp_gdpr'), __('Settings', 'wp_gdpr'), 'manage_options', 'settings', array($this, 'set_wp_gdpr_settings'));
        add_submenu_page(static::PAGE_SLUG, __('Help', 'wp_gdpr'), __('Help', 'wp_gdpr'), 'manage_options', 'help', array($this, 'set_wp_gdpr_help'));

    }

	/**
	 * generate output for menu page from template
	 */
	public function set_wp_gdpr_listOfDataRequests(){
        require_once GDPR_DIR . 'view/admin/menu/data-page.php';
    }
    public function set_wp_gdpr_listOfDeleteRequests(){
        require_once GDPR_DIR . 'view/admin/menu/delete-page.php';
    }
    public function set_wp_gdpr_listOfPlugins(){
        require_once GDPR_DIR . 'view/admin/menu/plugin-page.php';
    }
    public function set_wp_gdpr_settings(){
        require_once GDPR_DIR . 'view/admin/menu/settings-page.php';
    }

    public function set_wp_gdpr_help(){
        require_once GDPR_DIR . 'view/admin/menu/help_page.php';
    }
}
