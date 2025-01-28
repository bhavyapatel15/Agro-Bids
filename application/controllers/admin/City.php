<?php

	class City extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("admin/CityM","cm");

			if(!isset($_SESSION['name']))
			{
				redirect('admin/login');
			}
		}

		public function index($id)
		{

			$where=["stateid"=>$id];
			$temp=[

					"cityinfo"=>$this->cm->getcityByID($where)
					
			];
			$this->load->view("admin/City",$temp);
		}

		public function addCity($id)
		{
				$data=[
					"cityname"=>$this->input->post('txtcname'),
					"stateid"=>$id
				];

			$this->cm->insertcity($data);
			redirect("admin/City/index/$id");
		}

		public function removeCity($id,$stateid)
		{
			$where=[
				"cityid"=>$id
			];

			$this->cm->deletecity($where);

			redirect("admin/City/index/$stateid");
		}

		public function loadedit($id,$stateid)
		{

			$where=["cityid"=>$id];
			$wherestate=["stateid"=>$stateid];
			$temp=[

					"cinfo"=>$this->cm->getcityByID($where),
					"cityinfo"=>$this->cm->getcityByID($wherestate),
					"isUpdate"=>true,
					"stateid"=>$stateid
					
			];
			
			$this->load->view("admin/City",$temp);
		}

		public function editCity($id,$stateid)
		{
		    	$newData=[
					"cityname"=>$this->input->post('txtcname')
				];

				$where=["cityid"=>$id];

				$this->cm->updatecity($newData,$where);
				
				redirect("admin/City/index/$stateid");
			
		}

	}
?>