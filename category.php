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
         <?php include('includes/top-header.php');?>
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
      </div><!-- /.breadcrumb -->
     
      <div class="body-content outer-top-xs">
         <div class='container'>
            <div class='row outer-bottom-sm'>
               <div class='col-md-3 sidebar'>
                  <div class="side-menu animate-dropdown outer-bottom-xs">
                     <div class="side-menu animate-dropdown outer-bottom-xs">
                        <div class="head">Sort By</div>
                        <nav class="yamm megamenu-horizontal" role="navigation">
                           <ul class="nav">
                              <li class="dropdown menu-item">
                                 <?php $sql=mysqli_query($con,"select id,subcategory  from subcategory where categoryid='$cid'");
                                    while($row=mysqli_fetch_array($sql))
                                    {
                                        ?>
                                 <a href="category.php?scid=<?php echo $row['id'];?>" class="dropdown-toggle">
                                 <?php echo $row['subcategory'];?></a>
                                 <?php }?>
                              </li>
                              <li class="dropdown menu-item">
                              <a href='?order=productName' class="dropdown-toggle">Name A-Z</a>
                              </li>
                              <li class="dropdown menu-item">
                              <a href='?order=productName' class="dropdown-toggle">Name Z-A</a>
                              </li>
                              <li class="dropdown menu-item">
                              <a href='?order=productPrice' class="dropdown-toggle">Price High-Low</a>
                              </li>
                              <li class="dropdown menu-item">
                              <a href='?order=productPrice' class="dropdown-toggle">Price Low-High</a>
                              </li>                  

                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="sidebar-module-container">
                  </div>
                  <!-- /.sidebar-module-container -->
               </div>
               <!-- /.sidebar -->
               <div class='col-md-9'>
                  <div class="search-result-container">
                     <div id="myTabContent" class="tab-content">
                        <div class="tab-pane active " id="grid-container">
                           <div class="category-product  inner-top-vs">
                              <div class="row">
                                 <?php
                                 
                                 if(isset($_GET['order'])){
                                    $order = $_GET['order'];
                                 }else{
                                    $order = 'productName';
                                 }
                                 
                                 
                                    $ret=mysqli_query($con,"select * from products where category='$cid' order by $order");
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
                                 </div>
                                 <?php } } else {?>
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
      <script src="switchstylesheet/switchstylesheet.js"></script>
   </body>
</html>