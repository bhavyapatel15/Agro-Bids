<?php

	class Report extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("admin/ReportM","rm");

			if(!isset($_SESSION['name']))
			{
				redirect('admin/login');
			}
		}

		public function index()
		{
			$temp=[
				"reportInfo"=>$this->rm->getAllReports(),
				"buyerInfo"=>$this->rm->getAllBuyer(),
				"farmerInfo"=>$this->rm->getAllFarmer()
				
			];
			$this->load->view("admin/Report",$temp);
		}

	}
?>