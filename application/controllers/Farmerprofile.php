<?php

	class Farmerprofile extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("FarmerprofileM","fm");
		
		}

		public function index()
		{
			$temp=[
				"farmerInfo"=>$this->fm->getAllFarmers()
				
			];

			$this->load->view("farmerprofile",$temp);
		}

		

	}
?>