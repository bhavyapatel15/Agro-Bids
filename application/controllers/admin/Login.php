<?php

	class Login extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("admin/LoginM","lm");
	
		}
		public function index()
		{

			if(isset($_SESSION['name']))
			{
				redirect('admin/adminpanel');
			}
			
			$this->load->view('admin/login');
		}

		public function login()
		{

			$uinfo=$this->lm->checkLogin([
					"adminname"=>$this->input->post("txtuname"),
					"password"=>$this->input->post("txtpwd")
				   ]);
					
		
			if (count($uinfo)==0)
			{
				$temp=[
						"err"=>"Invalid Username Or Password..!!"
				];

				$this->load->view("admin/login",$temp);
			}
			else
			{
				if($uinfo[0]->status==0)
				{
					$temp=[
						"err"=>"Your Account Has Been Blocked..!!"
					];

					$this->load->view("admin/login",$temp);
				}
				else
				{
					$_SESSION['name']=$uinfo[0]->adminname;
					$_SESSION['id']=$uinfo[0]->adminid;
					$_SESSION['img']=$uinfo[0]->profilepic;
					$this->session->set_flashdata('item','item-value');
					redirect("admin/Adminpanel");

				}
			}

		}
	}
?>