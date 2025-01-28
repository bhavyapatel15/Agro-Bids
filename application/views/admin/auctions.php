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
         <div class="container-fluid py-4">
            <div class="row">
               <div class="col-12">
                  <div class="card mb-4">
                     <div class="card-header pb-0">
                        <h6>Auctions table</h6>
                     </div>
                     <div class="card-body px-3 pt-0 pb-2">
                        <div class="table-responsive p-0">
                           <table class="table align-items-center mb-0" id="basic-1">
                              <thead>
                                 <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Auction ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Farmer Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Auction Title</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SubCategory Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Base Price</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Unit</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created Date And Time</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Start Date</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">End Date </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                 </tr>
                              </thead>
                              <tbody >
                                 <?php
                                    foreach($auctionInfo as $a)
                                    {
                                    ?>
                                 <tr>
                                    <td class="align-middle text-center text-sm">
                                       <?=$a->auctionid?>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <?=$a->farmername?>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <?=$a->title?>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <?=$a->subcategoryname?>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <?=$a->baseprice?>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <?=$a->qty?>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <?=$a->type?>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <?=$a->addeddt?>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <?php echo date("d-m-Y", strtotime($a->auctionstartdt)) ?>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <?php echo date("d-m-Y", strtotime($a->auctionenddt)) ?>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <?php
                                             if($a->status==1)
                                             {
                                       ?>
                                              <span class="badge badge-sm bg-gradient-primary">Active</span>
                                       <?php
                                            }
                                             elseif($a->status==2)
                                             {
                                       ?>     
                                             <span class="badge badge-sm bg-gradient-info">Pending</span>    
                                       <?php
                                            }
                                             else
                                             {
                                       ?> 
                                             <span class="badge badge-sm bg-gradient-success">Complete</span>
                                       <?php
                                          }
                                       ?>        
                                       
                                       
                                    </span>
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
            </div>
            <?php include_once('footer.php')?>
         </div>
      </main>
      <?php include_once('bottom.php')?>
        <script type="text/javascript">
              $(document).ready(function() {
                 $('#basic-1').DataTable();
               });

            </script>

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