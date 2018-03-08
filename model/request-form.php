<?php

namespace wp_gdpr\model;

use wp_gdpr\lib\Gdpr_Customtables;
use wp_gdpr\lib\Gdpr_Container;

class Request_Form extends Form_Validation_Model {

	/**
	 * Request_Form constructor.
	 */
	public function __construct( $list_of_inputs ) {
		//here add functions to sanitize every input
		add_filter( 'gdpr_sanitize_email', array( $this, 'sanitize_email' ), 10 );
		add_filter( 'wp_mail_from', array( $this, 'set_mail_from' ), 10 );
		add_filter( 'wp_mail_from_name', array( $this, 'set_mail_from_name' ), 10 );

		parent::__construct( $list_of_inputs );
	}

	/**
	 * @param $input_value
	 *
	 * @return string
	 *
	 * this filter is triggered post_request function in form_validation_model
	 */
	public function sanitize_email( $input_value ) {
		return sanitize_email( $input_value );
	}

	public function set_mail_from( $original_email_address ) {
		return get_option( 'admin_email', true );
	}

	public function set_mail_from_name( $original_email_from ) {
		return get_bloginfo( 'name', true );
	}

	/**
	 * @param $list_of_inputs
	 *
	 * save request info in custom table
	 */
	public function after_successful_validation( $list_of_inputs ) {
		//save in database
		global $wpdb;

		$table_name        = $wpdb->prefix . Gdpr_Customtables::REQUESTS_TABLE_NAME;
		$single_address    = sanitize_email( $_REQUEST['email'] );
		$time_of_insertion = current_time( 'mysql' );
		$language          = $_REQUEST['gdpr_translation'];

		$wpdb->insert(
			$table_name,
			array(
				'email'     => $single_address,
				'status'    => 1,
				'timestamp' => $time_of_insertion,
				'language'  => $language,
			)
		);

		$admin_email = get_option( 'admin_email', true );
		$this->send_email( $admin_email, $time_of_insertion, $language );
		$this->send_email( $single_address, $time_of_insertion, $language );
	}

	/**
	 * @param $single_address
	 * @param $time_of_insertion
	 */
	public function send_email( $single_address, $time_of_insertion, $language ) {
		$to         = $single_address;
		$site_name  = get_bloginfo( 'name', true );
		$subject    = '[' . $site_name . '] ' . __( 'Your data request', 'wp_gdpr' );
		$controller = Gdpr_Container::make( 'wp_gdpr\controller\Controller_Menu_Page' );
		$content    = $controller->get_email_content( $single_address, $time_of_insertion, $language );
		$headers    = array( 'Content-Type: text/html; charset=UTF-8' );

		wp_mail( $to, $subject, $content, $headers );
	}

	public function add_administrator_to_receivers( $to ) {
		$admin_email = get_option( 'admin_email', true );
		if ( $admin_email ) {
			return $to . ',' . $admin_email;
		} else {
			return $to;
		}
	}

	/**
	 *  do nothing when validation fail
	 */
	public function after_failure_validation( $list_of_inputs ) {
		//do nothing
	}
}
