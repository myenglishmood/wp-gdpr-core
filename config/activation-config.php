<?php
namespace wp_gdpr\config;


use wp_gdpr\lib\Gdpr_Log;
use wp_gdpr\model\Data_Register_Model;

class Activation_Config {

	/**
	 * These functions are run when the plugin activates
	 *
	 * @since 1.5.3
	 */
	public function install() {
		$this->create_logtable();
		$this->delete_old_rows_in_logtable();
		$this->create_data_register_table();
	}

	/**
	 * Creates log table in the database
	 *
	 * @since 1.5.3
	 */
	private function create_logtable(){
		$log = Gdpr_Log::instance();

		$log->create_log_table();
	}

	/**
	 * Creates data register table
	 *
	 * @since 1.5.3
	 */
	private function create_data_register_table() {
		$data_register = new Data_Register_Model();

		$data_register->create_table();
	}

	/**
	 * Deletes old rows in the log database table
	 *
	 * @since 1.5.3
	 */
	private function delete_old_rows_in_logtable(){
		if ( ! wp_next_scheduled( 'gdpr_clear_log' ) ) {
			wp_schedule_event( time(), 'daily', 'gdpr_clear_log' );
		}
	}
}