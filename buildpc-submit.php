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
   
   </head>
   <body class="cnt-home">
      <header>
        
      </header>
     
    
      <?php 
         $ret=mysqli_query($con,"select * from products where id='$pid'");
         while($row=mysqli_fetch_array($ret))
         {
         
         ?>
      <div class='col-md-12'>
      
         <h1 class="name"></h1>
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
            <?php $cid=$row['category'];
               $subcid=$row['subCategory']; } ?>
         </div>
         <!-- /.col -->
         <div class="clearfix"></div>
      </div>
     
   </body>
</html>
