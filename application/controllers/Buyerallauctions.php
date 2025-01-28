<?php

	class Buyerallauctions extends CI_Controller
	{

		public function __construct()
		{

			parent::__construct();
			$this->load->model("BuyerallauctionsM","bm");

		}

		public function index()
		{

			$temp=[
				"auctionInfo"=>$this->bm->getAllAuctions()
			];

			$this->load->view("buyerallauctions",$temp);
		}

		public function search()
		{

			
				$where=["s.subcategoryname"=>$this->input->post('txtsearch')];
				
				$temp=[
			 		"auctionInfo"=>$this->bm->getAuction($where)
			     ];

   		       $this->load->view("buyerallauctions",$temp);
			

			
		}
		public function reset()
		{

				  $temp=[
				      "auctionInfo"=>$this->bm->getAllAuctions()
			       ];

			      $this->load->view("buyerallauctions",$temp);
		}

	}
?>
