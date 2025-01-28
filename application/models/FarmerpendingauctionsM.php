<?php
	
	class FarmerpendingauctionsM extends CI_Model
	{
		
		public function getAllPendingAuctions($where)
		{
			return $this->db->select("a.*,f.farmername,f.profilephoto,u.type,s.subcategoryname,s.image")->from("tblauction a")->join("tblfarmer f","f.farmerid=a.farmerid")->join("tblunit u","u.unitid=a.unitid")->join("tblsubcategory s","s.subcategoryid=a.subcategoryid")->where($where)->get()->result();
		}

		
	}

?>