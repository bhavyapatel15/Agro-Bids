<?php
	
	class CategoryM extends CI_Model
	{
		public function insertCategory($data)
		{
			$this->db->insert("tblcategory",$data);
		}

		public function deleteCategory($where)
		{
			$this->db->where($where)->delete("tblcategory");
		}

		public function getAllCategories()
		{
			return $this->db->get("tblcategory")->result();
		}

		public function getCategoryByID($where)
		{
			return $this->db->where($where)->get("tblcategory")->result();
		}

		public function updateCategory($newData,$where)
		{
			$this->db->where($where)->update("tblcategory",$newData);
		}


	}

?>