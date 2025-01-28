<?php

	class Buyerlogin extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("BuyerloginM","blm");
	
		}
		public function index()
		{
			$this->load->view('buyerlogin');
		}

		public function login()
		{

			$uinfo=$this->blm->checkLogin([
					"buyername"=>$this->input->post("txtuname"),
					"password"=>$this->input->post("txtpwd")
				   ]);
					
		
			if (count($uinfo)==0)
			{
				$temp=[
						"err"=>"Invalid Username Or Password..!!"
				];

				$this->load->view("buyerlogin",$temp);
			}
			else
			{
				if($uinfo[0]->status==0)
				{
					$temp=[
						"err"=>"Your Account Has Been Blocked..!!"
					];

					$this->load->view("buyerlogin",$temp);
				}
				else
				{
					$_SESSION['bname']=$uinfo[0]->buyername;
					$_SESSION['bid']=$uinfo[0]->buyerid;
					$_SESSION['img']=$uinfo[0]->profilephoto;
					$this->session->set_flashdata('item','item-value');
					redirect("buyerhome");
				}
			}

		}
	}
?>