<?php
	
	class BuyersM extends CI_Model
	{
		

		public function getAllBuyers()
		{
			return $this->db->select("b.*,c.cityname")->from("tblbuyer b")->join("tblcity c","c.cityid=b.cityid")->get()->result();
		}

		public function getBuyerByID($where)
		{
			return $this->db->where($where)->get("tblbuyer")->result();
		}

		public function updatebuyer($newData,$where)
		{
			$this->db->where($where)->update("tblbuyer",$newData);
		}

	}

?>