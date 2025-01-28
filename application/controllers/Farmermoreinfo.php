<?php

	class Farmermoreinfo extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("FarmermoreinfoM","fm");
		
		}

		public function index($farmerid)
		{
			$where=["farmerid"=>$farmerid];

			$temp=[
				"farmerInfo"=>$this->fm->getFarmerById($where),
				"auctionInfo"=>$this->fm->getauctionById($farmerid),
				"c"=>0
				
			];

			$this->load->view("farmermoreinfo",$temp);

		}	

	}
?>