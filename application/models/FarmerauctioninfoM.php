<?php
	
	class FarmerauctioninfoM extends CI_Model
	{
	
		public function getAuctionByID($where)
		{
			return $this->db->select("a.*,f.farmername,u.type,s.subcategoryname,s.image,f.profilephoto")->from("tblauction a")->join("tblfarmer f","f.farmerid=a.farmerid")->join("tblsubcategory s","s.subcategoryid=a.subcategoryid")->join("tblunit u","u.unitid=a.unitid")->where($where)->get()->result();
		}
		public function getBidInfo($where)
		{
			return $this->db->select("b.*,by.profilephoto,by.buyername")->from("tblbid b")->join("tblbuyer by","by.buyerid=b.buyerid")->where($where)->order_by("bidamount","desc")->get()->result();
		}


	}

?>