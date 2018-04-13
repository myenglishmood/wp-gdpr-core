<?php
namespace wp_gdpr\config;


use wp_gdpr\lib\Gdpr_Log;

class Activation_Config {

	public function install() {
		$this->create_logtable();
	}

	private function create_logtable(){
		$log = Gdpr_Log::instance();

		$log->create_log_table();
	}
}