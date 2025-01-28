<?php

	class Logout extends CI_Controller
	{

		public function index()
		{


			if(isset($_SESSION['bname']))
			{
				$this->session->unset_userdata('bname');
				$this->session->unset_userdata('bid');
				$this->session->unset_userdata('bimg');
			}
			else
			{
				$this->session->unset_userdata('fname');
				$this->session->unset_userdata('fid');
				$this->session->unset_userdata('fimg');
			}
			
			$this->load->view("main");
		}

	}
?>