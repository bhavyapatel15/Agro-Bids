<?php
	
	class UnitsM extends CI_Model
	{
		public function insertunit($data)
		{
			$this->db->insert("tblunit",$data);
		}

		public function deleteunits($where)
		{
			$this->db->where($where)->delete("tblunit");
		}

		public function getAllunits()
		{
			return $this->db->get("tblunit")->result();
		}

		
		public function getunitByID($where)
		{
			return $this->db->where($where)->get("tblunit")->result();
		}

		public function updateunits($newData,$where)
		{
			$this->db->where($where)->update("tblunit",$newData);
		}

		

	}

?>