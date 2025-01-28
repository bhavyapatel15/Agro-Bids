<?php
	
	class AuctionsM extends CI_Model
	{
		
		public function getAllAuctions()
		{
			return $this->db->select("a.*,f.farmername,u.type,s.subcategoryname")->from("tblauction a")->join("tblfarmer f","f.farmerid=a.farmerid")->join("tblunit u","u.unitid=a.unitid")->join("tblsubcategory s","s.subcategoryid=a.subcategoryid")->get()->result();
		}

		public function getAuctionByID($where)
		{
			return $this->db->where($where)->get("tblauction")->result();
		}

	

	}

?>