<?php

	class Category extends CI_Controller
	{

		public function __construct()
		{

			parent::__construct();
			$this->load->model("admin/CategoryM","cm");

			if(!isset($_SESSION['name']))
			{
				redirect('admin/login');
			}

		}

		public function index()
		{
			$temp=[
				"categoryInfo"=>$this->cm->getAllCategories()
				
			];
			$this->load->view("admin/category",$temp);
		}

		public function addCategory()
		{
			
				$img=uniqid().$_FILES['fup']['name'];
				copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/mainProject/resources/admin/assets/images/".$img) or die("Cannot Upload Image");

				$data=[
					"categoryname"=>$this->input->post('txtcname'),
					"image"=>$img
				];

			$this->cm->insertCategory($data);
			redirect("admin/Category");
		}

		public function removecategory($id)
		{
			$where=[
				"categoryid"=>$id
			];

			$this->cm->deleteCategory($where);

			redirect("admin/Category");
		}

		public function loadEdit($id)
		{

			$where=["categoryid"=>$id];
			$temp=[

					"catinfo"=>$this->cm->getCategoryByID($where),
					"isUpdate"=>true,
					"categoryInfo"=>$this->cm->getAllCategories()
			];
			
			$this->load->view("admin/editcategory",$temp);
		}

		public function editCategory($id)
		{

			if($_FILES['fup']['name']!="")
		    {
		    	$img=uniqid().$_FILES['fup']['name'];
				copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/mainProject/resources/admin/assets/images/".$img) or die("Cannot Upload Image");

				$newData=["image"=>$img];

		    }
		    	$newData["categoryname"]=$this->input->post('txtcname');
					
			
				$where=["categoryid"=>$id];

				$this->cm->updateCategory($newData,$where);
				redirect('admin/Category');
			
		}

	}
?>