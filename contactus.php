
<?php
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Easy Gas</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="js/template-scripts.js"></script> 
<meta charset="utf-8">
<title>Dashboard - View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<header>
         <div id="topbar">
            <div class="line">
               <div class="s-12 m-6 l-6">
                  <p>Welcome Back: <strong> <?php echo $_SESSION['username']; ?> ! </strong> </p> 
               </div>
               <div class="s-12 m-6 l-6">
                  <div class="social right">
                     <a><i class="icon-facebook_circle"></i></a> <a><i class="icon-twitter_circle"></i></a> <a><i class="icon-google_plus_circle"></i></a> <a><i class="icon-instagram_circle"></i></a>
                  </div>
               </div>
            </div>  
         </div> 
         <nav>
            <div class="line">
               <div class="s-12 l-2">
                  <p class="logo"><strong>EASY</strong><i>Gas</i></p>
               </div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Custom menu text</p>
                  <ul class="right">
                     <li class="active-item"><a href="index.php">Home</a></li>
                     <li><a href="cart.php">Dashboard</a></li>
                     <li><a href="#about-us">About Us</a></li>
                     <li><a href="#our-work">Our Work</a></li>
                     <li><a href="contactus.php">Contact Us</a></li>
                     <li><a href="logout.php">Logout</a></li>
                  </ul>
               </div>
            </div>
         </nav>
    </header> 

<div class="form">
</div>
</body>
</html>
