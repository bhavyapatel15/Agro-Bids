<?php
	
	class ReviewM extends CI_Model
	{
		
		public function getAllReview()
		{
			return $this->db->get("tblreview")->result();
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