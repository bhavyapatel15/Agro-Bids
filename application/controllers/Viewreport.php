<?php

	class Viewreport extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("ViewreportM","vm");
			
		}

		public function index()
		{
			$where=["farmerid"=>$_SESSION['fid']];
			$temp=[

                "reportInfo"=>$this->vm->getAllreport($where)
				
			];

			$this->load->view("Viewreport",$temp);
		}

		


	}
?>