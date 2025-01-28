<?php
	
	class BuyermoreinfoM extends CI_Model
	{
		
		public function getBuyerById($where)
		{
			return $this->db->select("b.*,c.cityname,u.regdt")->from("tblbuyer b")->join("tblcity c","c.cityid=b.cityid")->join("tbluser u","u.userid=b.userid")->where($where)->get()->result();
		}


		public function getBids($id)
		{
			return $this->db->select("b.*,a.status as astatus")->from("tblbid b")->join("tblbuyer by","b.buyerid=by.buyerid")->join("tblauction a","a.auctionid=b.auctionid")->where("by.buyerid",$id)->get()->result();
		}
	}

?>