<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from askbootstrap.com/preview/grofarweb/product_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 07:38:56 GMT -->
   <head>
       <?php include_once("top2.php")?>
   </head>
   <body class="fixed-bottom-padding">
              <?php include_once("nav.php")?>
      <section class="py-4 osahan-main-body">
         <div class="container">

                <h5 class="mt-3 mb-3" align="center" style="color:black;font-size: 25px;font-family: ui-monospace;">MANAGE UNITS</h5>
               <div class="row">
                           <div class="col-sm-3 ps-0"></div>
                           <div class="col-sm-6 ps-0">
                              <br>
                                 <div class="testbox">
                                       <form method="post" enctype="multipart/form-data" action="<?php

                                       if(isset($isUpdate))
                                       {
                                          echo site_url('admin/units/editunit/'.$unitinfo[0]->unitid);
                                       }
                                       else
                                       {
                                          echo site_url('admin/units/addunit');
                                       }
                                    ?>">
                                          <div class="banner">
                                             
                                          </div>
                                          <div class="item">
                                             <br>
                                             <p style="color:black;font-size: 16px;font-family: ui-monospace;">Enter Unit Name</p>
                                             <div class="name-item">
                                                <input type="text" name="txtuname"  value="<?php

                                                   if(isset($isUpdate))
                                                   {
                                                      echo $unitinfo[0]->title;
                                                   }

                                                ?>"  />                    
                                             </div>
                                          </div>
                                         
                                          <div class="btn-block">
                                             <input type="submit" name="btnadd" class="btn btn-success" value='<?php

                                                   if(isset($isUpdate))
                                                   {
                                                      echo "Update unit";
                                                   }
                                                    else
                                                   {
                                                     echo "Add New unit";
                                                    }
                                               ?>'/>
                                          </div>
                                       </form>
                                 </div>
                           </div>                      
               </div>

               <div class="row">
                           <div class="col-sm-3 ps-0">
                           </div>

                           <div class="col-sm-6 ps-0">
                              <br>
                                         <table>
                                               <thead>
                                                 <tr>
                                                   <th>Unit Id</th>
                                                   <th>Unit Type</th>
                                                   <th>Operations</th>
                                                  
                                                  
                                                 </tr>
                                                 
                                               </thead>
                                               <tbody>

                                                      <?php
                                                            foreach($unitInfo as $u)
                                                            {
                                                      ?>
                                                       <tr>
                                                         <td><?=$u->unitid?></td>
                                                         <td><?=$u->title?></td>
                                                         <td>
                                                                <a align="center" href='<?=site_url("admin/units/removeunit/$u->unitid") ?>'>Delete</a>
                                                                <a align="center" href='<?=site_url("admin/units/loadEdit/$u->unitid")?>'>Update</a>
                                                         </td>                                                        
                                                       </tr>
                                                        <?php
                                                            }
                                                        ?>
                                                     
                                               </tbody>
                              </table>
                           </div>                      
               </div>
               <br>
               
         </div>
      </section>
      <nav id="main-nav">
         <ul class="second-nav">
            <li><a href="home.html"><i class="icofont-smart-phone mr-2"></i> Home</a></li>
            <li>
               <a href="#"><i class="icofont-login mr-2"></i> Authentication</a>
               <ul>
                  <li><a class="dropdown-item" href="signin.html">Sign In</a></li>
                  <li><a class="dropdown-item" href="signup.html">Sign Up</a></li>
                  <li><a href="verification.html">Verification</a></li>
               </ul>
            </li>
            <li><a class="dropdown-item" href="listing.html">Listing</a></li>
            <li><a class="dropdown-item" href="product_details.html">Detail</a></li>
            <li><a class="dropdown-item" href="picks_today.html">Trending</a></li>
            <li><a class="dropdown-item" href="recommend.html">Recommended</a></li>
            <li><a class="dropdown-item" href="fresh_vegan.html">Most Popular</a></li>
            <li><a class="dropdown-item" href="cart.html">Cart</a></li>
            <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
            <li><a class="dropdown-item" href="successful.html">Successful</a></li>
            <li>
               <a href="#"><i class="icofont-sub-listing mr-2"></i> My Order</a>
               <ul>
                  <li><a class="dropdown-item" href="my_order.html">My order</a></li>
                  <li><a class="dropdown-item" href="status_complete.html">Status Complete</a></li>
                  <li><a class="dropdown-item" href="status_onprocess.html">Status on Process</a></li>
                  <li><a class="dropdown-item" href="status_canceled.html">Status Canceled</a></li>
                  <li><a class="dropdown-item" href="review.html">Review</a></li>
               </ul>
            </li>
            <li>
               <a href="#"><i class="icofont-ui-user mr-2"></i> My Account</a>
               <ul>
                  <li><a class="dropdown-item" href="my_account.html">My account</a></li>
                  <li><a class="dropdown-item" href="promos.html">Promos</a></li>
                  <li><a class="dropdown-item" href="my_address.html">My address</a></li>
                  <li><a class="dropdown-item" href="terms_conditions.html">Terms & conditions</a></li>
                  <li><a class="dropdown-item" href="help_support.html">Help & support</a></li>
                  <li><a class="dropdown-item" href="help_ticket.html">Help ticket</a></li>
                  <li><a class="dropdown-item" href="signin.html">Logout</a></li>
               </ul>
            </li>
            <li>
               <a href="#"><i class="icofont-page mr-2"></i> Pages</a>
               <ul>
                  <li><a class="dropdown-item" href="verification.html">Verification</a></li>
                  <li><a class="dropdown-item" href="promos.html">Promos</a></li>
                  <li><a class="dropdown-item" href="promo_details.html">Promo Details</a></li>
                  <li><a class="dropdown-item" href="terms_conditions.html">Terms & Conditions</a></li>
                  <li><a class="dropdown-item" href="privacy.html">Privacy</a></li>
                  <li><a class="dropdown-item" href="terms%26conditions.html">Conditions</a></li>
                  <li><a class="dropdown-item" href="help_support.html">Help Support</a></li>
                  <li><a class="dropdown-item" href="help_ticket.html">Help Ticket</a></li>
                  <li><a class="dropdown-item" href="refund_payment.html">Refund Payment</a></li>
                  <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                  <li><a class="dropdown-item" href="signin.html">Sign In</a></li>
                  <li><a class="dropdown-item" href="signup.html">Sign Up</a></li>
                  <li><a class="dropdown-item" href="search.html">Search</a></li>
               </ul>
            </li>
            <li>
               <a href="#"><i class="icofont-link mr-2"></i> Navigation Link Example</a>
               <ul>
                  <li>
                     <a href="#">Link Example 1</a>
                     <ul>
                        <li>
                           <a href="#">Link Example 1.1</a>
                           <ul>
                              <li><a href="#">Link</a></li>
                              <li><a href="#">Link</a></li>
                              <li><a href="#">Link</a></li>
                              <li><a href="#">Link</a></li>
                              <li><a href="#">Link</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="#">Link Example 1.2</a>
                           <ul>
                              <li><a href="#">Link</a></li>
                              <li><a href="#">Link</a></li>
                              <li><a href="#">Link</a></li>
                              <li><a href="#">Link</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li><a href="#">Link Example 2</a></li>
                  <li><a href="#">Link Example 3</a></li>
                  <li><a href="#">Link Example 4</a></li>
                  <li data-nav-custom-content>
                     <div class="custom-message">
                        You can add any custom content to your navigation items. This text is just an example.
                     </div>
                  </li>
               </ul>
            </li>
         </ul>
         <ul class="bottom-nav">
            <li class="email">
               <a class="text-success" href="home.html">
                  <p class="h5 m-0"><i class="icofont-home text-success"></i></p>
                  Home
               </a>
            </li>
            <li class="github">
               <a href="cart.html">
                  <p class="h5 m-0"><i class="icofont-cart"></i></p>
                  CART
               </a>
            </li>
            <li class="ko-fi">
               <a href="help_ticket.html">
                  <p class="h5 m-0"><i class="icofont-headphone"></i></p>
                  Help
               </a>
            </li>
         </ul>
      </nav>
      <footer class="section-footer border-top bg-white">
         
         <section class="footer-main border-top pt-5 pb-4">
            <div class="container">
               <div class="row">
                  <aside class="col-md">
                     <h6 class="title">Products</h6>
                     <ul class="list-unstyled list-padding">
                        <li> <a href="listing.html" class="text-dark">Listing</a></li>
                        <li> <a href="product_details.html" class="text-dark">Detail</a></li>
                        <li> <a href="picks_today.html" class="text-dark">Trending</a></li>
                        <li> <a href="recommend.html" class="text-dark">Recommended</a></li>
                        <li> <a href="fresh_vegan.html" class="text-dark">Most Popular</a></li>
                     </ul>
                  </aside>
                  <aside class="col-md">
                     <h6 class="title">Checkout Process</h6>
                     <ul class="list-unstyled list-padding">
                        <li> <a href="cart.html" class="text-dark">Cart</a></li>
                        <li> <a href="cart.html" class="text-dark">Order Address</a></li>
                        <li> <a href="cart.html" class="text-dark">Delivery Time</a></li>
                        <li> <a href="cart.html" class="text-dark">Order Payment</a></li>
                        <li> <a href="checkout.html" class="text-dark">Checkout</a></li>
                        <li> <a href="successful.html" class="text-dark">Successful</a></li>
                     </ul>
                  </aside>
                  <aside class="col-md">
                     <h6 class="title">My Order</h6>
                     <ul class="list-unstyled list-padding">
                        <li> <a href="my_order.html" class="text-dark">My order</a></li>
                        <li> <a href="status_complete.html" class="text-dark">Status Complete</a></li>
                        <li> <a href="status_onprocess.html" class="text-dark">Status on Process</a></li>
                        <li> <a href="status_canceled.html" class="text-dark">Status Canceled</a></li>
                        <li> <a href="review.html" class="text-dark">Review</a></li>
                     </ul>
                  </aside>
                  <aside class="col-md">
                     <h6 class="title">My Account</h6>
                     <ul class="list-unstyled list-padding">
                        <li> <a class="text-dark" href="my_account.html"> My account</a></li>
                        <li> <a class="text-dark" href="promos.html"> Promos</a></li>
                        <li> <a class="text-dark" href="my_address.html"> My address</a></li>
                        <li> <a class="text-dark" href="terms_conditions.html"> Terms &amp; conditions</a></li>
                        <li> <a class="text-dark" href="help_support.html"> Help &amp; support</a></li>
                        <li> <a class="text-dark" href="help_ticket.html"> Help ticket</a></li>
                        <li> <a class="text-dark" href="signin.html"> Logout</a></li>
                     </ul>
                  </aside>
                  <aside class="col-md">
                     <h6 class="title">Extra Pages</h6>
                     <ul class="list-unstyled list-padding">
                        <li><a href="promo_details.html" class="text-dark"> Promo Details </a></li>
                        <li><a href="terms_conditions.html" class="text-dark"> Conditions </a></li>
                        <li><a href="help_support.html" class="text-dark"> Help Support </a></li>
                        <li><a href="refund_payment.html" class="text-dark"> Refund Payment </a></li>
                        <li><a href="faq.html" class="text-dark"> FAQ </a></li>
                        <li><a href="signin.html" class="text-dark"> Sign In </a></li>
                     </ul>
                  </aside>
               </div>
            </div>
         </section>
         <section class="footer-bottom border-top py-4">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <span class="pr-2">© 2020 Grofarweb</span>
                     <span class="pr-2"><a href="privacy.html" class="text-dark">Privacy</a></span>
                     <span class="pr-2"><a href="terms%26conditions.html" class="text-dark">Terms & Conditions</a></span>
                  </div>
                  <div class="col-md-6 text-md-right">
                     <a href><img src="img/appstore.png" height="30"></a>
                     <a href><img src="img/playmarket.png" height="30"></a>
                  </div>
               </div>
            </div>
         </section>
      </footer>
      <div class="modal fade right-modal" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header p-0">
                  <nav class="schedule w-100">
                     <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active col-5 py-4" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                           <p class="mb-0 font-weight-bold">Sign in</p>
                        </a>
                        <a class="nav-link col-5 py-4" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                           <p class="mb-0 font-weight-bold">Sign up</p>
                        </a>
                        <a class="nav-link col-2 p-0 d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                           <h1 class="m-0 h4 text-dark"><i class="icofont-close-line"></i></h1>
                        </a>
                     </div>
                  </nav>
               </div>
               <div class="modal-body p-0">
                  <div class="tab-content" id="nav-tabContent">
                     <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="osahan-signin p-4 rounded">
                           <div class="p-2">
                              <h2 class="my-0">Welcome Back</h2>
                              <p class="small mb-4">Sign in to Continue.</p>
                              <form action="https://askbootstrap.com/preview/grofarweb/verification.html">
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input placeholder="Enter Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input placeholder="Enter Password" type="password" class="form-control" id="exampleInputPassword1">
                                 </div>
                                 <button type="submit" class="btn btn-success btn-lg rounded btn-block">Sign in</button>
                              </form>
                              <p class="text-muted text-center small m-0 py-3">or</p>
                              <a href="verification.html" class="btn btn-dark btn-block rounded btn-lg btn-apple">
                              <i class="icofont-brand-apple mr-2"></i> Sign up with Apple
                              </a>
                              <a href="verification.html" class="btn btn-light border btn-block rounded btn-lg btn-google">
                              <i class="icofont-google-plus text-danger mr-2"></i> Sign up with Google
                              </a>
                              <p class="text-center mt-3 mb-0"><a href="signup.html" class="text-dark">Don't have an account? Sign up</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="osahan-signup bg-white p-4">
                           <div class="p-2">
                              <h2 class="my-0">Let's get started</h2>
                              <p class="small mb-4">Create account to see our top picks for you!</p>
                              <form action="https://askbootstrap.com/preview/grofarweb/verification.html">
                                 <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input placeholder="Enter Name" type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp">
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputNumber1">Phone Number</label>
                                    <input placeholder="Enter Phone Number" type="number" class="form-control" id="exampleInputNumber1" aria-describedby="emailHelp">
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input placeholder="Enter Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input placeholder="Enter Password" type="password" class="form-control" id="exampleInputPassword1">
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword2">Confirmation Password</label>
                                    <input placeholder="Enter Confirmation Password" type="password" class="form-control" id="exampleInputPassword2">
                                 </div>
                                 <button type="submit" class="btn btn-success rounded btn-lg btn-block">Create Account</button>
                              </form>
                              <p class="text-muted text-center small py-2 m-0">or</p>
                              <a href="verification.html" class="btn btn-dark btn-block rounded btn-lg btn-apple">
                              <i class="icofont-brand-apple mr-2"></i> Sign up with Apple
                              </a>
                              <a href="verification.html" class="btn btn-light border btn-block rounded btn-lg btn-google">
                              <i class="icofont-google-plus text-danger mr-2"></i> Sign up with Google
                              </a>
                              <p class="text-center mt-3 mb-0"><a href="signin.html" class="text-dark">Already have an account! Sign in</a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer p-0 border-0">
                  <div class="col-6 m-0 p-0">
                     <a href="#" class="btn border-top border-right btn-lg btn-block" data-dismiss="modal">Close</a>
                  </div>
                  <div class="col-6 m-0 p-0">
                     <a href="help_support.html" class="btn border-top btn-lg btn-block">Help</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="<?=base_url('resources/admin/assets/')?>vendor/jquery/jquery.min.js" type="90f988f47de787d53cdaf26f-text/javascript"></script>
      <script src="<?=base_url('resources/admin/assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js" type="90f988f47de787d53cdaf26f-text/javascript"></script>
      <script type="90f988f47de787d53cdaf26f-text/javascript" src="<?=base_url('resources/admin/assets/')?>vendor/slick/slick.min.js"></script>
      <script type="90f988f47de787d53cdaf26f-text/javascript" src="<?=base_url('resources/admin/assets/')?>vendor/sidebar/hc-offcanvas-nav.js"></script>
      <script src="<?=base_url('resources/admin/assets/')?>js/osahan.js" type="90f988f47de787d53cdaf26f-text/javascript"></script>
      <script src="<?=base_url('resources/admin/assets/')?>/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="90f988f47de787d53cdaf26f-|49" defer></script><script defer src="<?=base_url('resources/admin/assets/scripts/7d0fa10a/')?>cloudflare-static/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"84cfd076ab1d0d92","version":"2024.1.0","r":1,"token":"dd471ab1978346bbb991feaa79e6ce5c","b":1}' crossorigin="anonymous"></script>
   </body>
   <!-- Mirrored from askbootstrap.com/preview/grofarweb/product_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 07:38:56 GMT -->
</html>