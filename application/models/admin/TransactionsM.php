<?php
	
	class TransactionsM extends CI_Model
	{
		
		public function getAllTransactions()
		{
			return $this->db->select("t.*,a.title")->from("tbltransaction t")->join("tblauction a","t.auctionid=a.auctionid")->get()->result();
		}

		public function getAllFarmer()
		{
			return $this->db->get("tblfarmer")->result();
		}

		public function getAllBuyer()
		{
			return $this->db->get("tblbuyer")->result();
		}
	

	}

?>