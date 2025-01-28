<?php

	class Farmerhome extends CI_Controller 
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model("FarmerhomeM","fm");
		
		}

		public function index()
		{
	
			$temp=[
				"reviewInfo"=>$this->fm->getReview(),
				"i"=>0

			];

			$this->load->view('farmerhome',$temp);
		}
	}
?>