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
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
      <link rel="stylesheet" href="assets/css/config.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
   </head>
   <body class="cnt-home">
      <header>
         <?php include('includes/top-header.php');?>
         <?php include('includes/main-header.php');?>
         <?php include('includes/menu-bar.php');?>
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
            <div class='col-md-9'>
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
                        <h1 class="name"><?php echo htmlentities($row['productName']);?></h1>
                        <?php $rt=mysqli_query($con,"select * from productreviews where productId='$pid'");
                           $num=mysqli_num_rows($rt);
                           {
                           ?>		
                        <?php } ?>
                        <div class="price-container info-container m-t-20">
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="price-box">
                                    <span>Rs. <?php echo htmlentities($row['productPrice']);?></span>
                                 </div>
                              </div>
                           </div>
                           <!-- /.row -->
                        </div>
                        <!-- /.price-container -->
                        <div class="quantity-container info-container">
                           <div class="row">
                              <div class="col-sm-2">
                                 <span class="label">Qty :</span>
                              </div>
                              <div class="col-sm-2">
                                 <div class="cart-quantity">
                                    <div class="quant-input">
                                       <div class="arrows">
                                          <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                          <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                       </div>
                                       <input type="text" value="1">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-7">
                                 <?php if($row['productAvailability']=='In Stock'){?>
                                 <a href="product-details.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="btn btn-dark"> ADD TO CART</a>
                                 <?php } else {?>
                                 <div class="action" style="color:red">Out of Stock</div>
                                 <?php } ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="product-tabs inner-bottom-xs  wow fadeInUp">
                  <div class="row">
                     <div class="col-sm-3">
                        <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                           <li><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                        </ul>
                     </div>
                     <div class="col-sm-9">
                        <div class="tab-content">
                           <div id="description" class="tab-pane in active">
                              <div class="product-tab">
                                 <p class="text"><?php echo $row['productDescription'];?></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
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