<?php
   session_start();
   error_reporting(0);
   include('includes/config.php');
   if(strlen($_SESSION['login'])==0)
       {   
   header('location:login.php');
   }
   else{
   	if(isset($_POST['update']))
   	{
   		$name=$_POST['name'];
   		$contactno=$_POST['contactno'];
         $sql=mysqli_query($con,"SELECT password FROM  users where password='".md5($_POST['updatecpass'])."' && id='".$_SESSION['id']."'");
         $num=mysqli_fetch_array($sql);
         if($num>0){
   		$query=mysqli_query($con,"update users set name='$name',contactno='$contactno' where id='".$_SESSION['id']."'");
   		if($query)
   		{
   echo "<script>alert('Your info has been updated');</script>";
   		}
      }
      else
      {
         echo "<script>alert('Current Password not match !!');</script>";
      }
   	}
   
   
   date_default_timezone_set('Asia/Kolkata');
   $currentTime = date( 'd-m-Y h:i:s A', time () );
   
   
   if(isset($_POST['submit']))
   {
   $sql=mysqli_query($con,"SELECT password FROM  users where password='".md5($_POST['cpass'])."' && id='".$_SESSION['id']."'");
   $num=mysqli_fetch_array($sql);
   if($num>0)
   {
    $con=mysqli_query($con,"update students set password='".md5($_POST['newpass'])."', updationDate='$currentTime' where id='".$_SESSION['id']."'");
   echo "<script>alert('Password Changed Successfully !!');</script>";
   }
   else
   {
   	echo "<script>alert('Current Password not match !!');</script>";
   }
   }
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
      <title>My Account</title>
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/green.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
      <link rel="stylesheet" href="assets/css/owl.transitions.css">
      <link href="assets/css/lightbox.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
      <link rel="stylesheet" href="assets/css/config.css">

      <script type="text/javascript">
         function valid()
         {
         if(document.chngpwd.cpass.value=="")
         {
         alert("Current Password Filed is Empty !!");
         document.chngpwd.cpass.focus();
         return false;
         }
         else if(document.chngpwd.newpass.value=="")
         {
         alert("New Password Filed is Empty !!");
         document.chngpwd.newpass.focus();
         return false;
         }
         else if(document.chngpwd.cnfpass.value=="")
         {
         alert("Confirm Password Filed is Empty !!");
         document.chngpwd.cnfpass.focus();
         return false;
         }
         else if(document.chngpwd.newpass.value!= document.chngpwd.cnfpass.value)
         {
         alert("Confirm Password Field does not match  !!");
         document.chngpwd.cnfpass.focus();
         return false;
         }
         return true;
         }
      </script>
       <script type="text/javascript">
         function validupdate()
         {
         if(document.chngpwd.updatecpass.value=="")
         {
         alert("Current Password Filed is Empty !!");
         document.chngpwd.updatecpass.focus();
         return false;
         }
        
         return true;
         }
      </script>
   </head>
   <body class="cnt-home">
      <header class="header-style-1">
         <?php include('includes/topheader.php');?>
         <?php include('includes/main-header.php');?>
         <?php include('includes/newmenu.php');?>
      </header>
     
      <!-- /.breadcrumb -->
      <div class="body-content outer-top-bd">
         <div class="container">
            <div class="checkout-box inner-bottom-sm">
               <div class="row">
                  <div class="col-md-8">
                     <div class="panel-group checkout-steps" id="accordion">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              <h4 class="unicase-checkout-title">
                                 <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
                                 My Profile
                                 </a>
                              </h4>
                           </div>
                           <!-- panel-heading -->
                           <div>
                              <!-- panel-body  -->
                              <div class="panel-body">
                                 <div class="row">
                                    <h4>Personal info</h4>
                                    <div class="col-md-12 col-sm-12 already-registered-login">
                                       <?php
                                          $query=mysqli_query($con,"select * from users where id='".$_SESSION['id']."'");
                                          while($row=mysqli_fetch_array($query))
                                          {
                                          ?>
                                       <form class="register-form" role="form" method="post" onSubmit="return validupdate();">
                                          <div class="form-group">
                                             <label class="info-title" for="name">Name</label>
                                             <input type="text" class="form-control unicase-form-control text-input" value="<?php echo $row['name'];?>" id="name" name="name" required="required">
                                          </div>
                                          <div class="form-group">
                                             <label class="info-title" for="myemail">Email Address </label>
                                             <input type="email" class="form-control unicase-form-control text-input" id="myemail" value="<?php echo $row['email'];?>" readonly>
                                          </div>
                                          <div class="form-group">
                                             <label class="info-title" for="Contact No.">Contact No. </label>
                                             <input type="text" class="form-control unicase-form-control text-input" id="contactno" name="contactno" required="required" value="<?php echo $row['contactno'];?>"  maxlength="10">
                                          </div>
                                          <div class="form-group">
                                       <label class="info-title" for="Current Password">Type Your Current Password to Confirm</label>
                                       <input type="password" class="form-control unicase-form-control text-input" id="updatecpass" name="updatecpass" required="required">
                                    </div>

                                          <button type="submit" name="update" class="btn-upper btn btn-primary checkout-page-button">Update</button>
                                       </form>
                                       <?php } ?>
                                    </div>
                                 </div>
                              </div>
                              <!-- panel-body  -->
                           </div>
                           <!-- row -->
                        </div>
                        <div class="panel panel-default checkout-step-02">
                           <div class="panel-heading">
                              <h4 class="unicase-checkout-title">
                                 <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
                                 Change Password
                                 </a>
                              </h4>
                           </div>
                           <div>
                              <div class="panel-body">
                                 <form class="register-form" role="form" method="post" name="chngpwd" onSubmit="return valid();">
                                    <div class="form-group">
                                       <label class="info-title" for="Current Password">Current Password</label>
                                       <input type="password" class="form-control unicase-form-control text-input" id="cpass" name="cpass" required="required">
                                    </div>
                                    <div class="form-group">
                                       <label class="info-title" for="New Password">New Password </label>
                                       <input type="password" class="form-control unicase-form-control text-input" id="newpass" name="newpass">
                                    </div>
                                    <div class="form-group">
                                       <label class="info-title" for="Confirm Password">Confirm Password </label>
                                       <input type="password" class="form-control unicase-form-control text-input" id="cnfpass" name="cnfpass" required="required" >
                                    </div>
                                    <button type="submit" name="submit" class="btn-upper btn btn-primary checkout-page-button">Change </button>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <!-- checkout-step-02  -->
                     </div>
                  </div>
               </div>
               <!-- /.row -->
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
      
   </body>
</html>
<?php } ?>