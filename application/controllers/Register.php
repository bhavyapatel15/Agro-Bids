<?php

	class Register extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("RegisterM","rm");

		}
		public function index()
		{
			$temp=[
					"cityInfo"=>$this->rm->getAllCities()
				];

			$this->load->view("register",$temp);
		}

		public function register()
	    {
	    	if(isset($_REQUEST['btnbuyer']))
	    	{

	    		$type="buyer";

	    	
				$random=[

					"username"=>$this->input->post('txtbname'),
					"password"=>$this->input->post('txtbpwd'),
					"type"=>$type
				];

				$id=$this->rm->insertUser($random);

					$temp=[

					"userid"=>$id,    			
					"buyername"=>$this->input->post('txtbname'),
					"password"=>$this->input->post('txtbpwd'),
					"email"=>$this->input->post('txtbemail'),
					"cityid"=>$this->input->post('bcity'),
					"bio"=>$this->input->post('txtbbio'),
					"contact"=>$this->input->post('txtbcontact'),
					"street1"=>$this->input->post('bstreet1'),
					"street2"=>$this->input->post('bstreet2')
					
				];


				if($_FILES['bprofile']['name']!="")
				{

					$profileimg=uniqid().$_FILES['bprofile']['name'];
					copy($_FILES['bprofile']['tmp_name'], "C:/xampp/htdocs/mainProject/resources/user/assets/img/".$profileimg) or die("Cannot Upload Image");

					$temp["profilephoto"]=$profileimg;
				}

				if($_FILES['bcover']['name']!="")
				{

					$coverimg=uniqid().$_FILES['bcover']['name'];
					copy($_FILES['bcover']['tmp_name'], "C:/xampp/htdocs/mainProject/resources/user/assets/img/".$coverimg) or die("Cannot Upload Image");

					$temp["coverphoto"]=$coverimg;
				}

	    	
				
				$this->rm->insertBuyer($temp);
				$this->load->view("buyerlogin");
				
	    	}
	    	else
	    	{
	    		$type="farmer";


			     $random=[

					"username"=>$this->input->post('txtfname'),
					"password"=>$this->input->post('txtfpwd'),
					"type"=>$type
				];

				$id=$this->rm->insertUser($random);

				$temp=[

		    		"userid"=>$id,
					"farmername"=>$this->input->post('txtfname'),
					"password"=>$this->input->post('txtfpwd'),
					"email"=>$this->input->post('txtfemail'),
					"cityid"=>$this->input->post('fcity'),
					"bio"=>$this->input->post('txtfbio'),
					"contact"=>$this->input->post('txtfcontact'),
					"street1"=>$this->input->post('fstreet1'),
					"street2"=>$this->input->post('fstreet2')
			     ];

	    		
				if($_FILES['fprofile']['name']!="")
				{

					$profileimg=uniqid().$_FILES['fprofile']['name'];
					copy($_FILES['fprofile']['tmp_name'], "C:/xampp/htdocs/mainProject/resources/user/assets/img/".$profileimg) or die("Cannot Upload Image");

					$temp["profilephoto"]=$profileimg;
				}

				if($_FILES['fcover']['name']!="")
				{

					$coverimg=uniqid().$_FILES['fcover']['name'];
					copy($_FILES['fcover']['tmp_name'], "C:/xampp/htdocs/mainProject/resources/user/assets/img/".$coverimg) or die("Cannot Upload Image");

					$temp["coverphoto"]=$coverimg;
				}


				$this->rm->insertFarmer($temp);
				$this->load->view("farmerlogin");

	    	}


		 }
	}
?>