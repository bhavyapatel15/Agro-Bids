<?php

	class Reviewfarmer extends CI_Controller
	{

		public function __construct()
		{

			parent::__construct();
			$this->load->model("ReviewfarmerM","rm");

		}

		public function index()
		{
			$this->load->view("reviewfarmer");
		}

	}
?>