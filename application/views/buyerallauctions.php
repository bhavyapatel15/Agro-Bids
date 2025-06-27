<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from askbootstrap.com/preview/grofarweb/fresh_vegan.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 07:38:56 GMT -->
   <head>
     <?php include_once("topuser.php")?>
      <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
        .search input[type=text] {
          width: 350px;
          height: 25px;
          margin-right: 2px;
          border: none;
      }

      .search {
          float: right;

      }
          .search1 {
          float: left;

      }

      .search button {
          background-color: #0074D9;
          color: #f2f2f2;
          float: right;
          padding: 5px 10px;
          font-size: 12px;
          border: none;
          cursor: pointer;
      }
       .search1 button {
          background-color: #0074D9;
          color: #f2f2f2;
          float: left;
          padding: 5px 10px;
          font-size: 12px;
          border: none;
          cursor: pointer;
      }
     </style>
   </head>

   <body>
    
      <div class="bg-white shadow-sm osahan-main-nav">

      <?php include_once("navuser.php")?>
      
      <section class="py-4 osahan-main-body">
         <div class="container">
               <h5 class="mt-3 mb-3" align="center" style="color:black;font-size: 25px;font-family: ui-monospace;">All Auctions</h5>
               <br>

               <div class="row">
                  <div class="col-6"></div>
                  <div class="col-5">
                      <div class="search">
                           <form method="post" action="<?=site_url('Buyerallauctions/search')?>">
                               <input type="text" placeholder="Search Auctions By Name" required name="txtsearch">
                               <button name="btnsearch">
                                   <i class="fa fa-search" style="font-size: 18px;"></i>
                               </button >
                           </form>
                          
                       </div>
                  </div>
                  <div class="col-1">
                     <div class="search1">
                        <form method="post" action="<?=site_url('Buyerallauctions/reset')?>">
                               <button name="btnreset">
                                   <i class="fa fa-refresh" style="font-size: 18px;"></i>
                               </button>
                           </form>
                     </div>
                  </div>
               </div>

               <br>
               <br>
              <div class="row">
                <?php 
                if(count($auctionInfo)>0)
                {
                 foreach($auctionInfo as $a)
                 {           
                
                ?>
                     <div class="col-6 col-md-3 mb-3">
                     <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                           <a href="<?=site_url('Auctioninfo/index/'.$a->auctionid)?>" class="text-dark">
                            <!--<div class="member-plan position-absolute"><span class="badge m-3 badge-danger">      <?php

                                     if($a->status==3)
                                      {
                                          echo "Completed..!!";
                                      }
                                      elseif($a->status==2)
                                      {
                                         echo "Pending..!!";
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
                                                

                                                if($interval->format('%a')==0)
                                                {
                                                    echo "Time Over";
                                                }
                                                else
                                                {
                                                    echo $interval->format('%a')." days left.!!";
                                                }

                                              }

                                              elseif($date2->format('d-m-y') > $present->format('d-m-y'))
                                              {
                                                echo $interval2->format('%a')." days to start..!!";
                                              }  
                                        }  

                                    ?></span></div>-->
                              <div class="p-3">
                                 <img src="<?=base_url('resources/admin/assets/images/'.$a->image)?>" class="img-fluid item-img w-100 mb-3">
                                 <h6 align="center"><?=$a->subcategoryname?></h6>
                                 <div class="d-flex align-items-center">
                                       <h6 class="price m-0 text-success" align="center"><?=$a->title?></h6>
                                       <hr>
                                      
                                       <div class="collapse qty_show" id="collapseExample1">
                                          <div>
                                       
                                             <span class="ml-auto" href="#">
                                                <form id="myform" class="cart-items-number d-flex" method="POST" action="#">
                                                      <h6 class="price m-0 text-primary">Rs<?=$a->baseprice?></h6>
                                                      <h6 class="price m-0 text-primary"><?=$a->type?></h6>
                                                </form>
                                            </span>
                                         </div>
                                       </div>
                                 </div>
                             </div>
                         </a>
                     </div>
                  </div>
               </div>
                <?php 
                    }
                   }
                 ?>
            </div>
            <br>
         </div>
      </section>
      
      <?php include_once("footeruser.php")?>
     
      <?php include_once("bottomuser.php")?>
      <script>
     
      </script>
   </body>
  
</html>