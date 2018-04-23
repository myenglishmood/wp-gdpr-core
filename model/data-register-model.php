<?php

namespace wp_gdpr\model;

use wp_gdpr\lib\Gdpr_Log_Interface;

/**
 * This class is used to communicate with the data register database table.
 *
 * Data requests and deletion will be saved in that table.
 *
 * @package wp_gdpr\model
 */
class Data_Register_Model extends Gdpr_Log_Interface {

	/**
	 * Creates Data Register Table
	 *
	 * @since 1.5.4
	 */
	public function create_table() {
		global $wpdb;

		$table_name = $wpdb->prefix . self::TABLE_NAME;

		$query = 'CREATE TABLE ' . $table_name . ' (
				  id INT(11) NOT NULL AUTO_INCREMENT,
				  email VARCHAR(20) DEFAULT NULL,
				  hashed_email varchar(100) NOT NULL,
				  message VARCHAR(255) DEFAULT NULL,
				  timestamp DATETIME DEFAULT NULL,
				  PRIMARY KEY (id)
				)';

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $query );

		$this->info( 'Data Register table created' );
	}

	/**
	 * Saves data changes
	 * @param $email    string  E-mailaddress that took the action
	 * @param $action   string  Description of the action
	 *
	 * @since 1.5.4
	 */
	public function add_message( $email, $action ) {
		$hashed_email = password_hash( $email, PASSWORD_DEFAULT );
	}

	/**
	 * Verifies the emailaddress with the saved hash
	 *
	 * @param $email
	 * @param $hash
	 *
	 * @return bool
	 *
	 * @since 1.5.4
	 */
	public function verify_password( $email, $hash ) {
		return password_verify($email, $hash);
	}
}