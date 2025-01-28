<?php
    class Addsubcategory extends CI_Controller
	{ 
		public function index($categoryid)
		{
            $temp=["categoryid"=>$categoryid];
            $this->load->view('admin/addsubcategory',$temp);
        }
        
    }
    
?>