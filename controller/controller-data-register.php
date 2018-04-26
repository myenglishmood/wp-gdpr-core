<?php

namespace wp_gdpr\controller;

use wp_gdpr\lib\Gdpr_Data_Register_List_Table;
use wp_gdpr\model\Data_Register_Model;

class Controller_Data_Register {

	/**
	 * @var \wp_gdpr\model\Data_Register_Model;
	 */
	private $data_register_model;

	public function __construct() {
		$this->data_register_model = Data_Register_Model::instance();
	}

	/**
	 * Display
	 */
	public function display() {
		$list_table = new Gdpr_Data_Register_List_Table(array(), $this->data_register_model);
		$list_table->prepare_items();

		$list_table->display();
	}
}