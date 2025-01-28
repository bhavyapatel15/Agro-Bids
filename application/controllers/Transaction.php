<?php

require APPPATH.'views/razorpay/Razorpay.php';
use Razorpay\Api\Api;


	class Transaction extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("TransactionM","tm");
		
		}

		public function index($bidid,$buyerid)
		{

			$temp=[
					"buyerinfo"=>$this->tm->getBuyerInfo($buyerid),
					"bidinfo"=>$this->tm->getBidInfo($bidid),
					"stateInfo"=>$this->tm->getStateInfo(),
					"cityinfo"=>$this->tm->getCityInfo()

			];
			$this->load->view("transaction",$temp);

		}	

		public function checkout($buyerid,$bidid,$auctionid)
		{
			
			$key_id='rzp_test_qzmNSd6A6YrGVf';
			$secret='CfrfmhTPDMNf0mZrpnqPnldQ';
			
			$price=$this->input->post('txtprice');

			$api=new Api($key_id,$secret);
			
			$order=$api->order->create([
				'receipt'=>'order_rcptid_11',
				'amount'=>$price.'00',
				'currency'=>'INR'
			]);
		    
		    $where=["auctionid"=>$auctionid];
		    
		    $data=[
		    	"buyerid"=>$buyerid,
		    	"bidid"=>$bidid,
		    	"auctionid"=>$auctionid,
		    	"buyername"=>$this->input->post('txtname'),
		    	"email"=>$this->input->post('txtemail'),
		    	"contact"=>$this->input->post('txtcontact'),
		    	"street1"=>$this->input->post('txtstreet1'),
		    	"street2"=>$this->input->post('txtstreet2'),
		    	"country"=>$this->input->post('txtcountry'),
		    	"city"=>$this->input->post('txtcity'),
		    	"state"=>$this->input->post('txtstate'),
		    	"price"=>$this->input->post('txtprice'),
		    	"key_id"=>$key_id,
		    	"secret"=>$secret,
		    	"order"=>$order,
		    	"farmerid"=>$this->tm->getFarmerId($where)
		    ];


		    $this->load->view('razorpay-checkout',$data);
		}

		public function paymentStatus($amount,$bidid,$auctionid,$buyerid,$street1,$street2,$price,$farmerid,$city,$state)
		{
			$razorpay_payment_id=$this->input->post('razorpay_payment_id');
			$razorpay_order_id=$this->input->post('razorpay_order_id');
			$razorpay_signature=$this->input->post('razorpay_signature');

			$secret='CfrfmhTPDMNf0mZrpnqPnldQ';

			$data=$razorpay_order_id . "|" . $razorpay_payment_id;
			$generated_signature=hash_hmac("sha256", $data, $secret);

			if($generated_signature==$razorpay_signature)
			{
				echo "Payment is Succesfull.."; 
			}
			else
			{
				echo "Payment Failed..!";
			}

			$temp=[
				"auctionid"=>$auctionid,
				"buyerid"=>$buyerid,
				"farmerid"=>$farmerid,
				"razororderid"=>$razorpay_order_id,
				"razorpaymentid"=>$razorpay_payment_id,
				"razorpaysignature"=>$razorpay_signature,
				"amount"=>$price,
				"shippingaddress"=>urldecode($street1.','.$street2.','.$city.','.$state)
			];

			$this->tm->insertData($temp);

			$where1=["bidid"=>$bidid];
			$where2=["auctionid"=>$auctionid];

			$newData1=["status"=>3];

			$newData2=[
				"assignedid"=>$buyerid,
				"status"=>3
			];

			$this->tm->editBidstatus($newData1,$where1);

			$this->tm->editAuctionstatus($newData2,$where2);

			echo "<script>alert('Payment Succesfull..!!');</script>";

			redirect("buyerhome");
		}

	}
?>