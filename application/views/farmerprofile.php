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
    height: 3rem;
    width: 3rem;
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
                <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                              <tr class="text-center">
                               
                                <th>Profile</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Status</th>
                                <th>Operation</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                                     foreach($farmerInfo as $f)
                                     {                                                 
                                                             
                                ?>
                              <tr class="text-center ">
                                
                                
                                <td class="image-prod"><div class="img" style="background-image:url(<?=base_url('resources/user/assets/img/'.$f->profilephoto)?>);  border-radius:50%"></div></td>
                                
                                <td class="product-name">
                                    <h3><?=$f->email?></h3>
                                    <p></p>
                                </td>
                                
                                    
                                     <td class="product-name">
                                    <h3><?=$f->cityname?></h3>
                                    <p></p>
                                </td>
                               
                                
                                <td class="product-name">
                                 <h3 style="font-size:20px"> <?php
                                    if($f->status==1)
                                    {
                                    ?>       
                                        <span class="badge badge-soft-success mb-0"><strong>Active</strong></span>
                                 <?php
                                    }
                                    else
                                    {
                                    ?>
                                 <span class="badge badge-soft-danger mb-0"><strong>Blocked</strong></span>
                                 <?php
                                    }
                                 
                                    ?>       
                                  </h3>
                                </td>

                                <td class="product-name">
                                    <h3><a style="color:green" href="<?=site_url('farmermoreinfo/index/'.$f->farmerid)?>">View More Info</a></h3>
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
   </body>
  
</html>