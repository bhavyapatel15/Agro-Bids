<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from askbootstrap.com/preview/grofarweb/fresh_vegan.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 07:38:56 GMT -->
   <head>
     <?php include_once("topuser.php")?>
   </head>
   <style>
         body{
background:white;
}
.container1{
  user-select: none;
  margin: 100px auto;
  background: white;
  color: black;
  border-radius: 5px;
  width: 350px;
  text-align: center;
  box-shadow: 0 10px 20px -10px rgba(0,0,0,.75);
}
.cover-photo{
  background: url("<?=base_url('resources/user/assets/img/'.$buyerInfo[0]->coverphoto)?>");
  height: 160px;
  width: 100%;
  border-radius: 5px 5px 0 0;
}
.profile{
  height: 120px;
  width: 120px;
  border-radius: 50%;
  margin: 93px 0 0 -175px;
  border: 1px solid #1f1a32;
  padding: 7px;
  background: black;
}
.profile-name{
  font-size: 25px;
  font-weight: bold;
  margin: 27px 0 0 18px;
}
.about{
  margin-top: 40px;
  line-height: 10px;
}
button{
  margin: 10px 0 40px 0;
}
.msg-btn, .follow-btn{
  background: #03bfbc;
  border: 1px solid #03bfbc;
  padding: 10px 25px;
  color: #231e39;
  border-radius: 3px;
  font-family: Montserrat, sans-serif;
  cursor: pointer;
}
.follow-btn{
  margin-left: 10px;
  background: transparent;
  color: #02899c;
}
.follow-btn:hover{
  color: #231e39;
  background: #03bfbc;
  transition: .5s;
}
.container1 i{
  padding-left: 20px;
  font-size: 20px;
  margin-bottom: 20px;
  cursor: pointer;
  transition: .5s;
}
.container i:hover{
  color: #03bfbc;
}


.ag-format-container {
  width: 1142px;
  margin: 0 auto;
}


.ag-courses_box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;

  padding: 50px 0;
}
.ag-courses_item {
  -ms-flex-preferred-size: calc(33.33333% - 30px);
  flex-basis: calc(33.33333% - 30px);

  margin: 0 15px 30px;

  overflow: hidden;

  border-radius: 28px;
}
.ag-courses-item_link {
  display: block;
  padding: 30px 20px;
  background-color:#93C572;

  overflow: hidden;

  position: relative;
}
.ag-courses-item_link:hover,
.ag-courses-item_link:hover .ag-courses-item_date {
  text-decoration: none;
  color: #FFF;
}
.ag-courses-item_link:hover .ag-courses-item_bg {
  -webkit-transform: scale(10);
  -ms-transform: scale(10);
  transform: scale(10);
}
.ag-courses-item_title {
  min-height: 87px;
  margin: 0 0 25px;

  overflow: hidden;

  font-weight: bold;
  font-size: 30px;
  color: #FFF;

  z-index: 2;
  position: relative;
}
.ag-courses-item_date-box {
  font-size: 18px;
  color: #FFF;

  z-index: 2;
  position: relative;
}
.ag-courses-item_date {
  font-weight: bold;
  color: #f9b234;

  -webkit-transition: color .5s ease;
  -o-transition: color .5s ease;
  transition: color .5s ease
}
.ag-courses-item_bg {
  height: 128px;
  width: 128px;
  background-color: #f9b234;

  z-index: 1;
  position: absolute;
  top: -75px;
  right: -75px;

  border-radius: 50%;

  -webkit-transition: all .5s ease;
  -o-transition: all .5s ease;
  transition: all .5s ease;
}
.ag-courses_item:nth-child(2n) .ag-courses-item_bg {
  background-color: #3ecd5e;
}
.ag-courses_item:nth-child(3n) .ag-courses-item_bg {
  background-color: #e44002;
}
.ag-courses_item:nth-child(4n) .ag-courses-item_bg {
  background-color: #952aff;
}
.ag-courses_item:nth-child(5n) .ag-courses-item_bg {
  background-color: #cd3e94;
}
.ag-courses_item:nth-child(6n) .ag-courses-item_bg {
  background-color: #4c49ea;
}



@media only screen and (max-width: 979px) {
  .ag-courses_item {
    -ms-flex-preferred-size: calc(50% - 30px);
    flex-basis: calc(50% - 30px);
  }
  .ag-courses-item_title {
    font-size: 24px;
  }
}

@media only screen and (max-width: 767px) {
  .ag-format-container {
    width: 96%;
  }

}
@media only screen and (max-width: 639px) {
  .ag-courses_item {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
  }
  .ag-courses-item_title {
    min-height: 72px;
    line-height: 1;

    font-size: 24px;
  }
  .ag-courses-item_link {
    padding: 22px 40px;
  }
  .ag-courses-item_date-box {
    font-size: 16px;
  }
}

   </style>
   <body>
    
      <div class="bg-white shadow-sm osahan-main-nav">

      <?php include_once("navuser.php")?>
     
      <section class="py-4 osahan-main-body">
            <div class="container">
               <div class="row">
                      <div class="col-sm-3"></div>
                      <div class="col-sm-6 col-sm-offset-2">
                            <div class="container1">
                              <div class="cover-photo">
                                <img src="<?=base_url('resources/user/assets/img/'.$buyerInfo[0]->profilephoto)?>" class="profile">
                              </div>
                              <div class="profile-name"><?=$buyerInfo[0]->buyername?></div>
                                  <div class="row">
                                    <div class="col-md-2"></div>
                                     <div class="col-md-8">
                                           <p class="about"><strong>Bio: </strong><?=$buyerInfo[0]->bio?></p>
                                           <p class="about"><strong>City: </strong><?=$buyerInfo[0]->cityname?></p>
                                            <p class="about"><strong>Email: </strong><?=$buyerInfo[0]->email?></p>
                                           <p class="about"><strong>Contact: </strong><?=$buyerInfo[0]->contact?></p>  
                                     </div>
                                  </div>    
                              </div>
                      </div>
               </div>
                <div class="row">
                    <div class="ag-format-container">
                          <div class="ag-courses_box">
                            <div class="ag-courses_item">
                              <a href="#" class="ag-courses-item_link">
                                <div class="ag-courses-item_bg"></div>

                                <div class="ag-courses-item_title">
                                  User Since
                                </div>

                                <div class="ag-courses-item_date-box">
                                  Date:
                                  <span class="ag-courses-item_date">
                                      <?=$buyerInfo[0]->regdt?>
                                  </span>
                                </div>
                              </a>
                            </div>

                            <div class="ag-courses_item">
                              <a href="#" class="ag-courses-item_link">
                                <div class="ag-courses-item_bg"></div>

                                <div class="ag-courses-item_title">
                                 Total Bids
                                </div>

                                <div class="ag-courses-item_date-box">
                                  No:
                                  <span class="ag-courses-item_date">
                                    <?=count($bid)?>
                                  </span>
                                </div>
                              </a>
                            </div>

                            <div class="ag-courses_item">
                              <a href="#" class="ag-courses-item_link">
                                <div class="ag-courses-item_bg"></div>

                                <div class="ag-courses-item_title">
                                  Active Bids
                                </div>

                                <div class="ag-courses-item_date-box">
                                  No:
                                  <span class="ag-courses-item_date">
                                   <?php
                                      $c=0;
                                      if(count($bid)>0)
                                      {
                                          foreach($bid as $b)
                                          {
                                                if($b->status==1 && $b->astatus!=3)
                                                {
                                                  $c++;
                                                }
                                          }
                                          echo "$c";
                                      }
                                      else
                                      {
                                          echo "$c";
                                      }
                                   ?>
                                  </span>
                                </div>
                              </a>
                            </div>

                            <div class="ag-courses_item">
                              <a href="#" class="ag-courses-item_link">
                                <div class="ag-courses-item_bg"></div>

                                <div class="ag-courses-item_title">
                                  Pending Bids
                                </div>

                                <div class="ag-courses-item_date-box">
                                  No:
                                  <span class="ag-courses-item_date">
                                     <?php
                                      $c=0;
                                      if(count($bid)>0)
                                      {
                                          foreach($bid as $b)
                                          {
                                                if($b->status==2 && $b->astatus!=3)
                                                {
                                                  $c++;
                                                }
                                          }
                                          echo "$c";
                                      }
                                      else
                                      {
                                          echo "$c";
                                      }
                                   ?>
                                  </span>
                                </div>
                              </a>
                            </div>

                            <div class="ag-courses_item">
                              <a href="#" class="ag-courses-item_link">
                                <div class="ag-courses-item_bg"></div>

                                <div class="ag-courses-item_title">
                                  Completed Bids
                                </div>

                                <div class="ag-courses-item_date-box">
                                  No:
                                  <span class="ag-courses-item_date">
                                     <?php
                                      $c=0;
                                      if(count($bid)>0)
                                      {
                                          foreach($bid as $b)
                                          {
                                                if($b->astatus==3 )
                                                {
                                                  $c++;
                                                }
                                          }
                                          echo "$c";
                                      }
                                      else
                                      {
                                          echo "$c";
                                      }
                                   ?>
                                  </span>
                                </div>
                              </a>
                            </div>
                            <div class="ag-courses_item">
                              <a href="#" class="ag-courses-item_link">
                                <div class="ag-courses-item_bg"></div>

                                <div class="ag-courses-item_title">
                                  Bids Won
                                </div>

                                <div class="ag-courses-item_date-box">
                                  No:
                                  <span class="ag-courses-item_date">
                                      <?php
                                      $c=0;
                                      if(count($bid)>0)
                                      {
                                          foreach($bid as $b)
                                          {
                                                if($b->status==3)
                                                {
                                                  $c++;
                                                }
                                          }
                                          echo "$c";
                                      }
                                      else
                                      {
                                          echo "$c";
                                      }
                                   ?>
                                  </span>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                    </div>
                    
                </div>
           </div>
      </section>
 
      <?php include_once("footeruser.php")?>
     
      <?php include_once("bottomuser.php")?>
   </body>
  
</html>