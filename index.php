<?php
   session_start();
   error_reporting(0);
   include('includes/config.php');
   if(isset($_GET['action']) && $_GET['action']=="add"){
   	$id=intval($_GET['id']);
   	if(isset($_SESSION['cart'][$id])){
   		$_SESSION['cart'][$id]['quantity']++;
   	}else{
   		$sql_p="SELECT * FROM products WHERE id={$id}";
   		$query_p=mysqli_query($con,$sql_p);
   		if(mysqli_num_rows($query_p)!=0){
   			$row_p=mysqli_fetch_array($query_p);
   			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
   		
   		}else{
   			$message="Product ID is invalid";
   		}
   	}
   		echo "<script>alert('Product has been added to the cart')</script>";
   		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
   }
   
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
      <meta name="description" content="">
      <title>INFINITY PC SOLUTIONS</title>
      <!-- Bootstrap Core CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
      <link rel="stylesheet" href="assets/css/owl.transitions.css">
      <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
      <!-- Favicon -->
   </head>
   <body class="cnt-home">
      <header>
         <?php include('includes/top-header.php');?>
         <?php include('includes/main-header.php');?>
         <?php include('includes/menu-bar.php');?>
      </header>
      <div class="body-content outer-top-xs" id="top-banner-and-menu">
      <div class="container">
         <div class="furniture-container homepage-container">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                  <?php include('includes/side-menu.php');?>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                  <div id="hero" class="homepage-slider3">
                     <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                        <div class="full-width-slider">
                           <div class="item" style="background-image: url(assets/images/sliders/slider1.jpg);">
                           </div>
                        </div>
                        <div class="full-width-slider">
                           <div class="item full-width-slider" style="background-image: url(assets/images/sliders/slider2.jpg);">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="sections prod-slider-small outer-top-small">
               <div class="row">
                  <div>
                     <h1>New Arrivals</h1>
                  </div>
                  <div>
                     <h1>Todays Deal</h1>
                  </div>
                  <div>
                     <h1>Best Selling</h1>
                  </div>
               </div>
            </div>
            <?php include('includes/brands-slider.php');?>
         </div>
      </div>
      <?php include('includes/footer.php');?>
      <script src="assets/js/jquery-1.11.1.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
      <script src="assets/js/bootstrap-select.min.js"></script>
      <script src="assets/js/scripts.js"></script>
   </body>
</html>