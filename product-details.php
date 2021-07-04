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
   					echo "<script>alert('Product has been added to the cart')</script>";
   		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
   		}else{
   			$message="Product ID is invalid";
   		}
   	}
   }
   $pid=intval($_GET['pid']);
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
      <title>Product Details</title>
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/blogpage.css">
      <link rel="stylesheet" href="assets/css/shoppingcart.css">
      <link rel="stylesheet" href="assets/css/topbar.css">
      <link rel="stylesheet" href="assets/css/checkoutbox.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
      <link rel="stylesheet" href="assets/css/config.css">
   </head>
   <body class="cnt-home">
      <header>
         <?php include('includes/topHeader.php');?>
         <?php include('includes/main-header.php');?>
         <?php include('includes/newmenu.php');?>
      </header>
      
      <div class="breadcrumb">
         <div class="container">
            <div class="breadcrumb-inner">
               <?php
                  $ret=mysqli_query($con,"select category.categoryName as catname,subCategory.subcategory as subcatname,products.productName as pname from products join category on category.id=products.category join subcategory on subcategory.id=products.subCategory where products.id='$pid'");
                  while ($rw=mysqli_fetch_array($ret)) {
                  
                  ?>
               <?php }?>
            </div>
         </div>
         <!-- /.container -->
      </div>
      <div class="body-content outer-top-xs">
      <div class='container'>
         <div class='row single-product outer-bottom-sm '>
           
            <?php 
               $ret=mysqli_query($con,"select * from products where id='$pid'");
               while($row=mysqli_fetch_array($ret))
               {
               
               ?>
            <div class='col-md-12'>
               <div class="row  wow fadeInUp">
                  <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                     <div class="product-item-holder size-big single-product-gallery small-gallery">
                        <div id="owl-single-product">
                           <div class="single-product-gallery-item" id="slide1">
                              <a data-lightbox="image-1" data-title="<?php echo htmlentities($row['productName']);?>" href="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>">
                              <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" width="370" height="350" />
                              </a>
                           </div>
                           <div class="single-product-gallery-item" id="slide1">
                              <a data-lightbox="image-1" data-title="<?php echo htmlentities($row['productName']);?>" href="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>">
                              <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" width="370" height="350" />
                              </a>
                           </div>
                           <!-- /.single-product-gallery-item -->
                           <div class="single-product-gallery-item" id="slide2">
                              <a data-lightbox="image-1" data-title="Gallery" href="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage2']);?>">
                              <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage2']);?>" />
                              </a>
                           </div>
                           <!-- /.single-product-gallery-item -->
                           <div class="single-product-gallery-item" id="slide3">
                              <a data-lightbox="image-1" data-title="Gallery" href="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage3']);?>">
                              <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage3']);?>" />
                              </a>
                           </div>
                        </div>
                        <!-- /.single-product-slider -->
                        <div class="single-product-gallery-thumbs gallery-thumbs">
                           <div id="owl-single-product-thumbnails">
                              <div class="item">
                                 <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                                 <img class="img-responsive"  alt="" src="assets/images/blank.gif" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" />
                                 </a>
                              </div>
                              <div class="item">
                                 <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide2">
                                 <img class="img-responsive" width="85" alt="" src="assets/images/blank.gif" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage2']);?>"/>
                                 </a>
                              </div>
                              <div class="item">
                                 <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide3">
                                 <img class="img-responsive" width="85" alt="" src="assets/images/blank.gif" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage3']);?>" height="200" />
                                 </a>
                              </div>
                           </div>
                           <!-- /#owl-single-product-thumbnails -->
                        </div>
                     </div>
                  </div>
                  <div class='col-sm-6 col-md-7 product-info-block'>
                        <div class="product-info">
                           <h1 class="name"></h1>
                          
                           <div class="rating-reviews m-t-20">
                              <div class="row">
                                 <div class="col-sm-3">
                                    <div class="rating rateit-small"></div>
                                 </div>
                                 <div class="col-sm-8">
                                    <div class="reviews">
                                       <a href="#" class="lnk"></a>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.row -->		
                           </div>
                           <div class="stock-container info-container m-t-10">
                           <h3><span><?php echo htmlentities($row['productName']);?></span></h3>

                              <div class="row">
                                 <div class="col-sm-3">
                                    <div class="stock-box">
                                       <span class="label">Availability :</span>
                                    </div>
                                 </div>
                                 <div class="col-sm-9">
                                    <div class="stock-box">
                                       <span class="value"><?php echo htmlentities($row['productAvailability']);?></span>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.row -->	
                           </div>
                           <div class="stock-container info-container m-t-10">
                              <div class="row">
                                 <div class="col-sm-3">
                                    <div class="stock-box">
                                       <span class="label">Product Brand :</span>
                                    </div>
                                 </div>
                                 <div class="col-sm-9">
                                    <div class="stock-box">
                                       <span class="value"><?php echo htmlentities($row['productCompany']);?></span>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.row -->	
                           </div>

                           <div class="stock-container info-container m-t-10">
                              <div class="row">
                                 <div class="col-sm-3">
                                    <div class="stock-box">
                                       <span class="label">Warranty</span>
                                    </div>
                                 </div>
                                 <div class="col-sm-9">
                                    <div class="stock-box">
                                       <span class="value"><?php echo htmlentities($row['warranty']);?></span>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.row -->	
                           </div>
                           
                           <div class="price-container info-container m-t-20">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="price-box">
                                       <span class="price">Rs. <?php echo htmlentities($row['productPrice']);?></span>
                                       
                                       <span class="price-strike">Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>
                                    </div>
                                 </div>
                                
                              </div>
                              <!-- /.row -->
                           </div>
                           <div class="cart clearfix animate-effect">
                                    <div class="action">
                                       <div class="add-cart-button btn-group">
                                          <?php if($row['productAvailability']=='In Stock'){?>
                                          </button>
                                          <a href="category.php?page=product&action=add&id=<?php echo $row['id']; ?>">
                                          <button class="btn btn-primary" type="button">Add to cart</button></a>
                                          <?php } else {?>
                                          <div class="action" style="color:red">Out of Stock</div>
                                          <?php } ?>
                                       </div>
                                    </div>
                                    <!-- /.action -->
                                 </div>
               <div class="product-tabs inner-bottom-xs  wow fadeInUp">
                     <div class="row">
                       
                        <div class="col-sm-9">
                        <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                              <li class="active"><h4>PRODUCT DESCRIPTION</h4></li>
                              
                           </ul>
                           <div class="tab-content">
                              <div id="description" class="tab-pane in active">
                                 <div class="product-tab">
                                    <p class="text"><?php echo $row['productDescription'];?></p>
                                 </div>
                              </div>
                              <!-- /.tab-pane -->
                              <div id="review" class="tab-pane">
                                 <div class="product-tab">
                                    <div class="product-reviews">
                                       
                                    </div>
                                    <!-- /.product-reviews -->
                                   
                                    <!-- /.cnt-form -->
                                    </div><!-- /.form-container -->
                                    </div><!-- /.review-form -->
                                    </div><!-- /.product-add-review -->										
                                 </div>
                                 <!-- /.product-tab -->
                              </div>
                              <!-- /.tab-pane -->
                           </div>
                           <!-- /.tab-content -->
                        </div>
                        <!-- /.col -->
                     </div>
                     <!-- /.row -->
                  </div>
            </div>
            <?php $cid=$row['category'];
               $subcid=$row['subCategory']; } ?>
         </div>
         <!-- /.col -->
         <div class="clearfix"></div>
      </div>
      <?php include('includes/footer.php');?>
      <script src="assets/js/jquery-1.11.1.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/echo.min.js"></script>
      <script src="assets/js/jquery.rateit.min.js"></script>
      <script src="assets/js/bootstrap-select.min.js"></script>
      <script src="assets/js/scripts.js"></script>
   </body>
</html>