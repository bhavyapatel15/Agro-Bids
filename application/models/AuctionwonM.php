<?php
	
	class AuctionwonM extends CI_Model
	{
	

		public function getAllAUctions()
		{
			return $this->db->select("a.*,f.farmerid,f.farmername,f.profilephoto,u.type,s.subcategoryname,s.image")->from("tblauction a")->join("tblfarmer f","f.farmerid=a.farmerid")->join("tblunit u","u.unitid=a.unitid")->join("tblsubcategory s","s.subcategoryid=a.subcategoryid")->get()->result();
		}

		public function getBidInfo($where)
		{
			return $this->db->select("b.*,by.profilephoto,by.buyername")->from("tblbid b")->join("tblbuyer by","by.buyerid=b.buyerid")->where($where)->get()->result();
		}
		

	}

?>