<?php
	
	class TransactionM extends CI_Model
	{
		
		public function getBuyerInfo($where)
		{
			return $this->db->select("b.*,c.cityname,c.stateid")->from("tblbuyer b")->join("tblcity c","c.cityid=b.cityid")->where("b.buyerid",$where)->get()->result();
		}

		public function getBidInfo($id)
		{
			return $this->db->select("b.*,a.status")->from("tblbid b")->join("tblauction a","a.auctionid=b.auctionid")->where("b.bidid",$id)->get()->result();
		}

		public function getStateInfo()
		{
			return $this->db->get("tblstate")->result();
		}

		public function getCityInfo()
		{
			return $this->db->get("tblcity")->result();
		}

		public function insertData($data)
		{
			$this->db->insert("tbltransaction",$data);
		}
		public function editBidstatus($newData,$where)
		{
			$this->db->where($where)->update("tblbid",$newData);
		}
		public function editAuctionstatus($newData,$where)
		{
			$this->db->where($where)->update("tblauction",$newData);
		}
		
		public function getFarmerId($where)
		{
			return $this->db->where($where)->get("tblauction")->result();
		}
	

	}

?>