<?php
	
	class MainM extends CI_Model
	{
		
		public function getReview()
		{
			return $this->db->select("r.*,b.buyername,b.profilephoto")->from("tblreview r")->join("tblbuyer b","b.buyerid=r.buyerid")->get()->result();
		}

	
	}

?>