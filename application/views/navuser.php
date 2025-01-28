<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">

        <a class="navbar-brand" href="<?=site_url('buyerhome')?>">Agrobids</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
      
          <ul class="navbar-nav ml-auto">

                <li class="nav-item active">
                    <?php
                          if(isset($_SESSION['fid']))
                          {
                        ?> 
                <a href="<?=site_url('farmerhome')?>" class="nav-link">Home</a>
              <?php
                           }
                           else
                           {
                        ?>  
                              <a href="<?=site_url('buyerhome')?>" class="nav-link">Home</a>
                        <?php
                           }
                           
                       ?>    
            </li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Auction</a>
                    <?php
                          if(isset($_SESSION['fid']))
                          {
                        ?> 
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="<?=site_url('farmermyauctions')?>">My Auctions</a>
                    <a class="dropdown-item" href="<?=site_url('addauction')?>">Start New Auction</a>
                            <a class="dropdown-item"  href="<?=site_url('farmerpendingauctions')?>">Pending Auctions</a>
                            <a class="dropdown-item"  href="<?=site_url('farmercompletedauction')?>">Completed Auctions</a>
                            <a class="dropdown-item"  href="<?=site_url('manageauction')?>">Manage Auctions</a>
                        </div>
                  <?php
                           }
                           else
                           {
                        ?>     
                              <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="<?=site_url('Buyerallauctions')?>">All Auctions</a>
                    <a class="dropdown-item" href="<?=site_url('mybids/index/'.$_SESSION['bid'])?>">My Bids</a>
                            <a class="dropdown-item"  href="<?=site_url('Auctionwon')?>">Auctions Won</a>
                        </div>
                  <?php
                           }
                           
                         ?>     
                  </li>

                <li class="nav-item">
                   <?php
                          if(isset($_SESSION['fid']))
                          {
                        ?> 
                      <a href="<?=site_url('buyerprofile')?>" class="nav-link">View Buyer Profile</a>
                    <?php
                           }
                           else
                           {
                        ?>
                            <a href="<?=site_url('farmerprofile')?>" class="nav-link">View Farmer Profile</a>

                          <?php
                           }
                           
                         ?>   

                </li>

                 <li class="nav-item">
                   <?php
                          if(isset($_SESSION['fid']))
                          {
                        ?> 
                      <a href="<?=site_url('farmertransactions')?>" class="nav-link">My Transactions</a>
                    <?php
                           }
                           else
                           {
                        ?>
                            <a href="<?=site_url('buyerorderinfo')?>" class="nav-link">Orders</a>

                          <?php
                           }
                           
                         ?>   

                </li>
                
                 <li class="nav-item">

                    <div class="dropdown d-flex" >
                        <br>
                          <img  src="<?=base_url('resources/user/assets/img/'.$_SESSION['img'])?> " height="45px" style="border-radius:50%" > 
                              <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown05">
                             <?php
                                  if(isset($_SESSION['bid']))
                                  {
                                ?>
                                    <a class="dropdown-item" href="<?=site_url('manageprofile')?>">Manage Profile</a>
                                    <a class="dropdown-item"  href="<?=site_url('Logout')?>">Logout</a>
                            <?php
                                   }
                                   else
                                   {
                                ?>
                                     <a class="dropdown-item" href="<?=site_url('manageprofile')?>">Manage Profile</a>
                                     <a class="dropdown-item" href="<?=site_url('viewreview')?>">View Reviews</a>
                                     <a class="dropdown-item"  href="<?=site_url('viewreport')?>">View Reports</a>
                                     <a class="dropdown-item"  href="<?=site_url('Logout')?>">Logout</a>
                           <?php
                             }
                           
                           ?>
                        </div>
                    </div>
                 </li> 
          </ul>
        </div>
      </div>
    </nav>