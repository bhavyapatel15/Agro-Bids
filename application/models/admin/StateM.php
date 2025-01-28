<?php
	
	class StateM extends CI_Model
	{
		public function insertState($data)
		{
			$this->db->insert("tblstate",$data);
		}

		public function deleteState($where)
		{
			$this->db->where($where)->delete("tblstate");
		}

		public function getAllCities()
		{
			return $this->db->get("tblcity")->result();
		}

		public function getAllStates()
		{
			return $this->db->get("tblstate")->result();
		}

		public function getStateByID($where)
		{
			return $this->db->where($where)->get("tblstate")->result();
		}

		public function updateState($newData,$where)
		{
			$this->db->where($where)->update("tblstate",$newData);
		}

		

	}

?>