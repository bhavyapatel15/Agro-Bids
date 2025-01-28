<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from askbootstrap.com/preview/grofarweb/fresh_vegan.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jan 2024 07:38:56 GMT -->
   <head>
     <?php include_once("topuser.php")?>
    <link href='<?=base_url('resources/user/assets/')?>/css0/bootstrap.css' rel='stylesheet' />

    <link href="<?=base_url('resources/user/assets/')?>/css0/pe-icon-7-stroke.css" rel="stylesheet" />

<!--     <link href='css/ct-navbar.css' rel='stylesheet' /> -->
    <link href='<?=base_url('resources/user/assets/')?>/css0/rotating-card.css' rel='stylesheet' />


   <style>
         body{
background:white;
}
.container1{
  user-select: none;
  margin: 100px auto;
  background: #231e39;
  color: #b3b8cd;
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
  background: #292343;
}
.profile-name{
  font-size: 25px;
  font-weight: bold;
  margin: 27px 0 0 120px;
}
.about{
  margin-top: 35px;
  line-height: 21px;
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

        .btn-info,
        .btn-info:hover,
        .btn-info:focus{
            color: #FFF !important;
            background-color: #00bbff !important;
            border-color: #00bbff !important;
        }

        .btn-info{
            opacity: .8;
            transition: all 0.1s;
            -webkit-transition: all 0.1s;
        }
        .btn-info:hover,
        .btn-info:focus{
            opacity: 1;
        }

   </style>
    </head>
   <body>
    
      <div class="bg-white shadow-sm osahan-main-nav">

      <?php include_once("navuser.php")?>
     
      <section class="py-4 osahan-main-body">
            <div class="container">                
                   <div class="col-md-4 col-sm-6">
                       <div class="card-container">
                          <div class="card">
                              <div class="front">
                                  <div class="cover">
                                      <img src="<?=base_url('resources/user/assets/img/'.$buyerInfo[0]->coverphoto)?>"/>
                                  </div>
                                  <div class="user">
                                      <img class="img-circle" src="<?=base_url('resources/user/assets/img/'.$buyerInfo[0]->profilephoto)?>"/>
                                  </div>
                                  <div class="content">
                                      <div class="main">
                                          <h3 class="name"><?=$buyerInfo[0]->buyername?></h3>
                                          <p class="profession">Buyer</p>
                                          <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                                      </div>
                                      <div class="footer">
                                          <i class="fa fa-mail-forward"></i> Auto Rotation
                                      </div>
                                  </div>
                              </div> <!-- end front panel -->
                              <div class="back">
                                  <div class="header">
                                      <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                                  </div>
                                  <div class="content">
                                      <div class="main">
                                          <h4 class="text-center">Job Description</h4>
                                          <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                          <div class="stats-container">
                                              <div class="stats">
                                                  <h4>235</h4>
                                                  <p>
                                                      Followers
                                                  </p>
                                              </div>
                                              <div class="stats">
                                                  <h4>114</h4>
                                                  <p>
                                                      Following
                                                  </p>
                                              </div>
                                              <div class="stats">
                                                  <h4>35</h4>
                                                  <p>
                                                      Projects
                                                  </p>
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                                  <div class="footer">
                                      <div class="social-links text-center">
                                          <a href="https://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                          <a href="https://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                          <a href="https://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                      </div>
                                  </div>
                              </div> <!-- end back panel -->
                          </div> <!-- end card -->
                      </div> <!-- end card-container -->
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
    </div>

<script src="<?= base_url('resources/user/assets/')?>js0/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?= base_url('resources/user/assets/')?>js0/bootstrap.min" type="text/javascript"></script>

<script type="text/javascript">
    $().ready(function(){
        $('[rel="tooltip"]').tooltip();

        $('a.scroll-down').click(function(e){
            e.preventDefault();
            scroll_target = $(this).data('href');
             $('html, body').animate({
                 scrollTop: $(scroll_target).offset().top - 60
             }, 1000);
        });

    });

    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }


</script>
 
      <?php include_once("footeruser.php")?>
     
      <?php include_once("bottomuser.php")?>
   </body>
  
</html>