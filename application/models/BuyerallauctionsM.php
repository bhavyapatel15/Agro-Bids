<?php
	
	class BuyerallauctionsM extends CI_Model
	{
	
		public function getAllAuctions()
		{
			return $this->db->select("a.*,f.farmername,s.subcategoryname,s.image,u.type")->from("tblauction a")->join("tblfarmer f","f.farmerid=a.farmerid")->join("tblsubcategory s","s.subcategoryid=a.subcategoryid")->join("tblunit u","u.unitid=a.unitid")->get()->result();
		}

		public function getAuction($where)
		{
			return $this->db->select("a.*,f.farmername,s.subcategoryname,s.image,u.type")->from("tblauction a")->join("tblfarmer f","f.farmerid=a.farmerid")->join("tblsubcategory s","s.subcategoryid=a.subcategoryid")->join("tblunit u","u.unitid=a.unitid")->like($where)->get()->result();
		}

	}

?>