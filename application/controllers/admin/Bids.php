<?php

	class Bids extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("admin/BidsM","bm");

			if(!isset($_SESSION['name']))
			{
				redirect('admin/login');
			}
		}

		public function index()
		{
			$temp=[
				"bidInfo"=>$this->bm->getAllBids(),
				"buyerInfo"=>$this->bm->getAllBuyer(),
				"auctionInfo"=>$this->bm->getAllAuctions()
				
			];
			$this->load->view("admin/Bids",$temp);
		}

	}
?>