<?php

	class Auctions extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("admin/AuctionsM","am");

			if(!isset($_SESSION['name']))
			{
				redirect('admin/login');
			}
		}

		public function index()
		{
			$temp=[
				"auctionInfo"=>$this->am->getAllAuctions()
				
			];
			$this->load->view("admin/Auctions",$temp);
		}

	}
?>