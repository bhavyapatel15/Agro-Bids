<?php
	
	class BuyerorderinfoM extends CI_Model
	{

		public function getTransactions($where)
		{
			return $this->db->select("t.*")->from("tbltransaction t")->join("tblauction a","t.auctionid=a.auctionid")->join("tblsubcategory sc","sc.subcategoryid=a.subcategoryid")->where($where)->get()->result();
		}
		public function getAllBuyers()
		{
			return $this->db->get("tblbuyer")->result();
		}
		public function getAllFarmers()
		{
			return $this->db->get("tblfarmer")->result();
		}
		public function insertreview($data)
		{
			$this->db->insert("tblreview",$data);
		}
		public function insertReport($data)
		{
			$this->db->insert("tblreport",$data);
		}
	
	
	}

?>