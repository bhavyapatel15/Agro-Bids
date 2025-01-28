<?php

	class Buyerorderinfo extends CI_Controller
	{

		public function __construct()
		{

			parent::__construct();
			$this->load->model("BuyerorderinfoM","bm");

		}

		public function index()
		{

			$where=["buyerid"=>$_SESSION['bid']];

			$temp=[
				"transactionInfo"=>$this->bm->getTransactions($where),
				"buyerinfo"=>$this->bm->getAllBuyers(),
				"farmerInfo"=>$this->bm->getAllFarmers()
			];

			$this->load->view("buyerorderinfo",$temp);
		
		}

		public function getinfo($auctionid)
		{

			$where=["t.auctionid"=>$auctionid];

			$temp=[
				"transactionInfo"=>$this->bm->getTransactions($where),
				"buyerinfo"=>$this->bm->getAllBuyers()
			];

			$this->load->view("buyerorderinfo",$temp);
		}


		public function submit($buyerid,$farmerid,$orderid)
        {

		       $data=[
		            "buyerid" =>$buyerid,
		            "farmerid"=>$farmerid,
		            "review"=>$this->input->post('message'),
		            "rating"=>$this->input->post('rate'),
		         ];

		         $this->bm->insertreview($data); 

		         echo "<script>alert('Reviewed Succesfully..!');</script>";

					$where=["buyerid"=>$_SESSION['bid']];

					$temp=[
						"transactionInfo"=>$this->bm->getTransactions($where),
						"buyerinfo"=>$this->bm->getAllBuyers(),
						"farmerInfo"=>$this->bm->getAllFarmers()
					];
					$_SESSION['review'.$orderid]=1;

					$this->load->view("buyerorderinfo",$temp);
              
         }

         public function submit2($buyerid,$farmerid,$orderid)
        {

		       $data=[
		            "buyerid" =>$buyerid,
		            "farmerid"=>$farmerid,
		            "des"=>$this->input->post('message1')	       
		         ];

		         $this->bm->insertReport($data); 

		         echo "<script>alert('Reported Succesfully..!');</script>";

					$where=["buyerid"=>$_SESSION['bid']];

					$temp=[
						"transactionInfo"=>$this->bm->getTransactions($where),
						"buyerinfo"=>$this->bm->getAllBuyers(),
						"farmerInfo"=>$this->bm->getAllFarmers()
					];
					$_SESSION['report'.$orderid]=1;

					$this->load->view("buyerorderinfo",$temp);
		
              
         }

	}
?>