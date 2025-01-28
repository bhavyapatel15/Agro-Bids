<?php
	
	class FarmersM extends CI_Model
	{
		

		public function getAllFarmers()
		{
			return $this->db->select("f.*,c.cityname")->from("tblfarmer f")->join("tblcity c","c.cityid=f.cityid")->get()->result();
		}

		public function getFarmerByID($where)
		{
			return $this->db->where($where)->get("tblfarmer")->result();
		}

		public function updateFarmer($newData,$where)
		{
			$this->db->where($where)->update("tblfarmer",$newData);
		}
	}

?>