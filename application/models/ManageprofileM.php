<?php
	
	class ManageprofileM extends CI_Model
	{
	
		public function getBuyer($where)
		{
			return $this->db->where($where)->get("tblbuyer")->result();
		}

		public function getFarmer($where)
		{
			return $this->db->where($where)->get("tblfarmer")->result();
		}

		public function getCity()
		{
			return $this->db->get("tblcity")->result();
		}
		public function updateFarmer($newData,$where)
		{
			$this->db->where($where)->update("tblfarmer",$newData);
		}
		public function updateBuyer($newData,$where)
		{
			$this->db->where($where)->update("tblbuyer",$newData);
		}

	}

?>