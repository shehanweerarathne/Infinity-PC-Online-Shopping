<?php
   session_start();
   error_reporting(0);
   include('includes/config.php');
   $cid=intval($_GET['cid']);
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
   
   ?>
<!DOCTYPE html>
</style>
<html lang="en">
   <head>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="keywords" content="MediaCenter, Template, eCommerce">
      <meta name="robots" content="all">
      <title>Product Category</title>
      <!-- Bootstrap Core CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- Customizable CSS -->
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/green.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
      <link rel="stylesheet" href="assets/css/owl.transitions.css">
      <!-- Icons/Glyphs -->
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <!-- Fonts --> 
      <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
   </head>
   <body class="cnt-home">
      <header>
         <?php include('des/top-header.php');?>
         <?php include('includes/main-header.php');?>
      </header>
      <div class="header-nav animate-dropdown">
         <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
               <div class="navbar-header">
                  <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
               </div>
               <div class="nav-bg-class">
                  <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                     <div class="nav-outer">
                        <ul class="nav navbar-nav">
                           <li class="active dropdown yamm-fw">
                              <a href="index.php" data-hover="dropdown" class="dropdown-toggle">Home</a>
                           </li>
                           <li class="dropdown yamm">
                              <a href="index.php" data-hover="dropdown" class="dropdown-toggle">Build Your PC</a>
                           </li>
                           <?php $sql=mysqli_query($con,"select id,categoryName  from category limit 6");
                              while($row=mysqli_fetch_array($sql))
                              {
                                  ?>
                           <li class="dropdown yamm">
                              <a href="category.php?cid=<?php echo $row['id'];?>"> <?php echo $row['categoryName'];?></a>
                           </li>
                           <?php } ?>
                        </ul>
                        <!-- /.navbar-nav -->
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      

         

<div class="body-content outer-top-xs">
   <div class='container'>
      <div class='row outer-bottom-sm'>
         <div class="control-group">
            <label class="control-label" for="basicinput">Processor</label>
           
               <select name="category" class="span8 tip" onChange="getSubcat(this.value);"  required>
                  <option value="">Select Processor</option>
                  <?php $query=mysqli_query($con,"select * from products where category='1'");
                     while($row=mysqli_fetch_array($query))
                     {?>
                  <option value="<?php echo $row['id'];?>"><div class="row">
                                		
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
                                             <div class="description"></div>
                                             <div>	
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
                                                      <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                      <i class="fa fa-shopping-cart"></i>													
                                                      </button>
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
                                 </div></option>
                  <?php } ?>
               </select>
            
         </div>
      </div>
      <!-- /.col -->
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
   </body>
</html>