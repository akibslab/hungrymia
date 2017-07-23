<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foodiez extends CI_Controller {

	/**
	 * Handle the home page
	 */

	public function __construct(){
		parent:: __construct();
		$this->load->model("account_model");
	}

	public function index()
	{
		$this->load->view('foodiez');
	}
}
