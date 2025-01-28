<?php

	class Buyerhome extends CI_Controller 
	{
	
		public function __construct()
		{
			parent::__construct();
			$this->load->model("BuyerhomeM","bm");
		
		}

		public function index()
		{
	
			$temp=[
				"reviewInfo"=>$this->bm->getReview(),
				"i"=>0

			];

			$this->load->view('buyerhome',$temp);
		}
	}
?>