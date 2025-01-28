<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from askbootstrap.com/preview/grofarweb/fresh_vegan.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 07:38:56 GMT -->
   <head>
     <?php include_once("topuser.php")?>

     <style>
      
*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    
}
.h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
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
   

     </style>

   </head>

   <body>
     <?php include_once('navuser.php')?>
     
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
                               
                                <th>Category </th>
                                 <th>Image</th>
                                 <th> Price</th>
                                 <th>Title</th>
                                 <th>Quantity</th>
                                 <th>Unit</th>
                                 <th>Bid</th>   
                                 <th>Status</th>   
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                                                           foreach($bidInfo as $b)
                                                            {

                                                               foreach($auctionInfo as $a)
                                                               {
                                                                  if($b->auctionid==$a->auctionid)
                                                                  {
                                                             
                                                      ?>
                              <tr class="text-center ">
                                
                                
                               
                                <td class="product-name">
                                    <h3><?=$a->subcategoryname?></h3>
                                    <p></p>
                                </td>
                                <td class="image-prod"><div class="img" style="background-image:url(<?=base_url('resources/admin/assets/images/'.$a->image)?>);  border-radius:50%"></div></td>
                                
                                    
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
                                    <h3><?=$b->bidamount?></h3>
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
                                    <p></p>
                                </td>
                              </tr>

                              

                                
                                
                               
                              <?php
                                                              }
                                                            }
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

      <script type="text/javascript">
            $(document).ready(function() {
    //Only needed for the filename of export files.
    //Normally set in the title tag of your page.
 
    // DataTable initialisation
    $('#example').DataTable(
        {
            "dom": '<"dt-buttons"Bf><"clear">lirtp',
            "paging": true,
            "autoWidth": true,
            "buttons": [
                'colvis',
                'copyHtml5',
        'csvHtml5',
                'excelHtml5',
        'pdfHtml5',
                'print'
            ]
        }
    );
});
      </script>
      <?php include_once("bottomuser.php")?>
   </body>
  
</html>