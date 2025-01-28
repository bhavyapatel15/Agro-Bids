<?php

	class Changepassword extends CI_Controller
	{

		public function __construct()
		{

			parent::__construct();
			$this->load->model("ChangepasswordM","cm");

		}

		public function index()
		{
			
			$this->load->view("changepassword");
		}

		public function changePass()
		{
			if(isset($_SESSION['bid']))
			{
				$id=$_SESSION['bid'];
			
			    $where=["buyerid"=>$id];

				$temp=[

				  "profileInfo"=>$this->cm->getBuyer($where)
				
			     ];

			     $oldpass=$this->input->post("txtold");

			     if($oldpass==$temp["profileInfo"][0]->password)
			     {
			     	if($this->input->post("txtnew")!=$temp["profileInfo"][0]->password)
			     	{	
				     	$newData=[

				     		"password"=>$this->input->post("txtnew")
				     	];

				     	$this->cm->updatebuyer($newData,$where);
				     	$this->session->set_flashdata('item','item-value');
				     	 redirect('manageprofile');
				     } 	
				    else
				    {
				    	 	 $temperror=[

									  "err"=>"New Password Cannot Match Old Password.!!"
									
								     ];

								 $this->load->view("changepassword",$temperror);
				    } 

			     }
			     else
			     {
			     	$temperror=[

						  "err"=>"Old Password Does Not Match"
						
					     ];

					$this->load->view("changepassword",$temperror);
				    
			     }
			      

			}
			else
			{
				$id=$_SESSION['fid'];
				$where=["farmerid"=>$id];

				$temp=[

				   "profileInfo"=>$this->cm->getFarmer($where)
				 	
			     ];

			     $oldpass=$this->input->post("txtold");

			     if($oldpass==$temp["profileInfo"][0]->password)
			     {
			     	if($this->input->post("txtnew")!=$temp["profileInfo"][0]->password)
			     	{	
				     	$newData=[

				     		"password"=>$this->input->post("txtnew")
				     	];

				     	 $this->cm->updatefarmer($newData,$where);
				     	 $this->session->set_flashdata('item','item-value');
				     	 redirect('manageprofile');
				    } 	
				    else
				    {
				    	 	 $temperror=[

									  "err"=>"New Password Cannot Match Old Password.!!"
									
								     ];

								 $this->load->view("changepassword",$temperror);
				    } 
			     }

			     else
			     {
			     	 $temperror=[

						  "err"=>"Old Password Does Not Match.!!"
						
					     ];

					 $this->load->view("changepassword",$temperror);
					 
			     }

			    

			}

		}

	

		
	}
?>