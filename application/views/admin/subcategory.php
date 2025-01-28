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
                  <h6 class="mb-1">Sub Category</h6>
                  <p class="text-sm">You can Manage Sub Categories.</p>
               </div>
               <div class="card-body p-3">
                  <?php
                     foreach($categoryinfo as $c)
                     {     
                     ?>
                     <div class="row mb-5">
                        <h3><?=$c->categoryname?></h3>
                        <?php
                           foreach($subcategoryInfo as $sc)
                           {
                             if($sc->categoryid==$c->categoryid)
                             {   
                           ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card card-blog card-plain">
                                 <div class="position-relative" style="min-height: 220px;max-height: 220px;">
                                    <img src="<?=base_url('resources/admin/assets/images/'.$sc->image)?>" style="height:100%;width:100%" >
                                 </div>
                              <div class="card-body px-1 pb-0">
                                 <h5>
                                    <?=$sc->subcategoryname?>
                                 </h5>
                                 <div class="d-flex align-items-center justify-content-between">
                                    <a href='<?=site_url("admin/subcategory/loadEdit/$sc->subcategoryid")?>'>
                                    <button type="button" class="btn btn-outline-primary btn-sm mb-0" >edit</button>
                                    </a>
                                    </a>
                                    <a href='<?=site_url("admin/subcategory/removesubCategory/$sc->subcategoryid") ?>'>
                                    <button type="button" class="btn btn-outline-primary btn-sm mb-0">delete</button>
                                    </a>
                                    <div class="avatar-group mt-2"> 
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php                            
                           }
                          }
                        ?>                   
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                           <div class="card h-100 card-plain border">
                              <div class="card-body d-flex flex-column justify-content-center text-center">
                                 <a href="<?=site_url('admin/Addsubcategory/index/'.$c->categoryid)?>">
                                    <i class="fa fa-plus text-secondary mb-3"></i>
                                    <h5 class=" text-secondary"> New Sub Category </h5>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
             
                     <?php 
                        }
                        ?>
               </div>
            </div>
         </div>
         
         <?php include_once('footer.php')?>
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