<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from askbootstrap.com/preview/grofarweb/fresh_vegan.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 07:38:56 GMT -->
   <head>
      <?php include_once("topuser.php")?>
      <style>
         body{
         background-color: #eee;
         }
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
            foreach($transactionInfo as $t)
            {
            ?>
         <div class="col-md-1"></div>
         <div class="col-md-3">
            <div class="container mt-5 d-flex justify-content-center">
               <div class="card p-4 mt-3">
                  <div class="first d-flex justify-content-between align-items-center mb-3">
                     <div class="info">
                        <span class="d-block name">Order Id- <?=$t->transactionid?></span>
                        <br>
                     </div>
                     <img src="https://i.imgur.com/NiAVkEw.png" width="40"/>
                  </div>
                  <div class="detail">
                     <span class="d-block new mb-1">Your order has been dispatched. we are delivering you order.</span>
                  </div>
                  <hr>
                  <div class="text">
                     <span class="text" >Shipping Address</span>
                  </div>
                  <span class="d-block new mb-1"><?=$t->shippingaddress?></span>
                  <br>
                  <div class="  money d-flex flex-row mt-2 align-items-center">
                     <img src="https://i.imgur.com/ppwgjMU.png" width="20" />
                     <span class="ml-2"><?=$t->amount?></span> 
                     <br>
                  </div>
                  <div class="last d-flex align-items-center mt-3">
                     <a href="<?=site_url('auctioninfo/index/'.$t->auctionid)?>"><span style="font-size:12px;" class="address-line">VIEW AUCTION INFO</span></a>
                  </div>
                  <div class="last d-flex align-items-center mt-3">     
                    <?php
                     if(isset($_SESSION['review'.$t->transactionid]))
                     {
                      
                    ?>
                     <span style="font-size:12px;color:green;"  class="d-block new mb-1">REVIEWED SUCCESFULLY..!!</span>
               
                     <?php
                     }
                     else
                     {
                    ?>
                              <a  href="" data-toggle="modal" data-target="#myModal<?php echo $t->transactionid; ?>" data-id="<?php echo $t->farmerid; ?>"><span style="font-size:12px;color:green" class="address-line">REVIEW FARMER</span></a>
                   <?php
                     }
                    ?>
                  </div>
                  <div class="last d-flex align-items-center mt-3">
                  <?php
                     if(isset($_SESSION['report'.$t->transactionid]))
                     {
                    ?>  

                     <span style="font-size:12px" class="d-block new mb-1">REPORTED SUCCESFULLY..!!</span>   
                      
                          <?php
                     }
                     else
                     {
                    ?>
                           <a  href="" data-toggle="modal" data-target="#myModal2<?php echo $t->transactionid; ?>" data-id="<?php echo $t->farmerid; ?>"><span style="font-size:12px;color:red" class="address-line">REPORT</span></a>
                 <?php
                     }
                    ?>
                  </div>
               </div>
            </div>
         </div>
         <!-- modal form -->
            <form method="post" action="<?php echo site_url('buyerorderinfo/submit/'.$_SESSION['bid'].'/'.$t->farmerid.'/'.$t->transactionid); ?>">
               <div id="myModal<?php echo $t->transactionid; ?>" class="modal fade" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1" role="dialog">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h4 class="modal-title">Review Form <?=$t->transactionid?></h4>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >×</button>
                        </div>
                        <div class="modal-body" id="myModalBody">
                                 <div class="form-group">
                                    <label for="name">UserName</label>
                                    <input class="form-control" style="color:black" id="name" readonly name="name" type="text" value=" <?php
                                       foreach($buyerinfo as $b)
                                       {
                                          if($b->buyerid==$t->buyerid)
                                          {
                                            echo "$b->buyername";
                                          }
                                       }
                                       ?>" />
                                 </div>
                                 <div class="form-group">
                                    <label for="email">Email ID</label>
                                    <input class="form-control" style="color:black" id="email" readonly name="email" type="text" value=" <?php
                                       foreach($buyerinfo as $b)
                                       {
                                          if($b->buyerid==$t->buyerid)
                                          {
                                            echo "$b->email";
                                          }
                                       }
                                       ?>" />
                                 </div>
                                 <div class="form-group">
                                    <label for="rate">Rating</label>
                                    <select class="select-box"  class="form-control" style="color:black" id="rate" name="rate">
                                       <option value="1">1</option>
                                       <option value="1.5">1.5</option>
                                       <option value="2">2</option>
                                       <option value="2.5">2.5</option>
                                       <option value="3">3</option>
                                       <option value="3.5">3.5</option>
                                       <option value="4">4</option>
                                       <option value="4.5">4.5</option>
                                       <option value="5">5</option>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                       <label for="message">Review</label>
                                       <textarea class="form-control" id="message" style="color:black" required name="message" rows="4" placeholder="Review"></textarea>
                                 </div>
                                 <div id="alert-msg"></div>
                        </div>
                        <div class="modal-footer">
                           <input class="btn btn-default" id="submit" name="submit" type="submit" value="Confirm"/>
                           <input class="btn btn-default" type="button" data-dismiss="modal" value="Close" />
                        </div>
                     </div>
                  </div> 
               </div>       
            </form>
         

            <form method="post" action="<?php echo site_url('buyerorderinfo/submit2/'.$_SESSION['bid'].'/'.$t->farmerid.'/'.$t->transactionid); ?>">
               <div id="myModal2<?php echo $t->transactionid; ?>" class="modal fade" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1" role="dialog">
                  <div class="modal-dialog">
                       <div class="modal-content">

                           <div class="modal-header">
                              <h4 class="modal-title">Report Form</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >×</button>
                           </div>

                           <div class="modal-body" id="myModalBody2">
                                 <div class="form-group">
                                    <label for="name1">UserName</label>
                                    <input class="form-control" style="color:black" id="name1" readonly name="name1" type="text" value=" <?php
                                       foreach($buyerinfo as $b)
                                       {
                                          if($b->buyerid==$t->buyerid)
                                          {
                                            echo "$b->buyername";
                                          }
                                       }
                                       ?>" />
                                  </div>
                                 <div class="form-group">
                                    <label for="email1">Email ID</label>
                                    <input class="form-control" style="color:black" id="email1" readonly name="email1" type="text" value=" <?php
                                       foreach($buyerinfo as $b)
                                       {
                                          if($b->buyerid==$t->buyerid)
                                          {
                                            echo "$b->email";
                                          }
                                       }
                                       ?>" />
                                 </div>
                                 <div class="form-group">
                                    <label for="message1">Submit FeedBack</label>
                                    <textarea class="form-control" id="message1" style="color:black" required name="message1" rows="4" placeholder="Report"></textarea>
                                 </div>
                                 <div id="alert-msg"></div>
                              </div>
                              <div class="modal-footer">
                                 <input class="btn btn-default" id="submit1" name="submit1" type="submit" value="Confirm"/>
                                 <input class="btn btn-default" type="button" data-dismiss="modal" value="Close" />
                           </div>
                       </div>
                  </div>
               </div> 
           </form>    

          <?php
             }
            ?>
         </div>
      </section>
     
      <?php include_once("footeruser.php")?>
      <?php include_once("bottomuser.php")?>
      <script type="text-javascript"></script>
   </body>
</html>