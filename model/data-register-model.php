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
	 * Database table name after prefix
	 */
	CONST TABLE_NAME = 'gdpr_data_register';

	/**
	 * Instance where the log object gets saved
	 *
	 * @var null|Data_Register_Model
	 */
	private static $instance = null;

	/**
	 * Use Log interface to use the Gdpr Log class
	 *
	 * @since 1.5.4
	 */
	public function __construct() {
		parent::__construct();
	}

	/**
	 * Constructs this class once
	 *
	 * @return null|Data_Register_Model
	 *
	 * @since 1.5.4
	 */
	public static function instance() {
		// Check if instance is already exists
		if ( self::$instance == null ) {
			self::$instance = new Data_Register_Model();
		}

		return self::$instance;
	}

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

		$this->log->info( 'Data Register table created' );
	}

	/**
	 * Saves data changes
	 *
	 * @param $email    string  E-mailaddress that took the action
	 * @param $message   string  Description of the action
	 *
	 * @since 1.5.4
	 */
	public function add_message( $email, $message ) {
		$hashed_email = $this->hash_email( $email );
		$this->insert_row( $email, $hashed_email, $message );
	}

	/**
	 * Returns hashed email address
	 *
	 * @param $email
	 *
	 * @return bool|string
	 *
	 * @since 1.5.4
	 */
	private function hash_email( $email ) {
		return password_hash( $email, PASSWORD_DEFAULT );
	}
	/**
	 * Insert row to data_register table
	 *
	 * @param $email
	 * @param $hashed_email
	 * @param $message
	 *
	 * @since 1.5.4
	 */
	private function insert_row( $email, $hashed_email, $message ) {
		/**
		 * @var $wpdb\wpdb
		 */
		global $wpdb;

		$table_name = $wpdb->prefix . self::TABLE_NAME;

		$query = "INSERT INTO " . $table_name . " (email, hashed_email, message, timestamp) VALUES ";
		$query .= "('" . $email . "', '" . $hashed_email . "', '" . $message . "', " . current_time( 'mysql' ) . ")";

		$wpdb->query( $query );
	}
}