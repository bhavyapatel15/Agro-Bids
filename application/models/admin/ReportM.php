<?php
	
	class ReportM extends CI_Model
	{
		
		public function getAllReports()
		{
			return $this->db->get("tblreport")->result();
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