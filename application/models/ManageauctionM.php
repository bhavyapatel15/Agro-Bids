<?php
	
	class ManageauctionM extends CI_Model
	{
		public function getAllAuctions($where)
		{
		   return $this->db->select("a.*,f.farmername,f.profilephoto,u.type,s.subcategoryname,s.image")->from("tblauction a")->join("tblfarmer f","f.farmerid=a.farmerid")->join("tblunit u","u.unitid=a.unitid")->join("tblsubcategory s","s.subcategoryid=a.subcategoryid")->where("a.farmerid",$where)->get()->result();
		}

		public function deleteauction($where)
		{
			$this->db->where($where)->delete("tblauction");
		}

		public function getAuctionByID($where)
		{
			 return $this->db->select("a.*,f.farmername,f.profilephoto,u.type,s.subcategoryname,s.image")->from("tblauction a")->join("tblfarmer f","f.farmerid=a.farmerid")->join("tblunit u","u.unitid=a.unitid")->join("tblsubcategory s","s.subcategoryid=a.subcategoryid")->where("a.auctionid",$where)->get()->result();
		}

		public function getSubCategories()
		{
			return $this->db->get("tblsubcategory")->result();
		}

		public function getUnit()
		{
			return $this->db->get("tblunit")->result();
		}

		public function updateauction($newData,$where)
		{
			$this->db->where($where)->update("tblauction",$newData);
		}

		public function updateimage($newData,$where)
		{
			$this->db->where($where)->update("tblsubcategory",$newData);
		}

		public function getAllSubCatsById($where)
		{
			return $this->db->where($where)->get("tblsubcategory")->result();
		}
			public function getAllcategories()
		{
			return $this->db->get("tblcategory")->result();
		}

	}

?>