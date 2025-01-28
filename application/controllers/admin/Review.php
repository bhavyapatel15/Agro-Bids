<?php

	class Review extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("admin/ReviewM","rm");

			if(!isset($_SESSION['name']))
			{
				redirect('admin/login');
			}
		}

		public function index()
		{
			$temp=[
				"reviewInfo"=>$this->rm->getAllReview(),
				"buyerInfo"=>$this->rm->getAllBuyer(),
				"farmerInfo"=>$this->rm->getAllFarmer()
				
			];
			$this->load->view("admin/Review",$temp);
		}

	}
?>