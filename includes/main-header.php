<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php 
   if(isset($_Get['action'])){
   	if(!empty($_SESSION['cart'])){
   	foreach($_POST['quantity'] as $key => $val){
   		if($val==0){
   			unset($_SESSION['cart'][$key]);
   		}else{
   			$_SESSION['cart'][$key]['quantity']=$val;
   		}
   	}
   	}
   }
   ?>
<div class="main-header">
<div class="container">
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
         <div class="logo">
            <a href="index.php">
            <img src="img/logo.png" alt="InfinityPClogo" width="150"
         height="150">
            </a>
         </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
         <div class="search-area">
            <form name="search" method="post" action="searchResult.php">
               <div class="control-group">
                  <input class="search-field" placeholder="Search for anything..." name="product" required="required" />
                  <button class="search-button" type="submit" name="search"></button>    
               </div>
            </form>
         </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
         <?php
            if(!empty($_SESSION['cart'])){
            	?>
         <div class="dropdown dropdown-cart">
            <a href="my-cart.php" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
               <div class="items-cart-inner">
                  <div class="total-price-basket">
                     <span class="lbl">CART: </span>
                     <span class="total-price">
                     <span class="sign">Rs.</span>
                     <span class="value"><?php echo $_SESSION['tp']; ?></span>
                     </span>
                  </div>
                  <a href="my-cart.php" class="btn btn-upper btn-primary btn-block m-t-20">View Cart</a>	
               </div>
            </a> 
            <ul class="dropdown-menu">
               <?php
                  $sql = "SELECT * FROM products WHERE id IN(";
                  foreach($_SESSION['cart'] as $id => $value){
                  $sql .=$id. ",";
                  }
                  $sql=substr($sql,0,-1) . ") ORDER BY id ASC";
                  $query = mysqli_query($con,$sql);
                  $totalprice=0;
                  $totalqunty=0;
                  if(!empty($query)){
                  while($row = mysqli_fetch_array($query)){
                  $quantity=$_SESSION['cart'][$row['id']]['quantity'];
                  $subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['productPrice']+$row['shippingCharge'];
                  $totalprice += $subtotal;
                  $_SESSION['qnty']=$totalqunty+=$quantity;
                  
                  ?>
              
              
                  <?php } }?>
                  
             
                 
                 
        
        
      </div>
      <?php } else { ?>
      
         <?php }?>
         </div>
      </div>
      
   </div>
   
</div>