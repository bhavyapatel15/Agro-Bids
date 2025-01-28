<?php

	class BuyerloginM extends CI_Model
	{
		public function checkLogin($where)
		{
			return $this->db->where($where)->get("tblbuyer")->result();
		}
	}
?>