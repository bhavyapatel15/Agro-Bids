<?php
	
	class FarmermoreinfoM extends CI_Model
	{
		
		public function getFarmerById($where)
		{
			return $this->db->select("f.*,c.cityname,u.regdt")->from("tblfarmer f")->join("tblcity c","c.cityid=f.cityid")->join("tbluser u","u.userid=f.userid")->where($where)->get()->result();
		}

		public function getauctionById($id)
		{
			return $this->db->select("f.*,a.status")->from("tblfarmer f")->join("tblauction a","a.farmerid=f.farmerid")->where("f.farmerid",$id)->get()->result();
		}

	
	}

?>