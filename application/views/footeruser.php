  <footer class="ftco-footer ftco-section">
      <div class="container">
         <div class="row">
            <div class="mouse">
                  <a href="#" class="mouse-icon">
                     <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                  </a>
               </div>
         </div>
        <div class="row mb-5">
          <div class="col-md-5">
            <div class="ftco-footer-widget mb-4 pr-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p class="text-justify ">AgroBids is a B2B Agri-Tech platform , where farmers can sell their products directly to all buyers through auction process .Farmers can sell their products in lot to different types of buyer such as an Organization , Individual and Restaurant / Kitchen .The vision of creating this website is to provide marketing platform for farmers ensuring sale at a reasonable price by creating an auction .Buyers can buy products efficiently based on their requirement such as type of product,quantity,affordable price.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
   
              </ul>
            </div>
          </div>
        
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <div class="d-flex">
                 <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                   <li> <?php
                          if(isset($_SESSION['fid']))
                          {
                        ?> 
                          <a href="<?=site_url('farmermyauctions')?>" class="py-2 d-block">My Auctions</a>
                   <?php
                           }
                           else
                           {
                        ?>  
                              <a href="<?=site_url('Buyerallauctions')?>" class="py-2 d-block">All Auctions</a>
                        <?php
                           }
                           
                       ?>  </li>

                   <li> <?php
                          if(isset($_SESSION['fid']))
                          {
                        ?> 
                           <a href="<?=site_url('addauction')?>" class="py-2 d-block">Start New Auctions</a>
                      <?php
                           }
                           else
                           {
                        ?>  
                              <a href="<?=site_url('mybids/index/'.$_SESSION['bid'])?>" class="py-2 d-block">My Bids</a>
                        <?php
                           }
                           
                       ?>  </li>

                         <li> <?php
                          if(isset($_SESSION['fid']))
                          {
                        ?> 
                           <a href="<?=site_url('farmerpendingauctions')?>" class="py-2 d-block">Pending Auctions</a>
                      <?php
                           }
                           else
                           {
                        ?>  
                              <a href="<?=site_url('Auctionwon')?>" class="py-2 d-block">Auctions Won</a>
                        <?php
                           }
                           
                       ?>  </li>

                    <li> <?php
                          if(isset($_SESSION['fid']))
                          {
                        ?> 
                           <a href="<?=site_url('farmercompletedauction')?>" class="py-2 d-block">Completed Auctions</a>
                      <?php
                           }
                           else
                           {
                        ?>  
                              <a href="<?=site_url('farmerprofile')?>" class="py-2 d-block">View Farmer Profile</a>
                        <?php
                           }
                           
                       ?>  </li>

                 </ul>
                 <ul class="list-unstyled">
                    <li> <?php
                          if(isset($_SESSION['fid']))
                          {
                        ?> 
                           <a href="<?=site_url('manageauction')?>" class="py-2 d-block">Manage Auctions</a>
                      <?php
                           }
                           else
                           {
                        ?>  
                              <a href="<?=site_url('buyerorderinfo')?>" class="py-2 d-block">My Orders</a>
                        <?php
                           }
                           
                       ?>  </li>
                     <li> <?php
                          if(isset($_SESSION['fid']))
                          {
                        ?> 
                           <a href="<?=site_url('buyerprofile')?>" class="py-2 d-block">View Buyer Profile</a>
                      <?php
                           }
                           else
                           {
                        ?>  
                              <a href="<?=site_url('manageprofile')?>" class="py-2 d-block">Manage Profile</a>
                        <?php
                           }
                           
                       ?>  </li>
                       <li> <?php
                          if(isset($_SESSION['fid']))
                          {
                        ?> 
                           <a href="<?=site_url('farmertransactions')?>" class="py-2 d-block">My Transactions</a>
                      <?php
                           }
                          
                        ?>  
                         </li>
                            <li> <?php
                          if(isset($_SESSION['fid']))
                          {
                        ?> 
                           <a href="<?=site_url('manageprofile')?>" class="py-2 d-block">Manage Profile</a>
                      <?php
                           }
                          
                        ?>  
                         </li>
                 </ul>
               </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
               <h2 class="ftco-heading-2">Contact Us.!</h2>
               <div class="block-23 mb-3">
                 <ul>
                   <li><span class="icon icon-map-marker"></span><span class="text">101 Green Park Avenue,Adajan, Surat, Gujarat, India </span></li><br>
                   <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 7575038760</span></a></li><br>
                   <li><a href="#"><span class="icon icon-envelope"></span><span class="text">agrobids101@yahoo.com</span></a></li>
                 </ul>
               </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    