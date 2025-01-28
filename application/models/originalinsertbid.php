
	            $where=["auctionid"=>$auctionid];

	            $temp=[
				
				 	"bidInfo"=>$this->am->getBidInfo($where)
					
				];

				
				$lastbidamount=($temp["bidInfo"][0]->bidamount);

				$bidamount=$this->input->post('txtbid');
				
				if($bidamount <= $lastbidamount)
				{

					$temperror=[

						"err"=>"Please Bid Higher then Last Bid Amount",
						"auctionInfo"=>$this->am->getAuctionByID($where),
						"bidInfo"=>$this->am->getBidInfo($where)
					];

				    $this->load->view("auctioninfo",$temperror);
				}	
				else
				{
					$data=[
							"auctionid"=>$auctionid,
							"buyerid"=>$buyerid,
							"bidamount"=>$bidamount

					];

					$temp["auctionInfo"]=$this->am->getAuctionByID($where);

				    $this->am->insertbid($data);
				    $this->load->view("auctioninfo",$temp);
				}	