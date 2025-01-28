<?php

	class Mybids extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("MybidsM","mm");
			
		}

		public function index($buyerid)
		{

			$id=$buyerid;

			$temp=[

                "auctionInfo"=>$this->mm->getAllAUctions(),
				"bidInfo"=>$this->mm->getBidInfo($id)
				
			];

			$this->load->view("Mybids",$temp);
		}

		


	}
?>