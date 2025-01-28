<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('resources/user/assets/')?>img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=base_url('resources/user/assets/')?>img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Agro Bids</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="<?=base_url('resources/user/assets/css3')?>/bootstrap.css" rel="stylesheet" />
    <link href="<?=base_url('resources/user/assets/css3')?>/gaia.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href='<?=base_url('resources/user/assets/css3')?>?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="<?=base_url('resources/user/assets/css3')?>/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url('resources/user/assets/css3')?>/fonts/pe-icon-7-stroke.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
               <!--  <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button> -->

                 <!-- <img src="<?= base_url('resources/user/assets/') ?>img/logo.jpg" class="" height="10%"></img>  logo but put transfrent-->
                
                <a class="navbar-brand text-primary">
                    <!-- which page link we should put  see pu for color change it-->
                    AgroBids
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                        <!-- <li>
                        <a href='<?= site_url("farmerlogin")?>' target="_blank">Log AsFarmer</a>
                    </li> -->
                    <li class="dropdown">
                        <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- <i class="fa fa-share-alt"></i> --> Grow With Us
                            <!-- here i want to place all the login button with reg button here how? -->
                        </a>
                        <ul class="dropdown-menu dropdown-danger">
                            <li>
                                <a href="<?= site_url('Register')?>">Sign Up</a>
                            </li>
                            <li>
                                <a href="<?= site_url('farmerlogin')?>">Farmer Sign In</a>
                            </li>
                            <li>
                                <a href="<?= site_url('buyerlogin')?>">Buyer Sign In</a>
                            </li>
                        </ul>
                    </li>


                    <!-- <li>
                        <a href="http://www.creative-tim.com/product/gaia-bootstrap-template" class="btn btn-danger btn-fill">Free Download</a>
                    </li> -->


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>


    <div class="section section-header">
        
            <!-- <div class="image">
                <div class="image" style="background-image:url('<?=base_url('resources/user/assets/')?>img/header-1.jpeg')">
            </div> -->


                <video src="<?= base_url('resources/user/assets/') ?>images/farm.mp4" class="w-100 vh-100 object-fit-cover"height="100%" width="100%" defaultPlaybackRate="2.0"
      autoplay loop muted></video>


           <!--  </div> -->

           
            <div class="container">
                <div class="content">
                    <div class="title-area">
                       <!--  <p>Free Demo</p> -->
                        <h1 class="title-modern">AgroBids</h1>
                        <h3>"Where Tradition Meets Technology:<!--  Your Farmer's Auction House. -->"</h2>
                        <div class="separator line-separator">♦</div>
                    </div>

                   <!--  <div class="button-get-started">
                        <a href="http://www.creative-tim.com/product/gaia-bootstrap-template" target="_blank" class="btn btn-white btn-fill btn-lg ">
                            Download Demo
                        </a>
                    </div> -->
                </div>

            </div>
        
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2>Our Services</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">AgroBids is a B2B Agri-Tech platform , where farmers can sell their products directly to all buyers through auction process .Farmers can sell their products in lot (huge quantity) to different types of buyer such as an Organization , Individual , Distributor  and Restaurant / Kitchen .The vision of creating this website is to provide marketing platform for farmers ensuring sale at a reasonable price by creating an auction .Buyers can buy products efficiently based on their requirement such as type of product , quantity , affordable price .Buyers can also review products based on their experience of the service received.</p>
                </div>
            </div>
          
        </div>
    </div>

    <div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('<?=base_url('resources/user/assets/')?>img/office-1.jpeg')">
            </div>
        </div>
    </div>
   

</body>

<!--   core js files    -->
<script src="<?= base_url('resources/user/assets/js4')?>/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url('resources/user/assets/js4')?>/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="<?=base_url('resources/user/assets/js4')?>/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="<?=base_url('resources/user/assets/js4')?>/jq"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="<?=base_url('resources/user/assets/js4')?>/gaia.js"></script>

</html>