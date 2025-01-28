<?php

	class Buyerprofile extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("BuyerprofileM","bm");
		
		}

		public function index()
		{
			$temp=[
				"buyerInfo"=>$this->bm->getAllBuyers()
				
			];

			$this->load->view("buyerprofile",$temp);
		}

		

	}
?>