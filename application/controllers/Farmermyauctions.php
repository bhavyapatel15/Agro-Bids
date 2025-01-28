<?php

	class Farmermyauctions extends CI_Controller
	{

		public function __construct()
		{

			parent::__construct();
			$this->load->model("FarmermyauctionsM","fm");
			
		}

		public function index()
		{

			$id=$_SESSION['fid'];
			
			$temp=[
				"auctionInfo"=>$this->fm->getAuctionByID($id)
				
			];
			$this->load->view("Farmermyauctions",$temp);
		}

		public function completedauction($auctionid,$bidid)
		{

			$id=$_SESSION['fid'];

			$where1=["auctionid"=>$auctionid];
			
			$where2=["bidid"=>$bidid];

			$newData=[

				"status"=>2
				
			];

			$this->fm->updateAuctionStatus($newData,$where1);

			$this->fm->updateBidStatus($newData,$where2);


			$temp=[
				"auctionInfo"=>$this->fm->getAuctionByID($id)
				
			];

			$this->load->view("Farmermyauctions",$temp);
		}

	}
?>