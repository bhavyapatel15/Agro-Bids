<?php
	
	class ViewreviewM extends CI_Model
	{
		

		public function getAllReviews($where)
		{
			return $this->db->select("r.*,b.buyername,b.profilephoto")->from("tblreview r")->join("tblbuyer b","b.buyerid=r.buyerid")->where($where)->get()->result();
		}

	
		
	}

?>