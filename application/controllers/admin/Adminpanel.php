<?php

	class Adminpanel extends CI_Controller
	{

		public function __construct()
		{

			parent::__construct();
			$this->load->model("admin/AdminpanelM","am");

			if(!isset($_SESSION['name']))
			{
				redirect('admin/login');
			}

		}

		public function index()
		{
			$temp=[
				"farmerInfo"=>$this->am->getAllFarmers(),
				"buyerInfo"=>$this->am->getAllBuyers(),
				"userInfo"=>$this->am->getAllUsers(),
				"transactionInfo"=>$this->am->getAllTransactions()
				
			];
			$this->load->view("admin/adminpanel",$temp);
		}


		

	}
?>