<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Handle the home page
	 */

	public function __construct(){
		parent:: __construct();
		$this->load->model("account_model");
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function validate_login(){
		
		echo json_encode($this->account_model->validate_login());
		
	}
}
