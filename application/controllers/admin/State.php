<?php

	class State extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("admin/StateM","sm");

			if(!isset($_SESSION['name']))
			{
				redirect('admin/login');
			}
		}

		public function index()
		{
			$temp=[
				"stateinfo"=>$this->sm->getAllStates()
				
			];
			$this->load->view("admin/State",$temp);
		}

		public function addstate()
		{
		
				$data=[
					"statename"=>$this->input->post('txtstatename')
				];

			$this->sm->insertState($data);
			redirect("admin/State");
		}

		public function removestate($id)
		{
			$where=[
				"stateid"=>$id
			];

			$this->sm->deleteState($where);

			redirect("admin/State");
		}

		public function loadedit($id)
		{

			$where=["stateid"=>$id];
			$temp=[

					"sinfo"=>$this->sm->getStateByID($where),
					"isUpdate"=>true,
					"stateinfo"=>$this->sm->getAllStates()
			];
			
			$this->load->view("admin/State",$temp);
		}

		public function editstate($id)
		{

		
		    	$newData=[
					"statename"=>$this->input->post('txtstatename'),
				];

				$where=["stateid"=>$id];

				$this->sm->updateState($newData,$where);
				redirect('admin/State');
			
		}

	}
?>