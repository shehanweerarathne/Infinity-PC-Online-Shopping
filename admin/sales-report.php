
<?php
   session_start();
   include('include/config.php');
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Infinity PC Solutions | Administrator</title>
      <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link type="text/css" href="css/theme.css" rel="stylesheet">
      <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
      <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
   </head>
   <body>
      <?php include('include/header.php');?>
      <div class="wrapper">
      <div class="container">
        
            <div class="span12">
               <div class="content">
                  <div class="module">
                     <div class="module-head">
                        <h3><a href = "welcome-admin.php">  Back to Admin Panel</a></h3>
                     </div>

                     <div class="title">
                        <h3 style="text-align: center;">Sales Report</a></h3>
                     </div>
                     <div class="module-body">
                        <iframe width="1100" height="700" src="https://app.powerbi.com/reportEmbed?reportId=e25ae5bc-8596-45b8-8557-04e077fde36f&autoAuth=true&ctid=aa232db2-7a78-4414-a529-33db9124cba7&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLXNvdXRoLWVhc3QtYXNpYS1yZWRpcmVjdC5hbmFseXNpcy53aW5kb3dzLm5ldC8ifQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>
                     </div>
                  </div>
               </div>
               <!--/.content-->
            </div>
            <!--/.span9-->
   
      </div>
      <!--/.wrapper-->
      <?php include('include/footer.php');?>
      <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
      <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
      <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
   </body>
   <?php  ?>