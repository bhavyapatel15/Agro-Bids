<?php
	
	class AddauctionM extends CI_Model
	{
	
		public function insertauction($where)
		{
			$this->db->insert("tblauction",$where);
		}

		public function getAllAuction()
		{
			return $this->db->select("a.*,f.farmername,s.subcategoryname,s.image,u.type")->from("tblauction a")->join("tblfarmer f","f.farmerid=a.farmerid")->join("tblsubcategory s","s.subcategoryid=a.subcategoryid")->join("tblunit u","u.unitid=a.unitid")->get()->result();
		}

		public function getAllunits()
		{
			return $this->db->get("tblunit")->result();
		}

		public function getAllsubcategories()
		{
			return $this->db->get("tblsubcategory")->result();
		}
		public function getAllcategories()
		{
			return $this->db->get("tblcategory")->result();
		}
		public function getAllSubCatsById($where)
		{
			return $this->db->where($where)->get("tblsubcategory")->result();
		}
	
	}

?>