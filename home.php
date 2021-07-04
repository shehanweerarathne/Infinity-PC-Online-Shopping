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
      <title>Shopping Portal Home Page</title>
      <!-- Bootstrap Core CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- Customizable CSS -->
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/green.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
      <link rel="stylesheet" href="assets/css/owl.transitions.css">
      <!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
      <link href="assets/css/lightbox.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/rateit.css">
      <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
      <link rel="shortcut icon" href="assets/images/favicon.ico">
   </head>
   <body class="cnt-home">
      <header class="header-style-1">
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
                           <div class="item" style="background-image: url(assets/images/sliders/slider1.png);">
                           </div>
                        </div>
                        <div class="full-width-slider">
                           <div class="item full-width-slider" style="background-image: url(assets/images/sliders/slider2.png);">
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- ============================================== INFO BOXES ============================================== -->
                 
               </div>
               <!-- /.homebanner-holder -->
            </div>
            <!-- /.row -->
            <div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs  wow fadeInUp">
              
               <div class="tab-content outer-top-xs">
                  <div class="tab-pane" id="books">
                     <div class="product-slider">
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                           <?php
                              $ret=mysqli_query($con,"select * from products where category=3");
                              while ($row=mysqli_fetch_array($ret)) 
                              {
                              ?>
                           <div class="item item-carousel">
                              <div class="products">
                                 <div class="product">
                                    <div class="product-image">
                                       <div class="image">
                                          <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                          <img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300" alt=""></a>
                                       </div>
                                       <!-- /.image -->			
                                    </div>
                                    <!-- /.product-image -->
                                    <div class="product-info text-left">
                                       <h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
                                       <div class="description"></div>
                                       <div class="product-price">	
                                          <span class="price">
                                          Rs. <?php echo htmlentities($row['productPrice']);?>			</span>
                                          <span class="price-before-discount">Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>
                                       </div>
                                       <!-- /.product-price -->
                                    </div>
                                    <!-- /.product-info -->
                                    <?php if($row['productAvailability']=='In Stock'){?>
                                    <div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart</a></div>
                                    <?php } else {?>
                                    <div class="action" style="color:red">Out of Stock</div>
                                    <?php } ?>
                                 </div>
                                 <!-- /.product -->
                              </div>
                              <!-- /.products -->
                           </div>
                           <!-- /.item -->
                           <?php } ?>
                        </div>
                        <!-- /.home-owl-carousel -->
                     </div>
                     <!-- /.product-slider -->
                  </div>
                  <div class="tab-pane" id="furniture">
                     <div class="product-slider">
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                           <?php
                              $ret=mysqli_query($con,"select * from products where category=5");
                              while ($row=mysqli_fetch_array($ret)) 
                              {
                              ?>
                           <div class="item item-carousel">
                              <div class="products">
                                 <div class="product">
                                    <div class="product-image">
                                       <div class="image">
                                          <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                          <img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300" alt=""></a>
                                       </div>
                                    </div>
                                    <div class="product-info text-left">
                                       <h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
                                       <div class="description"></div>
                                       <div class="product-price">	
                                          <span class="price">
                                          Rs.<?php echo htmlentities($row['productPrice']);?>			</span>
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
                  </div>
               </div>
            </div>
            <!-- ============================================== TABS ============================================== -->
            <div class="sections prod-slider-small outer-top-small">
               <div class="row">
                  <div class="col-md-6">
                     <section class="section">
                        <h3 class="section-title">Smart Phones</h3>
                        <div class="owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme" data-item="2">
                           <?php
                              $ret=mysqli_query($con,"select * from products where category=1");
                              while ($row=mysqli_fetch_array($ret)) 
                              {
                              ?>
                           <div class="item item-carousel">
                              <div class="products">
                                 <div class="product">
                                    <div class="product-image">
                                       <div class="image">
                                          <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300"></a>
                                       </div>
                                       <!-- /.image -->			                        		   
                                    </div>
                                    <!-- /.product-image -->
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
                           <?php }?>
                        </div>
                     </section>
                  </div>
                  <div class="col-md-6">
                     <section class="section">
                        <h3 class="section-title">Laptops</h3>
                        <div class="owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme" data-item="2">
                           <?php
                              $ret=mysqli_query($con,"select * from products where category=4 and subCategory=6");
                              while ($row=mysqli_fetch_array($ret)) 
                              {
                              ?>
                           <div class="item item-carousel">
                              <div class="products">
                                 <div class="product">
                                    <div class="product-image">
                                       <div class="image">
                                          <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="300" height="300"></a>
                                       </div>
                                       <!-- /.image -->			                        		   
                                    </div>
                                    <!-- /.product-image -->
                                    <div class="product-info text-left">
                                       <h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
                                       <div class="rating rateit-small"></div>
                                       <div class="description"></div>
                                       <div class="product-price">	
                                          <span class="price">
                                          Rs .<?php echo htmlentities($row['productPrice']);?>			</span>
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
                           <?php }?>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
            <!-- ============================================== TABS : END ============================================== -->
            <?php include('includes/brands-slider.php');?>
         </div>
      </div>
      <?php include('includes/footer.php');?>
      <script src="assets/js/jquery-1.11.1.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/echo.min.js"></script>
      <script src="assets/js/jquery.easing-1.3.min.js"></script>
      <script src="assets/js/bootstrap-slider.min.js"></script>
      <script src="assets/js/jquery.rateit.min.js"></script>
      <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
      <script src="assets/js/bootstrap-select.min.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/scripts.js"></script>
      <!-- For demo purposes – can be removed on production -->
      <script src="switchstylesheet/switchstylesheet.js"></script>
      <script>
         $(document).ready(function(){ 
         	$(".changecolor").switchstylesheet( { seperator:"color"} );
         	$('.show-theme-options').click(function(){
         		$(this).parent().toggleClass('open');
         		return false;
         	});
         });
         
         $(window).bind("load", function() {
            $('.show-theme-options').delay(2000).trigger('click');
         });
      </script>
      <!-- For demo purposes – can be removed on production : End -->
   </body>
</html>