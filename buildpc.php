<?php
   session_start();
   error_reporting(0);
   include('includes/config.php');
   if(isset($_POST['submit']))
{
   if(strlen($_SESSION['login'])==0)
   {   
   header('location:login.php');
   }
   else{
      $category=$_POST['category'];
      $cpu=$_POST['cpu'];
      $mboard=$_POST['mboard'];
      $ram=$_POST['ram'];
      $hdd=$_POST['hdd'];
      $psu=$_POST['psu'];
      $casing=$_POST['case'];
      $cooler=$_POST['cooler'];
      $gpu=$_POST['gpu'];
   // mysqli_query($con,"insert into pcbuildorders(userId,category,cpu,mboard,ram,hdd,psu,casing,cooler,gpu) values('0','1','2','3','4','5','6','7','7','8')");
      mysqli_query($con,"insert into pcbuildorders(userId,category,cpu,mboard,ram,hdd,psu,casing,cooler,gpu) values('".$_SESSION['id']."','$category','$cpu','$mboard','$ram','$hdd','$psu','$casing','$cooler','$gpu')");
      header('location:buildpc-payment-method.php');

}}

   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
      <title>Build Your PC</title>
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
      <link rel="stylesheet" href="assets/css/owl.transitions.css">
      <link href="assets/css/lightbox.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

      <script>
function getSubcat(val) {
	$.ajax({
	type: "POST",
	url: "get_subcat.php",
	data:'cat_id='+val,
	success: function(data){
		$("#subcategory").html(data);
	}
	});
}



</script>	
   </head>
   <body class="cnt-home">
      <header>
         <?php include('includes/topheader.php');?>
         <?php include('includes/main-header.php');?>
         <?php include('includes/newmenu.php');?>
      </header>
      <div class="body-content outer-top-bd">
         <div class="container">
            <div class="checkout-box inner-bottom-sm">
               <div class="row">
                  <!-- /.sidebar-module-container -->
               </div>
               <div class="col-md-9">
                  <div class="panel-group checkout-steps" id="accordion">
                     <!-- checkout-step-01  -->
                     <div class="panel panel-default checkout-step-01">
                        <!-- panel-heading -->
                        <div class="panel-heading">
                           <h4 class="unicase-checkout-title">
                              <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
                              Build Your PC
                              </a>
                           </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                        <form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
                                 
                        <table class="table table-bordered">
                              <thead>
                                 <tr>
                                    
                                    <th class="cart-description item">Product Category</th>
                                    <th class="cart-product-name item">Product Name</th>
                              
                                    
                                 </tr>
                              </thead><!-- /thead -->
                              
                              <tbody>
                    

                              <tr>
                                    
                                    <td>
                                    <label class="control-label" for="basicinput">System Category</label>

                                    </td>


                                    <td>
                                    <select name="category" class="span8 tip">
                                       <option value="">Select Category</option> 
                                       

                                       <option value="Office Desktop">Office Desktop</option>
                                       <option value="Home Desktop">Home Desktop</option>
                                       <option value="Gaming Lite">Gaming Lite</option>
                                       <option value="Gaming Pro">Gaming Pro</option>
                                       <option value="Gaming Ultimate">Gaming Ultimate</option>
                                       
                                    </select>
                                    </td>
                                  
                                 </tr>

                                

                                 <tr>
                                    
                                    <td>
                                    <label class="control-label" for="basicinput">MotherBoard</label>

                                    </td>


                                    <td>
                                    <select name="category" class="span8 tip" onChange="getSubcat(this.value); getBrand(this.value);"  required>
                                    <option value="">Select Category</option> 
                                    <?php $query=mysqli_query($con,"select * from products where category=2");
                                    while($row=mysqli_fetch_array($query))
                                    {?>
                                    <option value="<?php echo $row['subCategory'];?>"><?php echo $row['productName'];?></option>
                                    <?php } ?>
                                    </select>
                                    </td>
                                  
                                 </tr>

                                 <tr>
                                    
                                    <td>
                                    <label class="control-label" for="basicinput">Processor</label>

                                    </td>


                                    <td>
                                    <select   name="subcategory"  id="subcategory" class="span8 tip" required>
                                    </select>
                                    </td>
                                  
                                 </tr>

                                 <tr>
                                    
                                    <td>
                                    <label class="control-label" for="basicinput">Memory</label>

                                    </td>


                                    <td>
                                    <select name="ram" class="span8 tip" onChange=" "  >
                                       <option value="">Select RAM</option> 
                                       <?php $query=mysqli_query($con,"select * from products where category=3");
                                       while($row=mysqli_fetch_array($query))
                                       {?>

                                       <option value="<?php echo $row['id'];?>"><?php echo $row['productName'];?></option>
                                       <?php } ?>
                                    </select>
                                    </td>
                                  
                                 </tr>

                                
                                 <tr>
                                    
                                    <td>
                                    <label class="control-label" for="basicinput">Storage</label>

                                    </td>


                                    <td>
                                    <select name="hdd" class="span8 tip" onChange=" ">
                                       <option value="">Select Storage</option> 
                                       <?php $query=mysqli_query($con,"select * from products where category=4");
                                       while($row=mysqli_fetch_array($query))
                                       {?>

                                       <option value="<?php echo $row['id'];?>"><?php echo $row['productName'];?></option>
                                       <?php } ?>
                                    </select>
                                    </td>
                                  
                                 </tr>

                                 
                                 <tr>
                                    
                                    <td>
                                    <label class="control-label" for="basicinput">Power Supply</label>

                                    </td>


                                    <td>
                                    <select name="psu" class="span8 tip" onChange=" ">
                                       <option value="">Select Power Supply</option> 
                                       <?php $query=mysqli_query($con,"select * from products where category=5");
                                       while($row=mysqli_fetch_array($query))
                                       {?>

                                       <option value="<?php echo $row['id'];?>"><?php echo $row['productName'];?></option>
                                       <?php } ?>
                                    </select>
                                    </td>
                                  
                                 </tr>

                                 <tr>
                                    
                                    <td>
                                    <label class="control-label" for="basicinput">Casing</label>

                                    </td>


                                    <td>
                                    <select name="case" class="span8 tip" onChange=" ">
                                       <option value="">Select Casing</option> 
                                       <?php $query=mysqli_query($con,"select * from products where category=6");
                                       while($row=mysqli_fetch_array($query))
                                       {?>

                                       <option value="<?php echo $row['id'];?>"><?php echo $row['productName'];?></option>
                                       <?php } ?>
                                    </select>
                                    </td>
                                  
                                 </tr>

                                 <tr>
                                    
                                    <td>
                                    <label class="control-label" for="basicinput">CPU Cooler</label>

                                    </td>


                                    <td>
                                    <select name="cooler" class="span8 tip" onChange=" ">
                                       <option value="">Select CPU Cooler</option> 
                                       <?php $query=mysqli_query($con,"select * from products where category=7");
                                       while($row=mysqli_fetch_array($query))
                                       {?>

                                       <option value="<?php echo $row['id'];?>"><?php echo $row['productName'];?></option>
                                       <?php } ?>
                                    </select>
                                    </td>
                                  
                                 </tr>

                                 <tr>
                                    
                                    <td>
                                    <label class="control-label" for="basicinput">Grapics Card</label>

                                    </td>


                                    <td>
                                    <select name="gpu" class="span8 tip" onChange=" ">
                                       <option value="">Select Graphic card</option> 
                                       <?php $query=mysqli_query($con,"select * from products where category=8");
                                       while($row=mysqli_fetch_array($query))
                                       {?>

                                       <option value="<?php echo $row['id'];?>"><?php echo $row['productName'];?></option>
                                       <?php } ?>
                                    </select>
                                    </td>
                                  
                                 </tr>

                                 <tr>
                                          <td>
                                          <div class="cart-checkout-btn pull-right">
							                        <button type="submit" name="submit" class="btn btn-primary">Place PC Build Order</button>
						
						                        </div>
                                          
                                          </td>
                                 </tr>

                              </tbody>
                             
                              <tfoot>
                                 <tr>
                                    <td colspan="7">
                                       
                                    </td>
                                 </tr>
                              </tfoot>
                              
                           </table>
                           
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
      <script src="assets/js/echo.min.js"></script>
      <script src="assets/js/jquery.easing-1.3.min.js"></script>
      <script src="assets/js/bootstrap-slider.min.js"></script>
      <script src="assets/js/jquery.rateit.min.js"></script>
      <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
      <script src="assets/js/bootstrap-select.min.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/scripts.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   </body>
</html>