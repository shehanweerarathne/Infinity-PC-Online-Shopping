<?php 
   session_start();
   error_reporting(0);
   include('includes/config.php');
   if(strlen($_SESSION['login'])==0)
       {   
   header('location:login.php');
   }
   else{
   	if (isset($_POST['submit'])) {
   
   		mysqli_query($con,"update orders set 	paymentMethod='".$_POST['paymethod']."' where userId='".$_SESSION['id']."' and paymentMethod is null ");
   		unset($_SESSION['cart']); 
         header('location:index.php');
   	}
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Shopping Portal | Payment Method</title>
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/blogpage.css">
      <link rel="stylesheet" href="assets/css/shoppingcart.css">
      <link rel="stylesheet" href="assets/css/topbar.css">
      <link rel="stylesheet" href="assets/css/checkoutbox.css">
      <link rel="stylesheet" href="assets/css/checkoutbox.css">
      <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
      <link rel="stylesheet" href="assets/css/config.css">
   </head>
   <body class="cnt-home">
      <header class="header-style-1">
         <?php include('includes/topHeader.php');?>
         <?php include('includes/main-header.php');?>
         <?php include('includes/newMenu.php');?>

         <style>
            table {
            border-collapse: collapse;
            width: 100%;
            }
            th, td {
            text-align: left;
            padding: 8px;
            }
            tr:nth-child(even){background-color: #f2f2f2}
            th {
            background-color: #04AA6D;
            color: white;
            }
         </style>
      </header>
      <div class="body-content outer-top-bd">
         <div class="container">
           
                  <div class="col-md-12">
                     <div class="panel-group checkout-steps" id="accordion">
                        <div class="panel panel-default checkout-step-01">
                           <table id="table" cellpadding="0" cellspacing="0" border="1"  width="100%" >
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Warranty</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php $query=mysqli_query($con,"select products.*,orders.* from products join orders on orders.productId = products.id WHERE orders.orderSession = (SELECT MAX(orderSession) FROM orders)");
                                    $cnt=1;
                                    while($row=mysqli_fetch_array($query))
                                    {
                                    ?>									
                                 <tr>
                                    <td><?php echo htmlentities($cnt);?></td>
                                    <td><?php echo htmlentities($row['productName']);?></td>
                                    <td><?php echo htmlentities($row['warranty']);?></td>
                                    <td><?php echo htmlentities($row['quantity']);?></td>
                                    <td><?php echo htmlentities($row['productPrice']);?></td>
                                    <td><?php echo htmlentities($row['productPrice']*$row['quantity']);?></td>
                                    <?php $cnt=$cnt+1; } ?>
                                 </tr>
                                 
                           </table>
                           <div>
                            <h3>Total Payment: Rs.<span id="val"></span></h3>
                           </div>
                           
                           <script>
                              var table = document.getElementById("table"), sumVal = 0;
                              for(var i = 1; i < table.rows.length; i++)
                              {
                                  sumVal = sumVal + parseInt(table.rows[i].cells[5].innerHTML);
                              }
                              document.getElementById("val").innerHTML = + sumVal;
                              console.log(sumVal); 
                           </script>
                           <div class="panel-heading">
                              <h4 class="unicase-checkout-title">
                                 <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
                                 Select Payment Method
                                 </a>
                              </h4>
                           </div>
                           <script src="assets/js/jquery-1.11.1.min.js"></script>
                           <div id="collapseOne" class="panel-collapse collapse in">
                              <div class="panel-body">
                                 <!-- $query=($con,"SELECT * FROM `products` WHERE id = (SELECT productId FROM orders WHERE (userId = 1 AND paymentMethod IS NULL))"); -->
                                 <form name="payment" method="post">
                                    <div>
                                       <label><input type="radio" name="paymethod" value="Cash On Delivery" checked="checked"> Cash On Delivery</label>
                                    </div>
                                    <div class="form-a">a</div>
                                    <div>
                                       <label><input type="radio" name="paymethod" value="Bank Transfer"> Bank Transfer</label>
                                    </div>
                                    <div class="form-b" style="display: none">b</div>
                                    <div>
                                       <label><input type="radio" name="paymethod" value="Debit / Credit card"> Debit / Credit card </label>
                                    </div>
                                    <div class="form-c" style="display: none">
                                       <?php 
                                          // include('cardform.php');
                                          ?>
                                    </div>
                                    <script type="text/javascript">
                                       $(document).ready(function() {
                                       $('input[name=paymethod]:radio').change(function(e) {
                                          let value = e.target.value.trim()
                                       
                                          $('[class^="form"]').css('display', 'none');
                                       
                                          switch (value) {
                                             case 'Cash On Delivery':
                                             $('.form-a').show()
                                             break;
                                             case 'Bank Transfer':
                                             $('.form-b').show()
                                             break;
                                             case 'Debit / Credit card':
                                             $('.form-c').show()
                                             break;
                                             default:
                                             break;
                                          }
                                       })
                                       })
                                    </script>
                                    <input type="submit" value="Place Order" name="submit" class="btn btn-primary">
                                 </form>
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
      <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
   </body>
</html>
<?php } ?>