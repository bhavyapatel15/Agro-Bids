<?php

	class Manageauction extends CI_Controller
	{

		public function __construct()
		{

			parent::__construct();
			$this->load->model("ManageauctionM","ma");

		}

		public function index()
		{

			$id=$_SESSION['fid'];

			$temp=[
				"auctionInfo"=>$this->ma->getAllAuctions($id)

				
			];

			$this->load->view("manageauction",$temp);
		}


		public function removeauction($id)
		{
			$where=[
				"auctionid"=>$id
			];

			$this->ma->deleteauction($where);

			redirect("manageauction");
		}

		public function loadEdit($id)
		{
		
			$temp=[

					"aInfo"=>$this->ma->getAuctionByID($id),
					"isUpdate"=>true,
					"auctionInfo"=>$this->ma->getAllAuctions($_SESSION['fid']),
					"subinfo"=>$this->ma->getSubCategories(),
					"unitinfo"=>$this->ma->getUnit(),
					"catInfo"=>$this->ma->getAllcategories()
			];
			
			$this->load->view("manageauction",$temp);
		}

		public function updateauction($auctionid,$subcategoryid)
		{

				$newData=[
					"title"=>$this->input->post('txttitle'),
					"subcategoryid"=>$this->input->post('sub'),
					"baseprice"=>$this->input->post('txtbase'),
					"unitid"=>$this->input->post('unit'),
					"qty"=>$this->input->post('txtqty'),
					"des"=>$this->input->post('txtdes'),
					"auctionstartdt"=>$this->input->post('auctionstart'),
					"auctionenddt"=>$this->input->post('auctionend')				
				];		    
			
				$where1=["auctionid"=>$auctionid];
				$this->ma->updateauction($newData,$where1);
				$this->session->set_flashdata('item','item-value');
                redirect('manageauction');
			
		}

		public function getSubCats($cid)
		{
			$where["categoryid"]=$cid;
			$subcats=$this->am->getAllSubCatsById($where);
			foreach($subcats as $s)
			{
				?>
				<option value="<?=$s->subcategoryid?>"><?=$s->subcategoryname?></option>
				<?php
			}
		}

	}
?>