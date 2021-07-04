<?php
   session_start();
   error_reporting(0);
   include('includes/config.php');
   $find="%{$_POST['product']}%";
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
   // COde for Wishlist
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      
      <title>Product Category</title>
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
      <link rel="stylesheet" href="assets/css/owl.transitions.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
     
   </head>
   <body class="cnt-home">
      <header class="header-style-1">
         <?php include('includes/topHeader.php');?>
         <?php include('includes/main-header.php');?>
         <?php include('includes/newmenu.php');?>
      </header>
      </div>
      <div class="body-content outer-top-xs">
         <div class='container'>
            <div class='row outer-bottom-sm'>
            
               <div class='col-md-12'>
        
                  
                  <div class="search-result-container">
                     <div id="myTabContent" class="tab-content">
                        <div class="tab-pane active " id="grid-container">
                           <div class="category-product  inner-top-vs">
                              <div class="row">
                                 <?php
                                    $ret=mysqli_query($con,"select * from products where productName like '$find'");
                                    $num=mysqli_num_rows($ret);
                                    if($num>0)
                                    {
                                    while ($row=mysqli_fetch_array($ret)) 
                                    {?>							
                                 <div class="col-sm-6 col-md-4 wow fadeInUp">
                                    <div class="products">
                                       <div class="product">
                                          <div class="product-image">
                                             <div class="image">
                                                <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><img  src="assets/images/blank.gif" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" alt="" width="200" height="300"></a>
                                             </div>
                                             <!-- /.image -->			                      		   
                                          </div>
                                          <!-- /.product-image -->
                                          <div class="product-info text-left">
                                             <h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
                                             <div class="product-price">	
                                                <span class="price">
                                                Rs. <?php echo htmlentities($row['productPrice']);?>			</span>
                                               
                                             </div>
                                             <!-- /.product-price -->
                                          </div>
                                          <!-- /.product-info -->
                                          <div class="cart clearfix animate-effect">
                                             <div class="action">
                                                <ul class="list-unstyled">
                                                   <li class="add-cart-button btn-group">
                                                      <?php if($row['productAvailability']=='In Stock'){?>
                                                      <a href="category.php?page=product&action=add&id=<?php echo $row['id']; ?>">
                                                      <button class="btn btn-primary" type="button">Add to cart</button></a>
                                                      <?php } else {?>
                                                      <div class="action" style="color:red">Out of Stock</div>
                                                      <?php } ?>
                                                   </li>
                                                </ul>
                                             </div>
                                             <!-- /.action -->
                                          </div>
                                          <!-- /.cart -->
                                       </div>
                                    </div>
                                 </div>
                                 <?php } } else {?>
                                 <div class="col-sm-6 col-md-4 wow fadeInUp">
                                    <h3>No Product Found</h3>
                                 </div>
                                 <?php } ?>	
                              </div>
                              <!-- /.row -->
                           </div>
                           <!-- /.category-product -->
                        </div>
                        <!-- /.tab-pane -->
                     </div>
                     <!-- /.search-result-container -->
                  </div>
                  <!-- /.col -->
               </div>
            </div>
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
      <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
      <script src="assets/js/bootstrap-select.min.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/scripts.js"></script>
   </body>
</html>