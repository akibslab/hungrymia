<?php

	/**
	* Handel the interacitons concern variout account 
	*/
	class Account_model extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		public function validate_login(){
			$username = $this->security->xss_clean($this->input->post('username'));
			$password = $this->security->xss_clean($this->input->post('password'));

			$query = $this->db->get_where("users", array('username' => $username, 'password' => $password ));

			if($query->num_rows() == 1){
				$data = array(
					'username' => $query->result()[0]->username,
					'type'		=> $query->result()[0]->type
				);
				$this->session->set_userdata($data);
				$data["success"] = true;
			}else{
				$data = array('success' => false, 'nof' => $query->num_rows());
			}
			return $data;

		}
	}
?>