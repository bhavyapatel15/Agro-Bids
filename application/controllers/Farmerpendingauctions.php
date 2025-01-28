<?php

	class Farmerpendingauctions extends CI_Controller
	{

		public function __construct()
		{

			parent::__construct();
			$this->load->model("FarmerpendingauctionsM","fm");

		}

		public function index()
		{

			$where=[
				"a.farmerid"=>$_SESSION['fid'],
				"a.status"=>2
			];

			$temp=[
				"auctionInfo"=>$this->fm->getAllPendingAuctions($where)
			];
			

			$this->load->view("farmerpendingauctions",$temp);
		}

	}
?>