<?php

	class Main extends CI_Controller
	{

		public function __construct()
		{

			parent::__construct();
			$this->load->model("Mainm","mm");

		}

		public function index()
		{
	
		

			$this->load->view('main');
		}
	}
?>