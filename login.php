<?php
   session_start();
   error_reporting(0);
   include('includes/config.php');
   if(isset($_POST['submit']))
   {
   $name=$_POST['fullname'];
   $email=$_POST['emailid'];
   
   $password=md5($_POST['password']);
   $query=mysqli_query($con,"insert into users(name,email,password) values('$name','$email','$password')");
   if($query)
   {
   	echo "<script>alert('You are successfully registered');</script>";
   }
   else{
   echo "<script>alert('Registration Unsuccessful');</script>";
   }
   }

   if(isset($_POST['login']))
   {
      $email=$_POST['email'];
      $password=md5($_POST['password']);
   $query=mysqli_query($con,"SELECT * FROM users WHERE email='$email' and password='$password'");
   $num=mysqli_fetch_array($query);
   if($num>0)
   {
   $extra="index.php";
   $_SESSION['login']=$_POST['email'];
   $_SESSION['id']=$num['id'];
   $_SESSION['username']=$num['name'];
   $uip=$_SERVER['REMOTE_ADDR'];
   $status=1;
   
   $host=$_SERVER['HTTP_HOST'];
   $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
   header("location:http://$host$uri/$extra");
   exit();
   }
   else
   {
   $extra="login.php";
   $email=$_POST['email'];
   $uip=$_SERVER['REMOTE_ADDR'];
   $status=0;
   
   $host  = $_SERVER['HTTP_HOST'];
   $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
   header("location:http://$host$uri/$extra");
   $_SESSION['errmsg']="Invalid email id or Password";
   exit();
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
      <title>Shopping Portal | Signi-in | Signup</title>
      <!-- Bootstrap Core CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/blogpage.css">
      <link rel="stylesheet" href="assets/css/shoppingcart.css">
      <link rel="stylesheet" href="assets/css/topbar.css">
      <link rel="stylesheet" href="assets/css/checkoutbox.css">
      <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
      
      <script type="text/javascript">
         function valid()
         {
          if(document.register.password.value!= document.register.confirmpassword.value)
         {
         alert("Password does not match  !!");
         document.register.confirmpassword.focus();
         return false;
         }
         return true;
         }
      </script>
   </head>
   <body class="cnt-home">
      <header class="navbar navbar-light bg-light">
      <?php include('includes/topHeader.php');?>
         <?php include('includes/main-header.php');?>
         <?php include('includes/newmenu.php');?>
      </header>
      <h1 style="text-align:center">Welcome to Infinity PC Solutions</h1>
      <div class="body-content outer-top-bd">
         <div class="container">
            <div class="sign-in-page inner-bottom-sm">
               <div class="row">
                  <!-- Sign-in -->			
                  <div class="col-md-6 col-sm-6 sign-in">
                     <h4 class="">sign in</h4>
                     <form class="register-form outer-top-xs" method="post">
                        <span style="color:red;" >
                        <?php
                           echo htmlentities($_SESSION['errmsg']);
                           ?>
                        <?php
                           echo htmlentities($_SESSION['errmsg']="");
                           ?>
                        </span>
                        <div class="form-group">
                           <label class="info-title" for="exampleInputEmail1">Email Address </label>
                           <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                           <label class="info-title" for="exampleInputPassword1">Password </label>
                           <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
                        </div>
                        <button type="submit" class="btn btn-secondary" name="login">Login</button>
                     </form>
                  </div>
                  
                  <div class="col-md-6 col-sm-6 create-new-account">
                     <h4 class="checkout-subtitle">create a new account</h4>
                     <form class="register-form outer-top-xs" role="form" method="post" name="register" onSubmit="return valid();">
                        <div class="form-group">
                           <label class="info-title" for="fullname">Full Name </label>
                           <input type="text" class="form-control unicase-form-control text-input" id="fullname" name="fullname" required="required">
                        </div>
                        <div class="form-group">
                           <label class="info-title" for="exampleInputEmail2">Email Address </label>
                           <input type="email" class="form-control unicase-form-control text-input" id="email" name="emailid" required >
                           <span id="user-availability-status1" style="font-size:12px;"></span>
                        </div>
                        <div class="form-group">
                           <label class="info-title" for="password">Password </label>
                           <input type="password" class="form-control unicase-form-control text-input" id="password" name="password" title="Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required >
                           <p><span>*</span>Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters<p>
                        </div>
                        <div class="form-group">
                           <label class="info-title" for="confirmpassword">Confirm Password </label>
                           <input type="password" class="form-control unicase-form-control text-input" id="confirmpassword" name="confirmpassword" required >
                        </div>
                        <button type="submit" name="submit" class="btn btn-secondary" id="submit">Sign Up</button>
                     </form>
                  </div>
                  <!-- create a new account -->			
               </div>
               <!-- /.row -->
            </div>
           
         </div>
      </div>
      <?php include('includes/footer.php');?>
      <script src="assets/js/jquery-1.11.1.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/jquery.easing-1.3.min.js"></script>
   </body>
</html>