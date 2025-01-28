<?php

	class Viewreview extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("ViewreviewM","vm");
			
		}

		public function index()
		{
			$where=["farmerid"=>$_SESSION['fid']];
			$temp=[

                "reviewInfo"=>$this->vm->getAllReviews($where)
				
			];

			$this->load->view("Viewreview",$temp);
		}

		


	}
?>