<?php
	
	class FarmermyauctionsM extends CI_Model
	{
	
		public function getAuctionByID($where)
		{
			return $this->db->select("a.*,f.farmername,u.type,s.subcategoryname,s.image")->from("tblauction a")->join("tblfarmer f","f.farmerid=a.farmerid")->join("tblsubcategory s","s.subcategoryid=a.subcategoryid")->join("tblunit u","u.unitid=a.unitid")->where("a.farmerid",$where)->get()->result();
		}

		public function updateAuctionStatus($newData,$where)
		{
				$this->db->where($where)->update("tblauction",$newData);
		}

		public function updateBidStatus($newData,$where)
		{
			   $this->db->where($where)->update("tblbid",$newData);	
		}

	}

?>