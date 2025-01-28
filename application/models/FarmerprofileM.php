<?php
	
	class FarmerprofileM extends CI_Model
	{
		
		public function getAllFarmers()
		{
			return $this->db->select("f.*,c.cityname")->from("tblfarmer f")->join("tblcity c","c.cityid=f.cityid")->get()->result();
		}

	
	}

?>