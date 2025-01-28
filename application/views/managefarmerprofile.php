<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from askbootstrap.com/preview/grofarweb/fresh_vegan.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 07:38:56 GMT -->
   <head>
     <?php include_once("topuser.php")?>
   </head>

   <body>
         <?php include_once("navuser.php")?>

     
            <div class="hero-wrap hero-bread" style="background-image: url('<?=base_url('resources/user/assets/')?>images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>Product Single</span></p>
            <h1 class="mb-0 bread">Product Single</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="py-4 osahan-main-body">
             <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div class="osahan-account bg-white rounded shadow-sm overflow-hidden">
                     <div class="p-4 profile text-center border-bottom">
                        <img src="<?=base_url('resources/user/assets/img/'.$_SESSION['img'])?>" class="img-fluid rounded-pill">
                        <h6 class="font-weight-bold m-0 mt-2">
                           <?php

                            if(isset($_SESSION['fid']))
                            {
                               echo "Farmer";
                            }
                            else
                            {
                               echo "Buyer";
                            }

                           ?>
                              
                           </h6>
                        <p class="small text-muted m-0"></p>
                     </div>
                     <div class="account-sections">
                        <ul class="list-group">
                           <a href="<?=site_url('managefarmerprofile')?>" class="text-decoration-none text-dark">
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
                  <h4 class="mb-4 profile-title">My account</h4>
                  <div id="edit_profile">
                     <div class="p-0">
                        <form action="<?=site_url('manageprofile/updatefarmer/'.$profileInfo[0]->userid.'/'.$profileInfo[0]->farmerid)?>" method="post" enctype="multipart/form-data">
                           <?php
                                 foreach($profileInfo as $p)
                                 {
                           ?>
                                 <div class="form-group">
                                    <label for="exampleInputName1">Farmer Name</label>
                                    <input type="text" class="form-control" name="txtname" required value="<?=$p->farmername?>">
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputNumber1">Contact Number</label>
                                    <input type="number" class="form-control" name="txtcontact" required value="<?=$p->contact?>">
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" name="txtemail" required value="<?=$p->email?>">
                                 </div>
                                  <div class="form-group">
                                    <label for="exampleInputNumber1">Bio</label>
                                    <textarea class="form-control" rows="3" name="txtbio" required cols="10" ><?=$p->bio?></textarea>
                                 </div>
                                  <div class="form-group">
                                    <label for="exampleInputNumber1">Select City</label>
                                    <select required name="city" class="form-control" style="color:black">
                                          <?php
                                          foreach($cityInfo as $c)
                                          {
                                          ?>
                                                <option value="" hidden>Select City</option>
                                                <option value="<?=$c->cityid?>"=><?=$c->cityname?></option>
                                          <?php
                                            }
                                          ?>

                                  </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputNumber1">Select Profile Photo(Optional)</label>
                                    <input type="file" class="form-control"  name="profilefup" >
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputNumber1">Select Cover Photo(Optional)</label>
                                    <input type="file" class="form-control"  name="coverfup" >
                                 </div>
                                 <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-block btn-lg">Save Changes</button>
                                 </div>
                            <?php
                               }
                           ?>
                        </form>

                     </div>
                     <div class="additional mt-3">
                        <div class="change_password mb-1">
                           <a href="<?=site_url('changepassword')?>" class="p-3 btn-light border btn d-flex align-items-center">Change Password
                           <i class="icofont-rounded-right ml-auto"></i></a>
                        </div>
                      
                     </div>
                  </div>
               </div>
            </div>
         </div>
       </section> 
      <?php include_once("footeruser.php")?>
     
      <?php include_once("bottomuser.php")?>
       <script> 
      <?php 
           if($this->session->flashdata('item'))
           { 
        ?> 
            alert('Password Changed Successfull..!!');
      <?php
         } 
       ?> 
    </script> 
     <script> 
      <?php 
           if($this->session->flashdata('item1'))
           { 
        ?> 
            alert('Changes Successfull..!!');
      <?php
         } 
       ?> 
    </script> 
   </body>
  
</html>