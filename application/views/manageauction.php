<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from askbootstrap.com/preview/grofarweb/fresh_vegan.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 07:38:56 GMT -->
   <head>
      <?php include_once("topuser.php")?>
      <style>
         .project-list-table {
         border-collapse: separate;
         border-spacing: 0 12px
         }
         .project-list-table tr {
         background-color: #fff
         }
         .table-nowrap td, .table-nowrap th {
         white-space: nowrap;
         }
         .table-borderless>:not(caption)>*>* {
         border-bottom-width: 0;
         }
         .table>:not(caption)>*>* {
         padding: 0.75rem 0.75rem;
         background-color: var(--bs-table-bg);
         border-bottom-width: 1px;
         box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
         }
         .avatar-sm {
         height: 6rem;
         width: 7rem;
         }
         .rounded-circle {
         border-radius: 50%!important;
         }
         .me-2 {
         margin-right: 0.5rem!important;
         }
         img, svg {
         vertical-align: middle;
         }
         a {
         color: #3b76e1;
         text-decoration: none;
         }
         .badge-soft-danger {
         color: #f56e6e !important;
         background-color: rgba(245,110,110,.1);
         }
         .badge-soft-success {
         color: #63ad6f !important;
         background-color: rgba(99,173,111,.1);
         }
         .badge-soft-primary {
         color: #3b76e1 !important;
         background-color: rgba(59,118,225,.1);
         }
         .badge-soft-info {
         color: #57c9eb !important;
         background-color: rgba(87,201,235,.1);
         }
         .avatar-title {
         align-items: center;
         background-color: #3b76e1;
         color: #fff;
         display: flex;
         font-weight: 500;
         height: 100%;
         justify-content: center;
         width: 100%;
         }
         .bg-soft-primary {
         background-color: rgba(59,118,225,.25)!important;
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
      <section class="ftco-section ftco-cart">
         <div class="container">
            <?php 
               if(isset($isUpdate))
               {
             ?>
              <div class="row">
                        <div class="col-lg-3"></div>

                        <div class="col-lg-6 p-4 bg-white rounded shadow-sm">
                        <h4 align="center" class="mb-4 profile-title">Update Auction Details</h4>
                        <div id="edit_profile">
                           <div class="p-0">
                               <form method="post" enctype="multipart/form-data" action="<?php

                                    if(isset($isUpdate))
                                    {
                                       echo site_url('manageauction/updateauction/'.$aInfo[0]->auctionid.'/'.$aInfo[0]->subcategoryid);
                                    }
                                 ?>">
                                
                                        <div class="form-group">
                                      <label for="exampleInputName1">Select Category</label>
                                       <select required name="sub" id="cat" class="form-control" style="color:black" onchange="loadSubcat(this.value)">
                                        <option value="" hidden>Select Category</option>
                                            <?php
                                               foreach($catInfo as $c)
                                               {
                                               ?>
                                                     <option value="<?=$c->categoryid?>"><?=$c->categoryname?></option>
                                               <?php
                                                 }
                                            ?>

                                       </select> 
                                   </div>

                                      <div class="form-group">
                                          <label for="exampleInputName1">Select Sub-Category</label>
                                           <select required name="sub" class="form-control" id="subcat" style="color:black">
                                                <option value="" hidden>Select A Category First</option>
                                           </select> 
                                       </div>

                                       <div class="form-group">
                                          <label for="exampleInputNumber1">Enter Title</label>
                                          <input required type="text" value="<?=$aInfo[0]->title?>" class="form-control" name="txttitle"  >
                                       </div>

                                       <div class="form-group">
                                          <label for="exampleInputEmail1">Enter Base Price</label>
                                          <input required type="text" class="form-control" name="txtbase" value="<?=$aInfo[0]->baseprice?>">
                                       </div>

                                        <div class="form-group">
                                          <label for="exampleInputNumber1">Enter Amount of Unit</label>
                                          <input required type="number" class="form-control" name="txtqty" value="<?=$aInfo[0]->qty?>" >
                                       </div>

                                        <div class="form-group">
                                          <label for="exampleInputNumber1">Select Unit</label>
                                          <select required name="unit" class="form-control" style="color:black">
                                                <?php
                                             foreach($unitinfo as $u)
                                             {
                                             ?>
                                                   <option value="" hidden>Select Unit</option>
                                                   <option value="<?=$u->unitid?>"><?=$u->type?></option>
                                             <?php
                                               }
                                             ?>

                                        </select>
                                       </div>

                                       <div class="form-group">
                                          <label for="exampleInputNumber1">Enter Description</label>
                                          <textarea class="form-control" rows="5" cols="20" name="txtdes" class="input" required=""><?=$aInfo[0]->des?></textarea>
                                       </div>

                                       <div class="form-group">
                                          <label for="exampleInputNumber1">Select Auction Start date</label>
                                           <input type="date" name="auctionstart" id="auctionstart" class="form-control" required>
                                       </div>

                                       <div class="form-group">
                                          <label for="exampleInputNumber1">Select Auction End date</label>
                                           <input type="date" name="auctionend" id="auctionend" class="form-control" required>
                                       </div>
                                       <br>
                                       <div class="text-center">
                                          <input type="submit" name="btnadd" value="Update Auction Details" class="btn btn-success"/>
                                       </div>
                                 
                              </form>

                           </div>
                           
                        </div>
                     </div>  
             </div> 
             <br>
               <?php 
              }
             ?>

            <div class="row" >
               <div class="col-md-12 ftco-animate" >
                  <div class="cart-list">
                     <table class="table">
                        <thead class="thead-primary">
                           <tr class="text-center">
                              <th>Sub Category Name</th>
                              <th>Image</th>
                              <th> Base Price</th>
                              <th>Title</th>
                              <th>Quantity</th>
                              <th>Unit</th>
                              <th>Auction Status</th>
                              <th>Operations</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              foreach($auctionInfo as $a)
                               {
                              
                                 
                                
                              ?>
                           <tr class="text-center ">
                              <td class="product-name">
                                 <h3><?=$a->subcategoryname?></h3>
                                 <p></p>
                              </td>
                              <td class="image-prod">
                                 <div class="img" style="background-image:url(<?=base_url('resources/admin/assets/images/'.$a->image)?>);  border-radius:50%"></div>
                              </td>
                              <td class="product-name">
                                 <h3><?=$a->baseprice?></h3>
                                 <p></p>
                              </td>
                              <td class="product-name">
                                 <h3><?=$a->title?></h3>
                              </td>
                              <td class="product-name">
                                 <h3><?=$a->qty?></h3>
                                 <p></p>
                              </td>
                              <td class="product-name">
                                 <h3><?=$a->type?></h3>
                                 <p></p>
                              </td>
                              <td class="product-name">
                                 <h3>
                                 <?php
                                    if($a->status==1)
                                    {
                                    ?>       
                                 <span class="badge badge-soft-success mb-0"><strong>Active</strong></span>
                                 <?php
                                    }
                                    elseif($a->status==2)
                                    {
                                    ?>
                                 <span class="badge badge-soft-primary mb-0"><strong>Pending</strong></span>
                                 <?php
                                    }
                                    else
                                    {
                                    ?>
                                        <span class="badge badge-soft-danger mb-0"><strong>Completed</strong></span>
                                    <?php
                                    }
                                   
                                    ?>
                                    </h3>    
                              </td>
                              <td class="product-name">
                                 <h3> <?php
                                    if($a->status==1)
                                    {
                                    ?>
                                    <a class="material-icons button edit" href='<?=site_url("manageauction/loadedit/$a->auctionid") ?>'>Update</a>
                                    <a class="material-icons button delete" style="color:red" href='<?=site_url("manageauction/removeauction/$a->auctionid") ?>'>Delete</a>
                                    <?php
                                       }
                                       ?>
                                    &nbsp
                                    <a class="material-icons button delete" style="color:green"  href='<?=site_url("farmerauctioninfo/index/$a->auctionid") ?>'>View More</a>
                                 </h3>
                                 <p></p>
                              </td>
                           </tr>
                           <?php
                              }
                              
                              ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php include_once("footeruser.php")?>
      <?php include_once("bottomuser.php")?>

       <script type="text/javascript">
         
            const cal1 = document.getElementById('auctionstart');
            const cal2 = document.getElementById('auctionend');

            // Add event listener to cal2
            cal2.addEventListener('change', function() {
                // Get selected dates from both calendars
                const selectedDateCal1 = new Date(cal1.value);
                const selectedDateCal2 = new Date(cal2.value);

                // Check if selected date in cal2 is before selected date in cal1
                if (selectedDateCal2 < selectedDateCal1) {
                    // Reset cal2 to the selected date in cal1
                    cal2.value = cal1.value;
                    alert('Please select auction end date after auction start date.');
                }
            });
      </script>

      <script type="text/javascript">
          function loadSubcat(id) 
          {
                $.ajax({
                    url:"<?=site_url('Addauction/getSubCats/')?>"+id,
                    success:function(res){
                        $("#subcat").html(res);
                    }
                });
          }
      </script>
      
      <script> 
      <?php 
           if($this->session->flashdata('item'))
           { 
        ?> 
            alert('Auction Updated Sucessfully..!!'); 
      <?php
         } 
       ?> 
    </script> 
   </body>
</html>