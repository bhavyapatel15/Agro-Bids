<?php

	class Farmerauctioninfo extends CI_Controller
	{

		public function __construct()
		{

			parent::__construct();
			$this->load->model("FarmerauctioninfoM","fm");

		}

		public function index($id)
		{

			$where=["auctionid"=>$id];
			
			$temp=[

				"auctionInfo"=>$this->fm->getAuctionByID($where),
				"bidInfo"=>$this->fm->getBidInfo($where),
				"i"=>0
			];

			$this->load->view("farmerauctioninfo",$temp);
		
		}

	}
?>