<?php

	class Transactions extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("admin/TransactionsM","tm");

			if(!isset($_SESSION['name']))
			{
				redirect('admin/login');
			}
		}

		public function index()
		{
			$temp=[
				"transactionInfo"=>$this->tm->getAllTransactions(),
				"buyerInfo"=>$this->tm->getAllBuyer(),
				"farmerInfo"=>$this->tm->getAllFarmer()
				
			];
			$this->load->view("admin/Transactions",$temp);
		}

	}
?>