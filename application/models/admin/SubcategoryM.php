<?php
	
	class SubcategoryM extends CI_Model
	{
		public function insertsubCategory($data)
		{
			$this->db->insert("tblsubcategory",$data);
		}

		public function deletesubCategory($where)
		{
			$this->db->where($where)->delete("tblsubcategory");
		}

		public function getAllSubCategories()
		{
			return $this->db->get("tblsubcategory")->result();
		}

		public function getAllCategories()
		{
			return $this->db->get("tblcategory")->result();	
		}

		public function getsubCategoryByID($where)
		{
			return $this->db->where($where)->get("tblsubcategory")->result();
		}

		public function updatesubCategory($newData,$where)
		{
			$this->db->where($where)->update("tblsubcategory",$newData);
		}

		public function getImg($where)
		{
			$this->db->select("image")->where($where)->get("tblsubcategory")->result();
		}

	}

?>