<?php
	
	class BuyerprofileM extends CI_Model
	{
		
		public function getAllBuyers()
		{
			return $this->db->select("b.*,c.cityname")->from("tblbuyer b")->join("tblcity c","c.cityid=b.cityid")->get()->result();
		}

	
	}

?>