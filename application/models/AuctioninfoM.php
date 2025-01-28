<?php
	
	class AuctioninfoM extends CI_Model
	{
		
		public function getAuctionByID($where)
		{
			return $this->db->select("a.*,f.farmername,f.profilephoto,u.type,s.subcategoryname,s.image")->from("tblauction a")->join("tblfarmer f","f.farmerid=a.farmerid")->join("tblunit u","u.unitid=a.unitid")->join("tblsubcategory s","s.subcategoryid=a.subcategoryid")->where($where)->get()->result();
		}

		public function getBidInfo($where)
		{
			return $this->db->select("b.*,by.profilephoto,by.buyername")->from("tblbid b")->join("tblbuyer by","by.buyerid=b.buyerid")->where($where)->order_by("bidamount","desc")->get()->result();
		}

		public function getBidById($where)
		{
			return $this->db->where($where)->get("tblbid")->result();
		}

		public function insertbid($where)
		{
			$this->db->insert("tblbid",$where);
		}

		public function updatebid($newData,$where)
		{
			$this->db->where($where)->update("tblbid",$newData);
		}

		public function deletebid($where)
		{
			$this->db->where($where)->delete("tblbid");
		}

		public function getBasePrice($where)
		{
			return $this->db->where($where)->get("tblauction")->result();
		}
	}

?>