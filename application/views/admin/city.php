<!DOCTYPE html>
<html lang="en">
   <head>
      <style>
         .button-38 {
         background-color: #FFFFFF;
         border: 0;
         border-radius: .5rem;
         box-sizing: border-box;
         color: #111827;
         font-family: "Inter var",ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
         font-size: .875rem;
         font-weight: 600;
         width: 100%;
         line-height: 1.25rem;
         padding: .75rem 1rem;
         text-align: center;
         text-decoration: none #D1D5DB solid;
         text-decoration-thickness: auto;
         box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
         cursor: pointer;
         user-select: none;
         -webkit-user-select: none;
         touch-action: manipulation;
         }
         .button-38:hover {
         background-color: rgb(249,250,251);
         }
         .button-38:focus {
         outline: 2px solid transparent;
         outline-offset: 2px;
         }
         .button-38:focus-visible {
         box-shadow: none;
         }
      </style>
      <?php include_once('head.php')?>
   </head>
   <body class="g-sidenav-show  bg-gray-100">
      <?php include_once('side.php')?>
      <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
         <!-- Navbar -->
         <?php include_once('navbar.php')?>
         <br>
         <form method="post" enctype="multipart/form-data" action="<?php
            if(isset($isUpdate))
            {
               echo site_url('admin/city/editcity/'.$cinfo[0]->cityid.'/'.$cinfo[0]->stateid);
            }
            else
            {
               echo site_url('admin/city/addcity/'.$cityinfo[0]->stateid);
            }
            ?>">
            <div class="ms-md-4 pe-md-3 d-flex align-items-center" style="width: 30%">
               <div class="d-flex align-items-center ms-md-auto ">
                  <input type="text" class="form-control" name="txtcname" required value="<?php
                     if(isset($isUpdate))
                     {
                        echo $cinfo[0]->cityname;
                     }
                     
                     ?>" placeholder="City name">

                  &nbsp<button class="button-38" name="btnadd" role="button" ><?php
                     if(isset($isUpdate))
                     {
                        echo "Update City";
                     }
                      else
                     {
                       echo "Add City";
                      }
                     ?> </button>
               </div>
            </div>
         </form>
         <!-- End Navbar -->
         <div class="container-fluid py-4">
            <a href="<?=site_url('admin/State/')?>"><img height="27px" width="27px" src="<?=base_url('resources/admin/assets/images/back4.png')?>"></a>

            <div class="row">
               <div class="col-12">
                  <div class="card mb-4">
                     <div class="card-header pb-0">
                        <h6>City table</h6>
                     </div>
                     <div class="card-body px-3 pt-0 pb-2">
                        <div class="table-responsive p-0">
                           <table class="table align-items-center mb-0" id="basic-1">
                              <thead>
                                 <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">City ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 align-middle text-center">City Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 align-middle text-center text-sm">Operations</th>
                                 </tr>
                              </thead>
                              <tbody >
                                 <?php
                                    foreach($cityinfo as $c)
                                    {
                                    ?>
                                 <tr>
                                    <td  class="align-middle text-center text-sm">
                                      <?=$c->cityid?>
                                    </td>
                                    <td  class="align-middle text-center text-sm">
                                       <?=$c->cityname?>
                                    </td >
                                    <td class="align-middle text-center text-sm">
                                       <span class="badge badge-sm bg-gradient-success">
                                       <a class="material-icons button edit" href='<?=site_url("admin/city/loadedit/$c->cityid/$c->stateid") ?>'>Update</a>
                                       </span>
                                       <span class="badge badge-sm bg-gradient-danger">
                                       <a class="material-icons button delete"  href='<?=site_url("admin/city/removecity/$c->cityid/$c->stateid") ?>'>Delete</a>
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