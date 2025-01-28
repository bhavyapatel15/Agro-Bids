<?php

	class Buyers extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("admin/BuyersM","bm");

			if(!isset($_SESSION['name']))
			{
				redirect('admin/login');
			}
		}

		public function index()
		{
			$temp=[
				"buyerInfo"=>$this->bm->getAllBuyers()
				
			];
			$this->load->view("admin/Buyers",$temp);
		}

		public function toggleStatus($id,$status)
		{
			$where=["buyerid"=>$id];
			$newData=["status"=>1-$status];

			$this->bm->updatebuyer($newData,$where);
			redirect("admin/Buyers");
		}

	}
?>