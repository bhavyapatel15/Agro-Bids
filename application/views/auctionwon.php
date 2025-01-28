<!DOCTYPE html>
<html lang="en">
  
   <head>
     <?php include_once("topuser.php")?>

     <style>
            .small-avatar {
    width: 4em;
    border-radius: 200px;
    outline: 2px solid white;
    margin-right: 1.4em;
}
     </style>

   </head>

   <body>
      <?php include_once("navuser.php")?>
      
       <div class="hero-wrap hero-bread" style="background-image: url('<?=base_url('resources/user/assets/')?>images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Our</a></span> <span>Trusted</span></p>
            <h1 class="mb-0 bread">Farmers</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="py-4 osahan-main-body">
         <div class="container">
            <h5 class="mt-3 mb-3 font-weight-bold" align="center" style="color:black;font-size: 25px;font-family: ui-monospace;">Auctions Won</h5>
               <br>
            <div class="row">
              <?php 

                      if(count($bidInfo)>0)
                      {
                        foreach($auctionInfo as $a)
                        {
                           if($a->status!=1)
                           {    
                            foreach($bidInfo as $b)
                            {
                              if($b->status!=1)
                              {
                                if($a->auctionid==$b->auctionid)
                                {
                                
                    ?>            
               <div class="col-lg-4" >
                  <div class="p-4 bg-white rounded shadow-sm">
                     <div class="pt-0">
                     <div class="row">
                         <div class="col-6">
                                <h2 class="font-weight-bold"><?=$a->subcategoryname?></h2>
                                
                         </div>
                         <div class="col-6 text-right">
                                 <img height="150px" width="150px"  src="<?=base_url('resources/admin/assets/images/'.$a->image)?>" class="img-fluid mx-auto shadow-sm rounded" alt="Responsive image" >
                           </div>

                      </div>          

                     </div>
                     <div class="pt-2">
                        <div class="row">
                           <div class="col-6">
                              <p class="font-weight-bold text-dark m-0"><?=$a->qty?> <?=$a->type?></p>
                           </div>
                           <br>
                           <div class="col-6 text-right">
                                
                           </div>
                        </div>
                     </div>

                     <div class="details">
                        <div class="pt-3 bg-white">
                           <div class="d-flex align-items-center">
                              <div class="btn-group osahan-radio btn-group-toggle">
                                    <img src="<?=base_url('resources/user/assets/img/'.$a->profilephoto)?>" alt="avatar" height="50px"  style="border-radius:30%;"class="small-avatar"/>
                                    Created By &nbsp<a href="<?=site_url('farmermoreinfo/index/'.$a->farmerid)?>"><b class="h6 text-dark m-0"><?=$a->farmername?></b></a>
                              </div>
                           </div>
                        </div>

                        <div class="pt-3">
                           <div class="d-flex align-items-center bg-white">
                                <p class="font-weight-bold text-dark m-0 d-flex align-items-center">
                                   Base Price &nbsp<b class="h6 text-dark m-0">Rs <?=$a->baseprice?></b>
                                </p>
                           
                           </div>
                           <br>
                           <p class="font-weight-bold text-dark mb-2">Auctions Details</p>
                           <p class="text-muted medium mb-0"><?=$a->des?></p>
                        </div>
                          <div class="pt-3">
                           <div class="d-flex align-items-center bg-white">
                                <p class="font-weight-bold text-dark m-0 d-flex align-items-center">
                                   Bid Amount &nbsp<b class="h6 text-dark m-0">Rs <?=$b->bidamount?></b>
                                </p>
                           
                           </div>
                           <br>
                           <p class="font-weight-bold mb-2 text-dark">Auctions Start Date</p>
                           <p class="text-muted medium mb-0"> <?php echo date("d-m-Y", strtotime($a->auctionstartdt)) ?></p>
                        </div>
                          <div class="pt-3">
                           <p class="font-weight-bold mb-2 text-dark">Auctions End Date</p>
                           <p class="text-muted medium mb-0"><?php echo date("d-m-Y", strtotime($a->auctionenddt)) ?></p>
                        </div>
                         <div class="pt-3">
                           <?php
                              if($a->status==2)
                              {                          
                           ?>
                           <form method="post" action="<?=site_url('transaction/index/'.$b->bidid.'/'.$b->buyerid)?>">
                                    <input type="submit" name="btnpay" value="Pay Now" class="btn btn-danger"/>
                           </form>
                            <?php
                             }
                             else
                             {
                           ?>
                              <span style="color:green;font-size:14px;">Payment Succesfull..!!</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                               <a href="<?=site_url('Buyerorderinfo/getinfo/'.$a->auctionid)?>"><span style="color:blue;font-size:14px;">View Order Info..!!</span></a>
                               <br><br>
                               
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
                    }
                    }
                    }
                  }  
                    else
                    {
                 ?> 

                    <h4 align="center"><i>No Auction Won By You Yet..!!</i></h4>

                     <p style="font-size: 20px;" align="center"><a href="<?=site_url('buyerallauctions')?>">Click Here To View All Auctions..</a></p>  
                      
                <?php         
                    }  
                 ?>
            <br>
          </div>
          </div>
      </section>

     
      <?php include_once("footeruser.php")?>
     
      <?php include_once("bottomuser.php")?>
   </body>
  
</html>