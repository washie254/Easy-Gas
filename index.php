<?php include("auth.php"); //include auth.php file on all secure pages ?>
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
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	      <header>
         <div id="topbar">
            <div class="line">
               <div class="s-12 m-6 l-6">
                  <p>Welcome Back: <strong> <?php echo $_SESSION['username']; ?>! </strong> </p> 
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
                     <li class="active-item"><a href="#services">Home</a></li>
                      <li><a href="#about-us">About Us</a></li>
                     <li><a href="cart.php">Dashboard</a></li>
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

<br>


 <!-- SERVICES -->
         <div id="services">
            <div class="line">
               <h2 class="section-title">What we do</h2>
               <div class="margin">
                  <div class="s-12 m-6 l-4 margin-bottom">
                     <i class="icon-vector"></i>
                     <div class="service-text">
                        <h3>We Provide</h3>
                        <p>We link you up to your favorite Liquid Petrolium Gas brand. Be it buying a new cylinder or just refilling, at <strong>Easy Gas</strong> you're all sorted <strong>:)</strong></p>
                     </div>
                  </div>
                  <div class="s-12 m-6 l-4 margin-bottom">
                     <i class="icon-eye"></i>
                     <div class="service-text">
                        <h3>We look to the future</h3>
                        <p>The future of Liquid petrolium Gas is becoming a reality. Here at Easy Gas, we are trying to better the future by manintaining ease access to LPG, and the safety usage of the product.</p>
                     </div>
                  </div>
                  <div class="s-12 m-12 l-4 margin-bottom">
                     <i class="icon-random"></i>
                     <div class="service-text">
                        <h3>We Provide Variety & Safety </h3>
                        <p>Easing the buying process of liquid petrolium Gas is becoming a reality, but most important is also improving the safety measure in handling the product. we provide useful information on Safety handling of LPG :</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>




 <!-- ABOUT US -->
         <div id="about-us">
            <div class="s-12 m-12 l-6 media-container">
               <img src="img/about.jpg" alt="">
            </div>
            <article class="s-12 m-12 l-6">
               <h2>We are<br>LPG providers with content &<br> Quality</h2>
               <p>we value our customers, and their happiness is our happiness. we ensure you alwaysget what you deserve. <br> 
                  we entrust that  you are always sorted out with just a clic, regardless of your location
               </p>
               <div class="about-us-icons">
                  <i class="icon-paperplane_ico"></i> <i class="icon-trophy"></i> <i class="icon-clock"></i>
               </div>
            </article>
         </div>

        




</body>
<footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Easy Gas 2017, Your Ultimate Gas Providers</p>
               <p>Contact Us incase of any Clarifications.</p>
            </div>
            <div class="s-12 l-6">
               <a class="right" href="contactus.php" title="Contact Our Team">Contact Us<br> by Responsee Team</a>
            </div>
         </div>
      </footer>
</html>
