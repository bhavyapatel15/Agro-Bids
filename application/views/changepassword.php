<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from askbootstrap.com/preview/grofarweb/fresh_vegan.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 07:38:56 GMT -->
   <head>
     <?php include_once("topuser.php")?>
   </head>

   <body>
    
      <div class="bg-white shadow-sm osahan-main-nav">

      <?php include_once("navuser.php")?>
      
      <section class="py-4 osahan-main-body">
             <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div class="osahan-account bg-white rounded shadow-sm overflow-hidden">
                     <div class="p-4 profile text-center border-bottom">
                        <img src="<?=base_url('resources/user/assets/img/'.$_SESSION['img'])?>" class="img-fluid rounded-pill">
                        <h6 class="font-weight-bold m-0 mt-2">   <?php

                            if(isset($_SESSION['fid']))
                            {
                               echo "Farmer";
                            }
                            else
                            {
                               echo "Buyer";
                            }

                           ?></h6>
                        <p class="small text-muted m-0"></p>
                     </div>
                     <div class="account-sections">
                        <ul class="list-group">
                           <a class="text-decoration-none text-dark">
                              <li class="border-bottom bg-white d-flex align-items-center p-3">
                                 <i class="icofont-user osahan-icofont bg-danger"></i>My Account
                                 <span class="badge badge-success p-1 badge-pill ml-auto"><i class="icofont-simple-right"></i></span>
                              </li>
                           </a>
                       
                    
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8 p-4 bg-white rounded shadow-sm">
                   <h4 class="mb-4 profile-title">Change Password</h4>
                  <div id="change_password">
                     <div class="p-0">
                        <form action="<?=site_url('changepassword/changePass')?>" method="post">
                           <div class="form-group">
                              <label for="exampleInputOLDPassword1">Old Password</label>
                              <input type="password" name="txtold" placeholder="Enter Old Password" required class="form-control" id="exampleInputOLDPassword1">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputNEWPassword1">New Password</label>
                              <input type="password" name="txtnew" placeholder="Enter New Password" required class="form-control" id="exampleInputNEWPassword1">
                           </div>
                           <div class="form-group">
                              <p style="color:red">
                                <?php
                                     if(isset($err))
                                     {
                                          echo $err;
                                     }
                                ?>
                              </p> 
                           </div>
                           <div class="text-center">
                              <button type="submit" class="btn btn-success btn-block btn-lg">Save Changes</button>
                           </div>
                        </form>
                     </div>
                  </div>

            </div>
         </div>
      </section>
     
      <?php include_once("footeruser.php")?>
     
      <?php include_once("bottomuser.php")?>
   </body>
  
</html>