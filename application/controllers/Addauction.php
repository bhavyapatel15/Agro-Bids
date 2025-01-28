<?php

	class Addauction extends CI_Controller
	{

		public function __construct()
		{

			parent::__construct();
			$this->load->model("AddauctionM","am");

		}

		public function index()
		{

			$temp=[
				"auctionInfo"=>$this->am->getAllAuction(),
				"unitInfo"=>$this->am->getAllunits(),
				"subInfo"=>$this->am->getAllsubcategories(),
				"catInfo"=>$this->am->getAllcategories()
				
			];
			$this->load->view("addauction",$temp);
			
		}

		public function addAuction()
		 {
			
				$data=[
					"farmerid"=>$_SESSION['fid'],
					"title"=>$this->input->post('txttitle'),
					"subcategoryid"=>$this->input->post('sub'),
					"baseprice"=>$this->input->post('txtbprice'),
					"unitid"=>$this->input->post('unit'),
					"qty"=>$this->input->post('txtamount'),
					"des"=>$this->input->post('txtdes'),
					"auctionstartdt"=>$this->input->post('auctionstart'),
					"auctionenddt"=>$this->input->post('auctionend')
				];

				$this->am->insertauction($data);
				$this->session->set_flashdata('item','item-value');
				redirect("Farmermyauctions");
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