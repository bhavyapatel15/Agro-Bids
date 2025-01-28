<?php
	
	class ViewreportM extends CI_Model
	{
		

		public function getAllreport($where)
		{
			return $this->db->select("r.*,b.buyername,b.profilephoto")->from("tblreport r")->join("tblbuyer b","b.buyerid=r.buyerid")->where($where)->get()->result();
		}

		
	}

?>