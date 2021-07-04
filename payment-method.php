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
      
      <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
     
   </head>
   <body class="cnt-home">
      <header class="header-style-1">
         <?php include('includes/topHeader.php');?>
         <?php include('includes/main-header.php');?>
       
      </header>
      <div class="body-content outer-top-bd">
         <div class="container">
            <div class="checkout-box faq-page inner-bottom-sm">
               <div class="row">
                  <div class="col-md-12">
                     <div class="panel-group checkout-steps" id="accordion">
                        <div class="panel panel-default checkout-step-01">
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
									 
                                   
                                   
                                    <div class="form-c" style="display: none">c</div>
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