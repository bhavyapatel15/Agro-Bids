<?php

	class LoginM extends CI_Model
	{
		public function checkLogin($where)
		{
			return $this->db->where($where)->get("tbladmin")->result();
		}
	}
?>