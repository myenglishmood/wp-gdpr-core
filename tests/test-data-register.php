<?php

namespace wp_gdpr\tests;

use wp_gdpr\model\Data_Register_Model;

/**
 * Class Test_Data_Register
 *
 * @var \WP_UnitTestCase
 */
class Test_Data_Register extends \WP_UnitTestCase {

	/**
	 * @var \wp_gdpr\model\Data_Register_Model
	 */
	public $test_model;

	/**
	 * Setup Data Register model
	 */
	public function setUp() {
		$this->test_model = new Data_Register_Model();
	}

	/**
	 * Add new message to data register
	 */
	public function add_new_valid_message() {
		$this->test_model->add_message( 'test@test.com', 'test message', 'test', 1 );
	}
}