<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from askbootstrap.com/preview/grofarweb/fresh_vegan.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 07:38:56 GMT -->
   <head>
     <?php include_once("topuser.php")?>
     <style>
         
.card{
       background-color: #fff;
    width: 300px;
    border: none;
    border-radius: 16px;

}

.info{
      line-height: 19px;
}

.name{
   color: #4c40e0;
    font-size: 18px;
    font-weight: 600;
}

.order{
   font-size: 14px;
   font-weight: 400;
   color: #b7b5b5;
}
.detail{

   line-height:19px;
}

.summery{
      color: #d2cfcf;
    font-weight: 400;
    font-size: 13px;
}
   
}

.text{

   line-height:15px;
}
.new{

   color: #000;
   font-size: 14px;
   font-weight: 600;
}
.money{


   font-size: 14px;
   font-weight:500;
}
.address{

color: #d2cfcf;
   font-weight:500;
   font-size:14px;
}

.last{

   font-size: 10px;
   font-weight: 500;

}


.address-line{
   color: #4C40E0;
    font-size: 11px;
    font-weight: 700;
}
     </style>
   </head>

   <body>
    
      <div class="bg-white shadow-sm osahan-main-nav">

      <?php include_once("navuser.php")?>
      
      <section class="py-4 osahan-main-body">
      <div class="row">
         <?php
           if(count($transactionInfo)>0)
           {
            foreach($transactionInfo as $t)
            {
         ?>
         <div class="col-md-1"></div>
         <div class="col-md-3">
            <div class="container mt-5 d-flex justify-content-center">
                <div class="card p-4 mt-3">
                   <div class="first d-flex justify-content-between align-items-center mb-3">
                     <div class="info">
                         <span class="d-block name">Thank you, <?php

                            foreach($buyerinfo as $b)
                            {
                               if($b->buyerid==$t->buyerid)
                               {
                               ?>
                                    <a href="<?=site_url('buyermoreinfo/index/'.$b->buyerid)?>"><?=$b->buyername?></a>
                           <?php  
                               }
                            }
                         ?></span>
                         <br>
                         <span class="text">Order - <?=$t->transactionid?></span>
                          
                     </div>
                    
                      <img src="https://i.imgur.com/NiAVkEw.png" width="40"/>
                       

                </div>
                    <div class="detail">
                <span class="d-block new mb-1">Your order has been dispatched. we are delivering you order.</span>
                    </div>
                <hr>
                <div class="text">
                 <span class="text" >
                     Shipping Address
                 </span>
               </div>
              <span class="d-block new mb-1"><?=$t->shippingaddress?></span>
              <br>
                <div class="  money d-flex flex-row mt-2 align-items-center">
                  <img src="https://i.imgur.com/ppwgjMU.png" width="20" />
              
                  <span class="ml-2"><?=$t->amount?></span> 

                     </div>
                     <div class="last d-flex align-items-center mt-3">
                      <a href="<?=site_url('farmerauctioninfo/index/'.$t->auctionid)?>"><span class="address-line">VIEW AUCTION INFO</span></a>

                     </div>
              </div>
            </div>
         </div>
           <?php 
                     }
                                                          }
                                                           else
                                                          {

                                                           ?>
                                                           <section style="min-height:400px;width:100%">
                                                               <div class="container">
                                                                   <div class="row mt-5">
                                                                        <div class="col-md-3"></div>
                                                                        <div class="col-md-6">
                                                                            <h3 align="center"><i><u>No Transactions Yet..!!</u></i></h3>
                                                                        </div>
                                                                   </div>
                                                               </div>
                                                           </section>
                                                           <?php
                                                          }
                                                           ?>   
        </div>
      </section>
    
      <?php include_once("footeruser.php")?>
     
      <?php include_once("bottomuser.php")?>
   </body>
  
</html>