<?php

	class Units extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("admin/UnitsM","um");

			if(!isset($_SESSION['name']))
			{
				redirect('admin/login');
			}
		}

		public function index()
		{
			$temp=[
				"unitInfo"=>$this->um->getAllunits()
				
			];
			$this->load->view("admin/Units",$temp);
		}

		public function addunit()
		{
			
				$data=[
					"type"=>$this->input->post('txtuname')
				];

			$this->um->insertunit($data);
			redirect("admin/Units");
		}

		public function removeunit($id)
		{
			$where=[
				"unitid"=>$id
			];

			$this->um->deleteunits($where);

			redirect("admin/Units");
		}

		public function loadEdit($id)
		{

			$where=["unitid"=>$id];
			
			$temp=[

					"unitinfo"=>$this->um->getunitByID($where),
					"isUpdate"=>true,
					"unitInfo"=>$this->um->getAllunits()
			];
			
			$this->load->view("admin/Units",$temp);
		}

		public function editunit($id)
		{

		    	$newData=[
					"type"=>$this->input->post('txtuname')				
				];

				$where=["unitid"=>$id];

				$this->um->updateunits($newData,$where);
				redirect('admin/Units');
			
		}

	}
?>