<?php
	
	class FarmertransactionsM extends CI_Model
	{

		public function getTransactions($where)
		{
			return $this->db->select("a.*,t.transactionid,t.buyerid,t.razororderid,t.razorpaymentid,t.razorpaysignature,t.transacdt,t.amount,t.shippingaddress")->from("tblauction a")->join("tbltransaction t","t.auctionid=a.auctionid")->join("tblsubcategory sc","sc.subcategoryid=a.subcategoryid")->where($where)->get()->result();
		}
		public function getAllBuyers()
		{
			return $this->db->get("tblbuyer")->result();
		}
	
	}

?>