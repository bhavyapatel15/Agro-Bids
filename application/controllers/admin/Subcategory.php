<?php

	class Subcategory extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("admin/SubcategoryM","sm");

			if(!isset($_SESSION['name']))
			{
				redirect('admin/login');
			}
			
		}

		public function index()
		{
			$temp=[
				"subcategoryInfo"=>$this->sm->getAllSubCategories(),
				"categoryinfo"=>$this->sm->getAllCategories()
			];
			$this->load->view("admin/subcategory",$temp);
		}

		public function addsubCategory($categoryid)
		{
			
				$img=uniqid().$_FILES['fup']['name'];
				copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/mainProject/resources/admin/assets/images/".$img) or die("Cannot Upload Image");

				$data=[
					"subcategoryname"=>$this->input->post('txtscname'),
					"categoryid"=>$categoryid,
					"image"=>$img
				];

			$this->sm->insertsubCategory($data);
			redirect("admin/Subcategory");
		}

		public function removesubCategory($id)
		{
			$where=[
				"subcategoryid"=>$id
			];

			$this->sm->deletesubCategory($where);

			redirect("admin/Subcategory");
		}

		public function loadEdit($id)
		{

			$where=["subcategoryid"=>$id];
			$temp=[

					"subcatinfo"=>$this->sm->getsubCategoryByID($where),
					"categoryinfo"=>$this->sm->getAllCategories(),
					"isUpdate"=>true,
					"subcategoryInfo"=>$this->sm->getAllSubCategories()
			];
			
			$this->load->view("admin/editsubcategory",$temp);
		}

		public function editsubCategory($id)
		{

			if($_FILES['fup']['name']!="")
		    {
		    	$img=uniqid().$_FILES['fup']['name'];
				copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/mainProject/resources/admin/assets/images/".$img) or die("Cannot Upload Image");


				$newData=["image"=>$img];
		    }
		 
				$newData["subcategoryname"]=$this->input->post('txtscname');
				$where=["subcategoryid"=>$id];

				$this->sm->updatesubCategory($newData,$where);
				redirect('admin/Subcategory');
			
		}

	}
?>