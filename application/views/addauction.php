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
                        <div class="col-lg-3"></div>

                        <div class="col-lg-6 p-4 bg-white rounded shadow-sm">
                        <h4 align="center" class="mb-4 profile-title">Add Auction Details</h4>
                        <div id="edit_profile">
                           <div class="p-0">
                               <form method="post" enctype="multipart/form-data" action="<?=site_url('addauction/addAuction')?>">
                                        
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
                                          <input required type="text" class="form-control" name="txttitle"  >
                                       </div>

                                        <div class="form-group">
                                          <label for="exampleInputNumber1">Enter Amount of Unit</label>
                                          <input required type="number" class="form-control" name="txtamount" >
                                       </div>

                                        <div class="form-group">
                                          <label for="exampleInputNumber1">Select Unit</label>
                                          <select required name="unit" class="form-control" style="color:black">
                                            <option value="" hidden>Select Unit</option>
                                                <?php
                                             foreach($unitInfo as $u)
                                             {
                                             ?>
                                                   <option value="<?=$u->unitid?>"><?=$u->type?></option>
                                             <?php
                                               }
                                             ?>

                                        </select>
                                       </div>

                                         <div class="form-group">
                                          <label for="exampleInputEmail1">Enter Base Price</label>
                                          <input required type="number" class="form-control" name="txtbprice" >
                                       </div>
                                       
                                       <div class="form-group">
                                          <label for="exampleInputNumber1">Enter Description</label>
                                          <textarea class="form-control" rows="5" cols="20" name="txtdes" class="input" required=""></textarea>
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
                                          <input type="submit" name="btnadd" value="Start New Auction" class="btn btn-success"/>
                                       </div>
                                 
                              </form>

                           </div>
                           
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
            alert('Auction Added Successfull..!!'); 
      <?php
         } 
       ?> 
    </script> 
   </body>
  
</html>