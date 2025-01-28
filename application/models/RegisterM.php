<?php

	class RegisterM extends CI_Model
	{
		public function getAllCities()
		{
			return $this->db->get("tblcity")->result();
		}

		public function insertUser($where)
		{
			$this->db->insert("tbluser",$where);
			return $this->db->insert_id();
		}

		public function getUserId()
		{
			return $this->db->select()->from("tbluser")->join("tblfarmer")->get()->result();
		}

		public function insertBuyer($where)
		{
			$this->db->insert("tblbuyer",$where);
		}

		public function insertFarmer($where)
		{
			$this->db->insert("tblfarmer",$where);
		}
	}
?>