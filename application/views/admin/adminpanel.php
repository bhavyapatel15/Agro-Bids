
<!DOCTYPE html>

<html lang="en">

<head>
  <?php include_once('head.php')?>
 
</head>

<body class="g-sidenav-show  bg-gray-100">
  <?php include_once('side.php')?>
        
 
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
   <?php include_once('navbar.php')?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Sales</p>
                    <h5 class="font-weight-bolder mb-0">
                      Rs  <?php
                           echo $transactionInfo[0]->amount;                         
                      ?>
                      <span class="text-success text-sm font-weight-bolder"></span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div>
                  <img src="<?=base_url('resources/admin/assets/images/')?>money.png" height="50px"class="navbar-brand-img h-100px" alt="main_logo">
                    <i ></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Users</p>
                    <h5 class="font-weight-bolder mb-0">
                      <?php
                           echo count($userInfo);                         
                      ?>
                      <span class="text-success text-sm font-weight-bolder"></span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div >
                  <img src="<?=base_url('resources/admin/assets/images/')?>glob.png" height="50px"class="navbar-brand-img h-100px" alt="main_logo">
                    <i ></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Farmers</p>
                    <h5 class="font-weight-bolder mb-0">
                        <?php
                           echo count($farmerInfo);                         
                      ?>
                      <span class="text-danger text-sm font-weight-bolder"></span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div >
                  <img src="<?=base_url('resources/admin/assets/images/')?>client.jpg" height="50px"class="navbar-brand-img h-100px" alt="main_logo">
                    <i></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Buyers</p>
                    <h5 class="font-weight-bolder mb-0">
                       <?php
                           echo count($buyerInfo);                         
                      ?>
                      <span class="text-success text-sm font-weight-bolder"></span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div >
                  <img src="<?=base_url('resources/admin/assets/images/')?>sales.jpg" height="50px"class="navbar-brand-img h-100px" alt="main_logo">
                    <i ></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">
                    <p class="mb-1 pt-2 text-bold">Built For Farmers</p>
                    <h5 class="font-weight-bolder">Buy From Local Farmers</h5>
                    <p class="mb-5">Buy Fresh And High Quality Products From Local Farmers Through Process Of Auction.</p>
                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="<?=site_url('admin/Farmers')?>">
                     Visit Farmers
                      <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                  <div class=" border-radius-lg h-100">
                    
                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                      <img class="w-100 position-relative z-index-2 pt-4" src="<?=base_url('resources/admin/assets/images/')?>farmer2.jpg" alt="rocket">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card h-100 p-3">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('<?=base_url("resources/admin/assets/images/")?>agro1.jpg');">
              <span class="mask bg-gradient-dark"></span>
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                <h5 class="text-white font-weight-bolder mb-4 pt-2">Top Auctions</h5>
                <p class="text-white">Farmers can Start Auction For Their Products And Sell Them at a Reasonable Price.</p>
                <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto"  href="<?=site_url('admin/Auctions')?>">
                 See Auctions
                  <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-lg-5">
          <div class="card h-100 p-3">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('<?=base_url("resources/admin/assets/images/")?>agro5.jpg');">
              <span class="mask bg-gradient-dark"></span>
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                <h5 class="text-white font-weight-bolder mb-4 pt-2">Top Bids</h5>
                <p class="text-white">Buyers Can Place Bids On Auctions of Products They Like To Buy.</p>
                <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto"  href="<?=site_url('admin/Bids')?>">
                 See Bids
                  <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
             <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">
                    <p class="mb-1 pt-2 text-bold">Built For Buyers</p>
                    <h5 class="font-weight-bolder">Sell To Local Hotels</h5>
                    <p class="mb-5">Buyers Can Buy Products in Lot easily By Placing Bids on Auctions.</p>
                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="<?=site_url('admin/Buyers')?>">
                     Visit Buyers
                      <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                  <div class=" border-radius-lg h-100">
                    
                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                      <img class="w-100 position-relative z-index-2 pt-4" src="<?=base_url('resources/admin/assets/images/')?>agro3.jpeg" alt="rocket">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <?php include_once('footer.php')?>
    </div>
  </main>
  <?php include_once('bottom.php')?>

    <script> 
      <?php 
           if($this->session->flashdata('item'))
           { 
        ?> 
            alert('Login Successfull..!!'); 
      <?php
         } 
       ?> 
    </script> 
  
</html>