<?php

	class Farmertransactions extends CI_Controller
	{

		public function __construct()
		{

			parent::__construct();
			$this->load->model("FarmertransactionsM","fm");

		}

		public function index()
		{

			$where=["a.farmerid"=>$_SESSION['fid']];

			$temp=[
				"transactionInfo"=>$this->fm->getTransactions($where),
				"buyerinfo"=>$this->fm->getAllBuyers()
			];

			$this->load->view("farmertransactions",$temp);
		}

		public function getinfo($auctionid)
		{

			$where=["a.auctionid"=>$auctionid];

			$temp=[
				"transactionInfo"=>$this->fm->getTransactions($where),
				"buyerinfo"=>$this->fm->getAllBuyers()
			];

			$this->load->view("farmertransactions",$temp);
		}

	}
?>