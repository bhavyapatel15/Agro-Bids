<?php

	class Auctioninfo extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("AuctioninfoM","am");
			
		}

		public function index($id)
		{

			$where=["auctionid"=>$id];
			$where2=[

				"buyerid"=>$_SESSION['bid'],
				"auctionid"=>$id

			];

			$temp=[

				"auctionInfo"=>$this->am->getAuctionByID($where),
				"bidInfo"=>$this->am->getBidInfo($where),
				"bid"=>$this->am->getBidById($where2),
				"i"=>0
				
			];

			$this->load->view("auctioninfo",$temp);
			
		}

		public function insertbid($buyerid,$auctionid)
		{

			$where=["auctionid"=>$auctionid];

			$where2=[

				"buyerid"=>$_SESSION['bid'],
				"auctionid"=>$auctionid
			];

			$temp=[
			 	"bidInfo"=>$this->am->getBidInfo($where)			
			];

			if(count($temp["bidInfo"])==0)
			{
							$temp1=[
			 	  "baseprice"=>$this->am->getBasePrice($where)			
			     ];

			     $baseprice=($temp1["baseprice"][0]->baseprice);

			     $bidamount=$this->input->post("txtbid");	

			     if($bidamount <= $baseprice)
				{
				
					$temperror=[

						"err"=>"Please Bid Higher then Base Price.!!",
						"auctionInfo"=>$this->am->getAuctionByID($where),
						"bidInfo"=>$this->am->getBidInfo($where),
						"bid"=>$this->am->getBidById($where2),
						"i"=>0
					];

				    $this->load->view("auctioninfo",$temperror);
				}

				else
				{
						$data=[
							"auctionid"=>$auctionid,
							"buyerid"=>$buyerid,
							"bidamount"=>$this->input->post("txtbid")
						];	

				         $this->am->insertbid($data);

				         $newtemp=[

								"auctionInfo"=>$this->am->getAuctionByID($where),
								"bidInfo"=>$this->am->getBidInfo($where),
								"bid"=>$this->am->getBidById($where2),
								"i"=>0
								
							];

                      
				       $this->load->view("auctioninfo",$newtemp);
			     }        


			}
			else
			{

				$lastbidamount=($temp["bidInfo"][0]->bidamount);

				$bidamount=$this->input->post("txtbid");

				if($bidamount <= $lastbidamount)
				{

					$temperror=[

						"err"=>"Please Bid Higher then Last Bid Amount",
						"auctionInfo"=>$this->am->getAuctionByID($where),
						"bidInfo"=>$this->am->getBidInfo($where),
						"bid"=>$this->am->getBidById($where2),
						"i"=>0
					];

				    $this->load->view("auctioninfo",$temperror);
				}
				else
				{

						$data=[
							"auctionid"=>$auctionid,
							"buyerid"=>$buyerid,
							"bidamount"=>$this->input->post("txtbid")
						];	

				         $this->am->insertbid($data);

				         $newtemp=[

								"auctionInfo"=>$this->am->getAuctionByID($where),
								"bidInfo"=>$this->am->getBidInfo($where),
								"bid"=>$this->am->getBidById($where2),
								"i"=>0
								
							];

 	                   		
				       $this->load->view("auctioninfo",$newtemp);
				  }
			 }        
			
		}

		public function updatebid($bidid,$auctionid)
		{
			$where=["bidid"=>$bidid];
			$where2=["auctionid"=>$auctionid];
			$where3=[

				"buyerid"=>$_SESSION['bid'],
				"auctionid"=>$auctionid

			];

			$bidamount=$this->input->post('txtbid');

			 $temp=[
			
			 	"bidInfo"=>$this->am->getBidInfo($where2),
			 	"i"=>0
				
			];

			
			$lastbidamount=($temp["bidInfo"][0]->bidamount);

			if($bidamount <= $lastbidamount)
			{

				$temperror=[

					"err"=>"Please Bid Higher then Last Bid Amount",
					"auctionInfo"=>$this->am->getAuctionByID($where2),
					"bidInfo"=>$this->am->getBidInfo($where2),
					"bid"=>$this->am->getBidById($where3),
					"i"=>0
				];

			    $this->load->view("auctioninfo",$temperror);
			}	
			else
			{
					$newData=[
							"auctionid"=>$auctionid,
							"buyerid"=>$_SESSION['bid'],
							"bidamount"=>$this->input->post('txtbid')
						];

				 $this->am->updatebid($newData,$where);

			 	$newtemp=[

							"auctionInfo"=>$this->am->getAuctionByID($where2),
							"bidInfo"=>$this->am->getBidInfo($where2),
							"bid"=>$this->am->getBidById($where3),
							"i"=>0
							
						];

				
			    $this->load->view("auctioninfo",$newtemp);

			}	

		}

		public function removebid($bidid,$aid)
		{
			$where=["bidid"=>$bidid];
			$this->am->deletebid($where);

			$this->session->set_flashdata('item4','item4-value');
			redirect("auctioninfo/index/$aid");
		}

	}
?>