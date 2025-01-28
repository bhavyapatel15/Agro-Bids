
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
   <div class="col-12 mt-4">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-1">Category</h6>
              <p class="text-sm">You can Manage Categories.</p>
            </div>
            <div class="card-body p-3"  > 
              <div class="row" >
                         <?php 
                                foreach($categoryInfo as $c)
                                {           
                               ?>
                <div class="col-xl-3 col-md-6 mb-5" >
               
                  <div class="card card-blog card-plain" >
                    <div class="position-relative" style="min-height: 180px;max-height: 180px;">
           
                        <img src="<?=base_url('resources/admin/assets/images/'.$c->image)?>" style="height:100%;width:100%">
                      
                    </div>
                    <div class="card-body px-1 pb-0" style="margin-bottom:15px">
                      
                        <h5>
                        <?=$c->categoryname?>
                        </h5>
                   
                      
                      <div class="d-flex align-items-center justify-content-between">
                        <a href='<?=site_url("admin/category/loadEdit/$c->categoryid")?>'>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0" >Edit</button>
                                </a>
                        </a>
                        <a href='<?=site_url("admin/category/removeCategory/$c->categoryid") ?>'>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">Delete</button>
                        </a>
                        <div class="avatar-group mt-2">
                        </div>
                      </div>
                    </div>
                  </div>
                 
                </div>
                <?php 
                          }            
                    ?>    
                
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card h-100 card-plain border">
                    <div class="card-body d-flex flex-column justify-content-center text-center">
                      <a href="<?=site_url('admin/Addcategory')?>">
                        <i class="fa fa-plus text-secondary mb-3"></i>
                        <h5 class=" text-secondary"> New Category </h5>
                      </a>
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
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }  
  </script>
</body>

</html>