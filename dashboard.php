
<?php
require('db.php');
include("auth.php"); //include auth.php file on all secure pages 

session_start();
$connect = mysqli_connect("localhost","root","","register");

if(isset($_POST["add_to_cart"]))
{
   if(isset($_SESSION["shopping_cart"]))
   {
      $item_array_id = array_column($_SESSION["shopping_cart"], "item_id")

     if(!in_array($_GET["id"], $item_array_id))
      {
         $count = count($_SESSION["shopping_cart"]);
         $item_array = array(
         'item_id'   => $_GET["id"],
         'item_name' => $_POST["hidden_name"],
         'item_price' => $_POST["hidden_price"],
         'item_quantity' =>$_POST["quantity"]
      );
         $_SESSION["shopping_cart"][$count] = $item_array;
      }
      else
      {
         echo '<script>alert("Item Already Added")</script>';
         echo '<script>window.location = "dashboard.php"</script>';
      }

   }
   else
   {
      $item_array = array(
         'item_id'   => $_GET["id"],
         'item_name' => $_POST["hidden_name"],
         'item_price' => $_POST["hidden_price"],
         'item_quantity' =>$_POST["quantity"]
      );
      $_SESSION["shopping_cart"][0] = $item_array;
   }
}

if(isset($_GET["action"]))
{
   if($_GET["action"] == "delete")
   {
      foreach ($_SESSION["shopping_cart"] as $keys => $values )
      {
         if($values["item_id"] == $_GET["id"])
         {
            unset($_SESSION["shopping_cart"][$keys]);
            echo '<script>alert("Item Removed")</script>';
            echo ' <script>window.location = "dashboard.php"</script>';
         }
      }
   }
}

?>
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
                     <li><a href="dashboard.php">Dashboard</a></li>
                     <li><a href="#about-us">About Us</a></li>
                     <li><a href="#our-work">Our Work</a></li>
                     <li><a href="contactus.php">Contact Us</a></li>
                     <li><a href="logout.php">Logout</a></li>
                  </ul>
               </div>
            </div>
         </nav>
   </header> 
   
   <br />
   <div class="container" style="width:700px;">
      <h3 align="centre">Shopping Cart</h3><br />

      <?php 
      $query = "SELECT * FROM products ORDER BY pid  ASC";
      $result = mysql_query($connect, $query);
      if(mysql_num_rows($result) > 0)
      {
         while ($row = mysql_fetch_array($result)) {
          ?>
          <div class = "col-md-4">
             <form method="post"  action="dashboard.php?action=add&id=<?php echo $row["id"];?>">
                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                   <img src="<?php echo $row["image"]; ?>"class="img-responsive" /><br />
                   <h4 class="text-info"><?php echo $row["name"]; ?> </h4>
                   <h4 class="text-danger">$ <?php echo $row["price"]; ?> </h4>
                   <input type="text" name="quantity" class="form-control" value="1" />
                   <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                   <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                   <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart" /> 
                </div>
             </form>
          </div>

          <php
         }
      }
      ?>

   </div>
   <br />
   <div style = "clear:both"></div>
    <br />
   <h3>Order Details</h3>
    <div class="table-responsive">
      <table class ="table table-bordered">
         <tr>
            <th width = "40%"> Item Name</th>
            <th width = "10%"> Quantity</th>
            <th width = "20%"> Price</th>
            <th width = "15%"> Total</th>
            <th width = "5%"> Action</th>
         </tr>
         <?php
           if(!empty($_SESSION["shopping_cart"]))
           {
             $total = 0;
             foreach ($_SESSION ["shopping_cart"] as $keys => $values)
             {
               ?>
               <tr>
                  <td><?php echo $values["item_name"];?></td>
                  <td><?php echo $values["item_quantity"];?></td>
                  <td><?php echo $values["item_price"];?></td>
                  <td><?php number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                  <td><a href="dashboard.php?action=delete&id=<?php echo $values["item_id"]; ?>"> <span class="text-danger">RE
                  Remove</span></a></td>
               </tr>

               <?php 
                 $total  = $total + ($values["item_quantity"]* $values["item_price"]);
             }
             ?>

             <tr>
                <td colspan="3" align="right"> Total </td>
                <td align="right" $ <?php echo number_format($total,2);?>></td>
             </tr>

            <?php 

           }

         ?>
      </table>
    </div>
</body>
</html>