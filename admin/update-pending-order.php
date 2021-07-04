<?php
session_start();

include_once 'include/config.php';
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{
$oid=intval($_GET['oid']);
if(isset($_POST['submit'])){
$status=$_POST['status'];

$sql=mysqli_query($con,"update orders set orderStatus='$status' where id='$oid'");
echo "<script>alert('Order updated sucessfully...');</script>";
	}
}
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update Compliant</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link type="text/css" href="css/theme.css" rel="stylesheet">
      <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
      <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
      <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
      <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
</head>
<body>

<div style="margin-left:50px;">
<?php include('include/header.php');?>
      <div class="wrapper">
         <div class="container">
            <div class="row">
               <?php include('include/sidebar.php');?>				
               <div class="span9">
                  <div class="content">
                     <div class="module">
					 <div class="module-head">
                           <h3>Update Confirmed Order</h3>
                        </div>
<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
                              <?php 
                                 $query=mysqli_query($con,"select * from orders where id='$oid'");
                                 while($row=mysqli_fetch_array($query))
                                 {
                                   
                                 ?>
                             
                              
							  <div class="control-group">
                                 <label class="control-label" for="basicinput">Order Status</label>
                                 <div class="controls">
                                    <select name="status" class="span8 tip" required>
                                       <option value="<?php echo htmlentities($row['orderStatus']);?>"><?php echo htmlentities($row['orderStatus']);?></option>
                    
                                       <option value="Pending">Pending</option>
									   <option value="In Process">In Process</option>
                   
                                    </select>
                                 </div>
                              </div>
                              
                              <?php } ?>
                              <div class="control-group">
                                 <div class="controls">
                                    <button type="submit" name="submit" class="btn">Update</button>
                                 </div>
                              </div>
                           </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>


     