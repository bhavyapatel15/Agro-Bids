<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from askbootstrap.com/preview/grofarweb/fresh_vegan.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 07:38:56 GMT -->
   <head>
     <?php include_once("topuser.php")?>
     <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");


.container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.container .form {
  margin-top: 30px;
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: #333;
}
.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form .column {
  display: flex;
  column-gap: 15px;
}
.form .gender-box {
  margin-top: 20px;
}
.gender-box h3 {
  color: #333;
  font-size: 1rem;
  font-weight: 400;
  margin-bottom: 8px;
}
.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}
.form .gender {
  column-gap: 5px;
}
.gender input {
  accent-color: rgb(130, 106, 251);
}
.form :where(.gender input, .gender label) {
  cursor: pointer;
}
.gender label {
  color: #707070;
}
.address :where(input, .select-box) {
  margin-top: 15px;
}
.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #707070;
  font-size: 1rem;
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
}
.form button:hover {
  background: rgb(88, 56, 250);
}
/*Responsive*/
@media screen and (max-width: 500px) {
  .form .column {
    flex-wrap: wrap;
  }
  .form :where(.gender-option, .gender) {
    row-gap: 15px;
  }
}
     </style>
   </head>

   <body>
    
      <div class="bg-white shadow-sm osahan-main-nav">

      <?php include_once("navuser.php")?>
      
      <section class="py-4 osahan-main-body">
         <div class="row">
            <div class="col-md-3"></div>
                  <div class="col-md-6">
                      <header align="center">CheckOut Details</header>
                                 <form action="<?=site_url('transaction/checkout/'.$buyerinfo[0]->buyerid.'/'.$bidinfo[0]->bidid.'/'.$bidinfo[0]->auctionid)?>" class="form" method="post">
                                   <div class="input-box">
                                     <label>Full Name</label>
                                     <input readonly type="text" value="<?=$buyerinfo[0]->buyername?>" required  style="color:firebrick;" name="txtname" />
                                   </div>
                                   <div class="input-box">
                                     <label>Email Address</label>
                                     <input readonly type="text" value="<?=$buyerinfo[0]->email?>" required  style="color:firebrick;" name="txtemail" />
                                   </div>
                                   <div class="column">
                                     <div class="input-box">
                                       <label>Phone Number</label>
                                       <input readonly type="number" value="<?=$buyerinfo[0]->contact?>" required  style="color:firebrick;" name="txtcontact" />
                                     </div>
                                   </div>
                                  
                                   <div class="input-box address">
                                     <label>Shipping Address</label>
                                     <input type="text" value="<?=$buyerinfo[0]->street1?>" required name="txtstreet1" style="color: black"/>
                                     <input type="text" value="<?=$buyerinfo[0]->street2?>" name="txtstreet2" required style="color: black" />
                                     
                                     <div class="column">
                                       <div class="input-box">
                                           <label>Country</label>
                                           <input readonly type="text" value="India" required readonly style="color:firebrick;" name="txtcountry" />
                                       </div>   
                                      <div class="input-box">
                                          <label>State</label>
                                           <select name="txtstate" class="select-box" style="color:black">
                                               <?php 
                                                 foreach($stateInfo as $s)
                                                 {
                                            
                                                     if($buyerinfo[0]->stateid==$s->stateid)
                                                     {  
                                                ?>  
                                                    <option selected value="<?=$s->statename?>"=><?=$s->statename?></option>   
                                                <?php
                                                    }
                                                    else
                                                    {
                                                ?>                
                                                    <option value="<?=$s->statename?>"=><?=$s->statename?></option>
                                              <?php 
                                                 }
                                                }
                                              ?>
                                          </select>
                                       </div>
                                     </div>
                                       <div class="input-box">
                                          <label>City</label>
                                           <select name="txtcity" class="select-box" style="color:black">
                                               <?php 
                                                 foreach($cityinfo as $c)
                                                 {
                                            
                                                     if($buyerinfo[0]->cityid==$c->cityid)
                                                     {  
                                                ?>  
                                                    <option selected value="<?=$c->cityname?>"=><?=$c->cityname?></option>   
                                                <?php
                                                    }
                                                    else
                                                    {
                                                ?>                
                                                    <option value="<?=$c->cityname?>"=><?=$c->cityname?></option>
                                              <?php 
                                                 }
                                                }
                                              ?>
                                          </select>
                                       </div>
                                     <div class="column">
                                     </div>
                                   </div>
                                   <div class="input-box">
                                     <label>Payment Info</label>
                                      <input type="text" value="<?=$bidinfo[0]->bidamount?>" required readonly style="color:firebrick;" name="txtprice"/>
                                   </div>
                                   <button type="submit" name="btnsub">Pay Now</button>
                                 </form>
                  </div>
           </div>             
      </section>
     
      <?php include_once("footeruser.php")?>
     
      <?php include_once("bottomuser.php")?>
   </body>
  
</html>