<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include_once("topuser.php")?>
      <style>
         @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600&display=swap');
         img {
         width: 100%;
         border-radius: 15px;
         display: block;
         }
         a {
         color: inherit;
         }
         h1 {
         font: var(--var-heading);
         color: var(--var-lightest);
         padding: 1.2em 0;
         }
         h4 {
         font: var(--var-heading);
         color: var(--var-lightest);
         padding: 0.1em 0;
         }
         h2 {
         font: var(--var-small-heading);
         color: var(--var-lightest);
         /* padding on .coin-base */
         }
         p {
         font: var(--var-para);
         color: var(--var-soft-blue);
         }
         /* 
         =====================
         Classes
         =====================
         */
         /* LAYOUT */
         .card-container {
         width: 100%;
         max-width: 400px;
         margin: 2em auto;
         background-color: var(--var-card-dark);
         border-radius: 15px;
         margin-bottom: 1rem;
         padding: 2rem;
         }
         div.flex-row {
         display: flex;
         justify-content: space-between;
         align-items: center;
         }
         div.coin-base, .time-left, .card-attribute {
         display: flex;
         align-items: center;
         padding: 1em 0;
         }
         .card-attribute {
         padding-bottom: 1.5em;
         border-top: 2px solid var(--var-line-dark);
         }
         a.hero-image-container {
         position: relative;
         display: block;
         }
         /* Details */
         @media (min-width:400px) {
         }
         .small-image {
         width: 1.2em;
         margin-right: .5em;
         }
         .small-avatar {
         width: 2em;
         border-radius: 200px;
         outline: 2px solid white;
         margin-right: 1.4em;
         }
         div.attribution {
         margin: 0 auto;
         width: 100%;
         font: var(--var-para);
         text-align: center;
         padding: 1.5em 0 4em 0;
         color: var(--var-line-dark);
         }
         .attribution a {
         color: var(--var-soft-blue);
         }
         @media (min-width:600px) {
         body {
         font-size: 15px;
         }
         }
         @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700');
         *
         {
         -webkit-box-sizing: border-box;
         box-sizing: border-box;
         margin: 0;
         padding: 0;
         }
         .product-card {
         width: 380px;
         position: relative;
         box-shadow: 0 2px 7px #dfdfdf;
         margin: 50px auto;
         background: #fafafa;
         }
         .badge {
         position: absolute;
         left: 0;
         top: 20px;
         text-transform: uppercase;
         font-size: 13px;
         font-weight: 700;
         background: red;
         color: #fff;
         padding: 3px 10px;
         }
         .product-tumb {
         display: flex;
         align-items: center;
         justify-content: center;
         height: 300px;
         padding: 50px;
         background: #f0f0f0;
         }
         .product-tumb img {
         max-width: 100%;
         max-height: 100%;
         }
         .product-details {
         padding: 30px;
         }
         .product-catagory {
         display: block;
         font-size: 12px;
         font-weight: 700;
         text-transform: uppercase;
         color: #ccc;
         margin-bottom: 18px;
         }
         .product-details h4 a {
         font-weight: 500;
         display: block;
         margin-bottom: 18px;
         text-transform: uppercase;
         color: #363636;
         text-decoration: none;
         transition: 0.3s;
         }
         .product-details h4 a:hover {
         color: #fbb72c;
         }
         .product-details p {
         font-size: 15px;
         line-height: 22px;
         margin-bottom: 18px;
         color: #999;
         }
         .product-bottom-details {
         overflow: hidden;
         border-top: 1px solid #eee;
         padding-top: 20px;
         }
         .product-bottom-details div {
         float: left;
         width: 50%;
         }
         .product-price {
         font-size: 18px;
         color: #fbb72c;
         font-weight: 600;
         }
         .product-price small {
         font-size: 80%;
         font-weight: 400;
         text-decoration: line-through;
         display: inline-block;
         margin-right: 5px;
         }
         .product-links {
         text-align: right;
         }
         .product-links a {
         display: inline-block;
         margin-left: 5px;
         color: #e1e1e1;
         transition: 0.3s;
         font-size: 17px;
         }
         .product-links a:hover {
         color: #fbb72c;
         }
      </style>
   </head>
   <body>
      <?php include_once("navuser.php")?>
      <div class="bg-white shadow-sm osahan-main-nav">
         <section class="py-4 osahan-main-body">
               <div class="container">
                  <h5 class="mt-3 mb-3" align="center" style="color:black;font-size: 25px;font-family: ui-monospace;">Auction Details</h5>
                  <br>
                  <div class="row">
                     <?php 
                        foreach($auctionInfo as $a)
                        {           
                        ?>
                     <div class="card-container">
                        <?php 
                           if($a->status==3)
                           {
                           ?>
                        <h5 class="mt-3 mb-3" align="center" style="color:red;font-size: 25px;font-family: ui-monospace;">Auction Completed</h5>
                        <?php 
                           }
                           elseif($a->status==2)
                           {
                           ?>
                        <h5 class="mt-3 mb-3" align="center" style="color:red;font-size: 25px;font-family: ui-monospace;">Payment Pending.!!</h5>
                        <?php      
                           }
                           ?>    
                        <a href="/" class="hero-image-container">
                        <img class="hero-image" src="<?=base_url('resources/admin/assets/images/'.$a->image)?>" />
                        </a>
                        <main class="main-content">
                           <h1 align="center"><a class="text-dark font-weight-bold"><?=$a->subcategoryname?></a></h1>
                           <h4><a class="text-dark font-weight-bold"><?=$a->title?></a></h4>
                           <p class="text-dark font-weight-bold"><?=$a->des?></p>
                           <div class="flex-row">
                              <div class="coin-base">
                                 <img src="<?=base_url('resources/user/assets/img/rupees.png')?>" class="small-image"/>
                                 <h2 class="text-dark font-weight-bold">Rs <?=$a->baseprice?></h2>
                              </div>
                              <div class="time-left">
                                 <p class="text-dark font-weight-bold"><?=$a->qty?> <?=$a->type?></p>
                              </div>
                           </div>
                        </main>
                        <div class="card-attribute">
                           <img src="<?=base_url('resources/user/assets/img/'.$a->profilephoto)?>" alt="avatar" class="small-avatar"/>
                           <p  class="text-dark">Created By<span><a href="#" class="text-dark font-weight-bold"> <?=$a->farmername?></a></span></p>
                        </div>
                        <?php
                           foreach($bidInfo as $b)
                           { 
                              if($b->status==3)
                              { 
                           ?>
                        <div class="card-attribute">
                           <img src="<?=base_url('resources/user/assets/img/'.$b->profilephoto)?>" alt="avatar" class="small-avatar"/>
                           <p class="text-dark">Sold To<span class="text-dark font-weight-bold"> <?=$b->buyername?></span></p>
                        </div>
                        <?php
                           }
                           elseif($b->status==2)
                           {
                           ?>
                        <div class="card-attribute">
                           <img src="<?=base_url('resources/user/assets/img/'.$b->profilephoto)?>" alt="avatar" class="small-avatar"/>
                           <p class="text-dark">Selected Bid<span class="text-dark font-weight-bold"> <?=$b->buyername?></span></p>
                        </div>
                        <?php               
                           }
                           }
                           ?>
                        <div class="card-attribute">
                           <img src="https://i.postimg.cc/prpyV4mH/clock-selection-no-bg.png" alt="clock" class="small-image"/>
                           <p class="text-dark">Start Date <span><a class="text-dark font-weight-bold" href="#"><?php echo date("d-m-Y", strtotime($a->auctionstartdt)) ?>
                              </a></span>
                           </p>
                        </div>
                        <div class="card-attribute">
                           <img src="https://i.postimg.cc/prpyV4mH/clock-selection-no-bg.png" alt="clock" class="small-image"/>
                           <p class="text-dark">End Date <span><a class="text-dark font-weight-bold" href="#"><?php echo date("d-m-Y", strtotime($a->auctionenddt)) ?></a></span></p>
                        </div>
                        <?php 
                           if($a->status==3)
                           {
                             foreach($bidInfo as $b)
                             {  
                               if($b->status==3)
                               {                                
                           ?>
                        <div class="card-attribute">
                           <p><span><a class=" font-weight-bold" style="color:springgreen;font-size: 16px;" href="<?=site_url('farmertransactions/getInfo/'.$a->auctionid)?>"><u>View Payment Details</u></a></span></p>
                        </div>
                        <?php 
                           }
                           }
                           }                                
                           ?>
                     </div>
                  </div>
                  <?php 
                     }        
                     ?>       
               </div>

               <div class="container">
                     <div class="row">
                           <?php 
                              if(count($bidInfo)>0)
                              { 
                                
                                 $i=1;
                                  foreach($bidInfo as $b)
                                  {            
                              ?>
                           <div class="col-md-1"></div>
                           <div class="col-md-5">
                              <form method="post" action="<?=site_url('farmermyauctions/completedauction/'.$bidInfo[0]->auctionid.'/'.$b->bidid)?>">
                                 <div class="product-card">
                                       <div class="badge"><?php 

                                           if($i==1)
                                           {
                                            echo "Latest Bid";
                                            $i++;
                                           }
                                         ?></div>
                                       <div class="product-tumb">
                                          <img class="hero-image" height="250px" width="150px" src="<?=base_url('resources/user/assets/img/'.$b->profilephoto)?>" >
                                       </div>
                                       <div class="product-details">
                                          <span class="product-catagory"></span>
                                          <h4><a href="<?=site_url('buyermoreinfo/index/'.$b->buyerid)?>"><?=$b->buyername?></a></h4>
                                          <div class="product-bottom-details">
                                             Bid Amount&nbsp&nbsp<span class="product-price"><?=$b->bidamount?></span>  
                                             <br>
                                             <hr>
                                             <?php 
                                                if($auctionInfo[0]->status==1)
                                                { 
                                                               
                                                ?>
                                             <input type="submit" name="btnsub" value="Select This Bid" class="btn btn-success">
                                             <?php 
                                                }            
                                                ?>
                                          </div>
                                       </div>
                                 </div>
                           </div>
                           <?php 
                              }
                              } 
                              else
                              {

                                       $date1=new DateTime($a->auctionenddt);
                                              $date2=new DateTime($a->auctionstartdt);

                                              $present = new DateTime();

                                          
                                     
                                              $interval=$date1->diff($present);
                                              $interval2=$present->diff($date2);
                               
                                     if($date2->format('d-m-y') <= $present->format('d-m-y'))
                                       {
                                          if($interval->format('%a')!=0)
                                                {
                                           
                              ?>
                           <div class="container-fluid">
                              <div class="row my-4">
                                 <div class="col-md-5"></div>
                                 <div class="col-md-6">
                                      <h4 class="mt-3 mb-3"  style="color:red;font-size: 25px;font-family: ui-monospace;">No Bids Yet..!!</h4>
                                 </div>
                              </div>
                          </div>
                           <?php
                               }    
                              }
                            }
                              ?>
                           </form>
                        </div>
                        <div class="col-md-1"></div>
                     </div>

               </div>
         </section>
      </div>
      <?php include_once("footeruser.php")?>
      <?php include_once("bottomuser.php")?>
   </body>
</html>