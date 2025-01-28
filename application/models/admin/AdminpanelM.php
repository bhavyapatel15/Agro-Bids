<?php
	
	class AdminpanelM extends CI_Model
	{
	
		public function getAllFarmers()
		{
			return $this->db->get("tblfarmer")->result();
		}

		public function getAllBuyers()
		{
			return $this->db->get("tblbuyer")->result();
		}
		public function getAllUsers()
		{
			return $this->db->get("tbluser")->result();
		}
		public function getAllTransactions()
		{
			return $this->db->select_sum("amount")->get("tbltransaction")->result();
		}

	}

?>