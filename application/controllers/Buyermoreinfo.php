<?php

	class Buyermoreinfo extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("BuyermoreinfoM","bm");
		
		}

		public function index($buyerid)
		{
			$where=["buyerid"=>$buyerid];

			$temp=[
				"buyerInfo"=>$this->bm->getBuyerById($where),
				"c"=>0,
				"bid"=>$this->bm->getBids($buyerid)		
			];
			$this->load->view("buyermoreinfo",$temp);

		}	

	}
?>