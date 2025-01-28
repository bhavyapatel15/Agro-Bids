<html>
		<head>
			<?php include_once("topuser.php")?>
		</head>

		<body>
				<div>Do not press button..payment is processing</div>
				<a href="<?=site_url('buyerhome')?>">Back</a>
				<button id="rzp-button1" style="display:none">Pay Now</button>
				<script src="https://checkout.razorpay.com/v1/checkout.js" type="text/javascript"></script>

				<script type="text/javascript">
					var options={

					key:"<?php echo $key_id; ?>",
					amount:"<?php echo $order['amount'];?>",
					currency:"INR",
					name:"AgroBids Razor Pay",
					description:"Test Transaction",
					image:"<?=base_url('resources/user/assets/logo.png')?>",
					order_id:"<?php echo $order['id'];?>",
					callback_url:"<?=site_url('transaction/paymentStatus/'.$order['amount'].'/'.$bidid.'/'.$auctionid.'/'.$buyerid.'/'.$street1.'/'.$street2.'/'.$price.'/'.$farmerid[0]->farmerid.'/'.$city.'/'.$state)?>",
					prefill:{

						"name":"<?php echo $buyername;?>",
						"email":"<?php echo $email;?>",
						"contact":"<?php echo $contact;?>"
					},
					notes:{
						"address":"AgroBids Corporate Office"
					},
					theme:{
						"color":"#3399cc"
					}
				};

				var rzp1=new Razorpay(options);
				document.getElementById('rzp-button1').onclick=function(e){
					rzp1.open();
					e.preventDefault();
				}
				document.getElementById('rzp-button1').click();
				</script>

				<?php include_once("bottomuser.php")?>

	</body>
</html>