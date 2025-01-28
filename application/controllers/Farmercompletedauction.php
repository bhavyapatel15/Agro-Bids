<?php

	class Farmercompletedauction extends CI_Controller
	{

		public function __construct()
		{

			parent::__construct();
			$this->load->model("FarmercompletedauctionM","fm");

		}

		public function index()
		{

			$where=[
				"a.farmerid"=>$_SESSION['fid'],
				"a.status"=>3
			];
			$temp=[
				"auctionInfo"=>$this->fm->getAllCompletedAuctions($where)
			];

			$this->load->view("farmercompletedauction",$temp);
		}

	}
?>