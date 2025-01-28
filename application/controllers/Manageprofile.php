<?php

	class Manageprofile extends CI_Controller
	{

		public function __construct()
		{

			parent::__construct();
			$this->load->model("ManageprofileM","mp");

		}

		public function index()
		{
			if(isset($_SESSION['bid']))
			{
				$id=$_SESSION['bid'];
			
			    $where=["buyerid"=>$id];

				$temp=[

				  "profileInfo"=>$this->mp->getBuyer($where),
				  "cityInfo"=>$this->mp->getCity()
				
			     ];

			      $this->load->view("managebuyerprofile",$temp);

			}
			else
			{
				$id=$_SESSION['fid'];
				$where=["farmerid"=>$id];

				$temp=[

				   "profileInfo"=>$this->mp->getFarmer($where),
				   "cityInfo"=>$this->mp->getCity()
			
			     ];

			      $this->load->view("managefarmerprofile",$temp);

			}

			
		}

		public function updatefarmer($userid,$farmerid)
		{

			$where=["farmerid"=>$farmerid];

			$temp=[

					"userid"=>$userid,    			
					"farmername"=>$this->input->post('txtname'),
					"email"=>$this->input->post('txtemail'),
					"cityid"=>$this->input->post('city'),
					"bio"=>$this->input->post('txtbio'),
					"contact"=>$this->input->post('txtcontact')
					
				];


				if($_FILES['profilefup']['name']!="")
				{

					$profileimg=uniqid().$_FILES['profilefup']['name'];
					copy($_FILES['profilefup']['tmp_name'], "C:/xampp/htdocs/mainProject/resources/user/assets/img/".$profileimg) or die("Cannot Upload Image");

					$temp["profilephoto"]=$profileimg;

					$_SESSION['img']=$profileimg;
				}

				if($_FILES['coverfup']['name']!="")
				{

					$coverimg=uniqid().$_FILES['coverfup']['name'];
					copy($_FILES['coverfup']['tmp_name'], "C:/xampp/htdocs/mainProject/resources/user/assets/img/".$coverimg) or die("Cannot Upload Image");

					$temp["coverphoto"]=$coverimg;

				}

				$this->mp->updateFarmer($temp,$where);
				$this->session->set_flashdata('item1','item1-value');
				redirect('manageprofile');
			
		}

		public function updatebuyer($userid,$buyerid)
		{

			$where=["buyerid"=>$buyerid];

			$temp=[

					"userid"=>$userid,    			
					"buyername"=>$this->input->post('txtname'),
					"email"=>$this->input->post('txtemail'),
					"cityid"=>$this->input->post('city'),
					"bio"=>$this->input->post('txtbio'),
					"contact"=>$this->input->post('txtcontact')
					
				];


				if($_FILES['profilefup']['name']!="")
				{

					$profileimg=uniqid().$_FILES['profilefup']['name'];
					copy($_FILES['profilefup']['tmp_name'], "C:/xampp/htdocs/mainProject/resources/user/assets/img/".$profileimg) or die("Cannot Upload Image");

					$temp["profilephoto"]=$profileimg;

					$_SESSION['img']=$profileimg;
				}

				if($_FILES['coverfup']['name']!="")
				{

					$coverimg=uniqid().$_FILES['coverfup']['name'];
					copy($_FILES['coverfup']['tmp_name'], "C:/xampp/htdocs/mainProject/resources/user/assets/img/".$coverimg) or die("Cannot Upload Image");

					$temp["coverphoto"]=$coverimg;
				}

				$this->mp->updateBuyer($temp,$where);
				$this->session->set_flashdata('item1','item1-value');
				redirect('manageprofile');
			
		}
	}
?>