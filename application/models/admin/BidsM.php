<?php
	
	class BidsM extends CI_Model
	{
		
		public function getAllBids()
		{
			return $this->db->get("tblbid")->result();
		}

		public function getAllAuctions()
		{
			return $this->db->get("tblauction")->result();
		}

		public function getAllBuyer()
		{
			return $this->db->get("tblbuyer")->result();
		}
	

	}

?>