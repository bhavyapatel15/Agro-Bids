<?php

	class Farmers extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("admin/FarmersM","fm");

			if(!isset($_SESSION['name']))
			{
				redirect('admin/login');
			}
		}

		public function index()
		{
			$temp=[
				"farmerInfo"=>$this->fm->getAllFarmers()
				
			];
			$this->load->view("admin/Farmers",$temp);
		}

		public function toggleStatus($id,$status)
		{
			$where=["farmerid"=>$id];
			$newData=["status"=>1-$status];

			$this->fm->updatefarmer($newData,$where);
			redirect("admin/Farmers");
		}

	}
?>