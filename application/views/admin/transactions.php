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
                        <h6>Transactions table</h6>
                     </div>
                     <div class="card-body px-3 pt-0 pb-2">
                        <div class="table-responsive p-0">
                           <table class="table align-items-center mb-0" id="basic-1">
                              <thead>
                                 <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Transaction ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">Auction Title</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Buyer Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Farmer Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Razor Order Id</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Transaction Amount</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Transaction Date</th>
                                 </tr>
                              </thead>
                              <tbody >
                                 <?php
                                    foreach($transactionInfo as $t)
                                    {
                                    ?>
                                 <tr>
                                    <td class="align-middle text-center text-sm">
                                       <?=$t->transactionid?>
                                    </td>
                                     <td class="align-middle text-center text-sm">
                                       <?=$t->title?>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <?php
                                          foreach($buyerInfo as $b)
                                          {
                                            if($b->buyerid==$t->buyerid)
                                            {
                                              echo "$b->buyername";
                                            }
                                          }
                                        ?> 
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <?php
                                          foreach($farmerInfo as $f)
                                          {
                                            if($f->farmerid==$t->farmerid)
                                            {
                                              echo "$f->farmername";
                                            }
                                          }
                                        ?> 
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <?=$t->razororderid?>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <?=$t->amount?>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <?=$t->transacdt?>
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