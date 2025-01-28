<?php

	class Logout extends CI_Controller
	{

		public function index()
		{
			
			$this->session->unset_userdata('name');
				
			$this->load->view("admin/login");
		}


	}
?>