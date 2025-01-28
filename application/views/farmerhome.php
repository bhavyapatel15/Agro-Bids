<!DOCTYPE html>
<html lang="en">
  <head>
<?php include_once("topuser.php"); ?>
  
  </head>
  <body class="goto-here">

    <?php include_once("navuser.php"); ?>

    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
         <div class="slider-item" style="background-image: url('<?=base_url('resources/user/assets/')?>images/bg_1.jpg');">
            <div class="overlay"></div>
           <div class="container">
             <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

               <div class="col-md-12 ftco-animate text-center">
                 <h1 class="mb-2">We serve Fresh Vegestables &amp; Fruits</h1>
                 <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>

               </div>

             </div>
           </div>
         </div>

         <div class="slider-item" style="background-image: url(<?=base_url('resources/user/assets/')?>images/bg_2.jpg);">
            <div class="overlay"></div>
           <div class="container">
             <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

               <div class="col-sm-12 ftco-animate text-center">
                 <h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
                 <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
               </div>

             </div>
           </div>
         </div>
       </div>
    </section>
    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Testimony</span>
            <h2 class="mb-4">Our satisfied buyer says</h2>
          </div>
        </div>
        <div class="row ftco-animate"> 
               <?php
                $i=0;

                foreach($reviewInfo as $r)
                {
                  if($i<=2)
                     {
                      $i++;
               ?>
                <div class="item col-md-4">
                  <div class="testimony-wrap p-4 pb-5 ">
                    <div class="user-img mb-5" style="background-image: url(<?=base_url('resources/user/assets/img/').$r->profilephoto?>)">
                      <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                      </span>
                    </div>
                    <div class="text text-center">
                      <p class="mb-5 pl-4 line"> <?=$r->review?>.</p>
                      <p class="name">
                           <?=$r->buyername?>
                      </p>
                    </div>
                  </div>
                </div> 
               <?php
                }
                }
               ?>        
        </div>
      </div>
    </section>

    <?php include_once("footeruser.php"); ?>
  
  <!-- loader -->
 <?php include_once("bottomuser.php"); ?>
      
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
  </body>
</html>