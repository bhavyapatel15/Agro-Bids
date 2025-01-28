<?php

	class Auctionwon extends CI_Controller
	{

		public function __construct()
		{

			parent::__construct();
			$this->load->model("AuctionwonM","am");

		}

		public function index()
		{

			$id=$_SESSION['bid'];

			$where=[
				"b.buyerid"=>$id
			];

			$temp=[

                "auctionInfo"=>$this->am->getAllAUctions(),
				"bidInfo"=>$this->am->getBidInfo($where)
				
			];
				
			 $this->load->view("Auctionwon",$temp);
		}

	}
?>