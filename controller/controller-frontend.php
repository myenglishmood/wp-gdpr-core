<?php
namespace wp_gdpr\controller;

use wp_gdpr\lib\Gdpr_Log_Interface;
use wp_gdpr\model\Request_Form;

class Controller_Frontend extends Gdpr_Log_Interface {


	/**
	 * Controller_Frontend is used for frontend Privacy Center
	 */
	public function __construct() {
        parent::__construct();
        add_action('wp_enqueue_scripts' , array($this,'frontend_script'));
	}

	/**
	 * Loads javascript file according to current hook
	 *
	 * @param $hook
	 *
	 * @since 1.6.0
	 */
	public function frontend_script(  ) {
        $pageid = Request_Form::get_page_id();
        if ( $pageid != false && is_page( $pageid ) ) {
				wp_enqueue_script( 'help_js', GDPR_URL . 'assets/js/help.js', array(
					'jquery',
					'jquery-ui-accordion',
					'jquery-ui-core'
				), null, false );
        }
        
    }
}