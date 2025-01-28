<?php
	
	class CityM extends CI_Model
	{
		public function insertcity($data)
		{
			$this->db->insert("tblcity",$data);
		}

		public function deletecity($where)
		{
			$this->db->where($where)->delete("tblcity");
		}

		public function getcityByID($where)
		{
			return $this->db->where($where)->get("tblcity")->result();
		}

		public function updatecity($newData,$where)
		{
			$this->db->where($where)->update("tblcity",$newData);
		}

		
	}

?>