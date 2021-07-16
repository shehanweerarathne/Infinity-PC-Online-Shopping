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
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/blogpage.css">
      <link rel="stylesheet" href="assets/css/shoppingcart.css">
      <link rel="stylesheet" href="assets/css/topbar.css">
      <link rel="stylesheet" href="assets/css/checkoutbox.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
      <link rel="stylesheet" href="assets/css/owl.transitions.css">
      <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
   </head>
   <body class="cnt-home">
      <header>
         <?php include('includes/topHeader.php');?>
         <?php include('includes/main-header.php');?>
         <?php include('includes/newmenu.php');?>
      </header>
      <div class="body-content outer-top-xs" id="top-banner-and-menu">
      <div class="container">
         <div class="furniture-container homepage-container">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                  <?php include('includes/sideNavi.php');?>
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
            <div class='col-md-12'>

               <div class="row">
                  <div>
                     <h1 style="text-align:center;">New Arrivals</h1>
                  </div>
                  <div class="tab-pane">
                     <div class="product-slider">
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                           <?php
                              $ret=mysqli_query($con,"select * from products order by ID DESC LIMIT 4");
                              while ($row=mysqli_fetch_array($ret)) 
                              {
                              ?>
                           <div class="item item-carousel">
                              <div class="products">
                                 <div class="product">
                                    <div class="product-image">
                                       <div class="image">
                                          <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                          <img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="150" alt=""></a>
                                       </div>
                                    </div>
                                    <div class="product-info text-left">
                                       <h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
                                       <div class="description"></div>
                                       <div class="product-price">	
                                          <span class="price">
                                          Rs. <?php echo htmlentities($row['productPrice']);?>			</span>
                                       </div>
                                    </div>
                                    <?php if($row['productAvailability']=='In Stock'){?>
                                    <div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart</a></div>
                                    <?php } else {?>
                                    <div class="action" style="color:red">Out of Stock</div>
                                    <?php } ?>
                                 </div>
                              </div>
                           </div>
                           <?php } ?>
                        </div>
                     </div>
                  </div>
                  <br><br>
                  <div class="container">
                  <div>
                     <h1 style="text-align:center;">Todays Deal</h1>
                  </div>

                  <div class="tab-pane">
                     <div class="product-slider">
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                           <?php
                              $ret=mysqli_query($con,"select * from products where productPriceBeforeDiscount < productPrice order by ID DESC LIMIT 4");
                              while ($row=mysqli_fetch_array($ret)) 
                              {
                              ?>
                           <div class="item item-carousel">
                              <div class="products">
                                 <div class="product">
                                    <div class="product-image">
                                       <div class="image">
                                          <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                          <img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="150" alt=""></a>
                                       </div>
                                    </div>
                                    <div class="product-info text-left">
                                       <h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
                                       <div class="description"></div>
                                       <div class="product-price">	
                                          <span class="price">
                                          Rs. <?php echo htmlentities($row['productPrice']);?>			</span>
                                          <span class="price-before-discount">Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>
                                       </div>
                                    </div>
                                    <?php if($row['productAvailability']=='In Stock'){?>
                                    <div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart</a></div>
                                    <?php } else {?>
                                    <div class="action" style="color:red">Out of Stock</div>
                                    <?php } ?>
                                 </div>
                              </div>
                           </div>
                           <?php } ?>
                        </div>
                     </div>
                  </div></div><br><br>
                  <div class="container">
                  <div>
                     <h1 style="text-align:center;">Best Selling</h1>
                  </div>

                  <div class="tab-pane">
                     <div class="product-slider">
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                           <?php
                              $ret=mysqli_query($con,"select * from products order by ID DESC LIMIT 4");
                              while ($row=mysqli_fetch_array($ret)) 
                              {
                              ?>
                           <div class="item item-carousel">
                              <div class="products">
                                 <div class="product">
                                    <div class="product-image">
                                       <div class="image">
                                          <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                          <img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="150" alt=""></a>
                                       </div>
                                    </div>
                                    <div class="product-info text-left">
                                       <h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
                                       <div class="description"></div>
                                       <div class="product-price">	
                                          <span class="price">
                                          Rs. <?php echo htmlentities($row['productPrice']);?>			</span>
                                       </div>
                                    </div>
                                    <?php if($row['productAvailability']=='In Stock'){?>
                                    <div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart</a></div>
                                    <?php } else {?>
                                    <div class="action" style="color:red">Out of Stock</div>
                                    <?php } ?>
                                 </div>
                              </div>
                           </div>
                           <?php } ?>
                        </div>
                     </div>
                  </div>
                                       </div>
               </div>
            </div>
            
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