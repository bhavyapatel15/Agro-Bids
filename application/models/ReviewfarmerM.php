<?php
	
	class ReviewfarmerM extends CI_Model
	{
		
		public function getBuyerInfo($where)
		{
			return $this->db->select("b.*,c.cityname,c.stateid")->from("tblbuyer b")->join("tblcity c","c.cityid=b.cityid")->where("b.buyerid",$where)->get()->result();
		}	
	

	}

?>