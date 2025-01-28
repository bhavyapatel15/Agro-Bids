<?php
	
	class ChangepasswordM extends CI_Model
	{
	
		public function getBuyer($where)
		{
			return $this->db->where($where)->get("tblbuyer")->result();
		}

		public function getFarmer($where)
		{
			return $this->db->where($where)->get("tblfarmer")->result();
		}

		public function updatefarmer($newData,$where)
		{
			$this->db->where($where)->update("tblfarmer",$newData);
     
        }
        public function updatebuyer($newData,$where)
		{
			$this->db->where($where)->update("tblbuyer",$newData);
     
        }

	}

?>