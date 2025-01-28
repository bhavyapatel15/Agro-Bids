<?php

	class Farmerlogin extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("FarmerloginM","flm");
	
		}
		public function index()
		{
			$this->load->view('farmerlogin');
		}

		public function login()
		{

			$uinfo=$this->flm->checkLogin([
					"farmername"=>$this->input->post("txtuname"),
					"password"=>$this->input->post("txtpwd")
				   ]);
					
		
			if (count($uinfo)==0)
			{
				$temp=[
						"err"=>"Invalid Username Or Password..!!"
				];

				$this->load->view("farmerlogin",$temp);
			}
			else
			{
				if($uinfo[0]->status==0)
				{
					$temp=[
						"err"=>"Your Account Has Been Blocked..!!"
					];

					$this->load->view("farmerlogin",$temp);
				}
				else
				{
					$_SESSION['fname']=$uinfo[0]->farmername;
					$_SESSION['fid']=$uinfo[0]->farmerid;
					$_SESSION['img']=$uinfo[0]->profilephoto;
					$this->session->set_flashdata('item','item-value');
					redirect("farmerhome");
				}
			}

		}
	}
?>