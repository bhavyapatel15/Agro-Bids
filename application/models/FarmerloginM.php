<?php

	class FarmerloginM extends CI_Model
	{
		public function checkLogin($where)
		{
			return $this->db->where($where)->get("tblfarmer")->result();
		}
	}
?>