<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller extends CI_Controller {

	/**
	 * Handle the seller dashboard
	 */

	public function __construct(){
		parent:: __construct();
		$this->load->model("account_model");
	}

	public function index()
	{
		$this->load->view('seller');
	}

}
