<?php

namespace wp_gdpr\lib;

Class Gdpr_Helper {
	public static function get_core_version() {
		$plugin_data = get_plugin_data( GDPR_DIR . 'wp-gdpr-core.php' );

		return $plugin_data['Version'];
	}

	public function get_plugin_addon_status() {
		if ( is_file( GDPR_DIR . 'assets/json/plugins.json' ) ) {
			$plugin_addons  = file_get_contents( GDPR_DIR . 'assets/json/plugins.json' );
			$plugin_addons  = json_decode( $plugins, true );
		} else {
			$plugin_addons  = array();
		}



		return $plugin_addons ;

	}




}



