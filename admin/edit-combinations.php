<?php
   session_start();
   include('include/config.php');
   if(strlen($_SESSION['alogin'])==0)
   	{	
   header('location:index.php');
   }
   else{
   	$pid=intval($_GET['id']);
   if(isset($_POST['submit']))
   {
   	$pccategory=$_POST['pcCategory'];
      	$mboard=$_POST['mboard'];
      	$cpu1=$_POST['cpu1'];
      	$cpu2=$_POST['cpu2'];
      	$ram1=$_POST['ram1'];
      	$ram2=$_POST['ram2'];
      	$ram3=$_POST['ram3'];
   	
   
   	
   $sql=mysqli_query($con,"update  pccombinations set pcCategory='$pccategory',mboard='$mboard',cpu1='$cpu1',cpu2='$cpu2',ram1='$ram1',ram2='$ram2',ram3='$ram3' where id='$pid' ");
   $_SESSION['msg']="Product Updated Successfully !!";
   
   }
   
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin| Update Product</title>
      <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link type="text/css" href="css/theme.css" rel="stylesheet">
      <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
      <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
      <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
      <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
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
         function selectCountry(val) {
         $("#search-box").val(val);
         $("#suggesstion-box").hide();
         }
      </script>	
   </head>
   <body>
      <?php include('include/header.php');?>
      <div class="wrapper">
         <div class="container">
            <div class="row">
               <?php include('include/sidebar.php');?>				
               <div class="span9">
                  <div class="content">
                     <div class="module">
                        <div class="module-head">
                           <h3>Update Product</h3>
                        </div>
                        <div class="module-body">
                           <?php if(isset($_POST['submit']))
                              {?>
                           <?php } ?>
                           <?php if(isset($_GET['del']))
                              {?>
                           <?php } ?>
                           <br />
                           <form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
                              <?php 
                                 $query=mysqli_query($con,"select * from pccombinations where pccombinations.id='$pid'");
                                 $cnt=1;
                                 while($row=mysqli_fetch_array($query))
                                 {
                                   
                                 
                                 
                                 ?>
                              <div class="control-group">
                                 <label class="control-label" for="basicinput">PC Category</label>
                                
                                 <div class="controls">
                                    <select name="pcCategory" class="span8 tip" required>
                                       <option value="<?php echo htmlentities($row['pcCategory']);?>"><?php echo htmlentities($row['pcCategory']);?></option>
                                       
                                       <option value="Office Desktop">Office Desktop</option>
                                       <option value="Home Desktop">Home Desktop</option>
                                       <option value="Gaming Lite">Gaming Lite</option>
                                       <option value="Gaming Pro">Gaming Pro</option>
                                       <option value="Gaming Ultimate">Gaming Ultimate</option>
                                      
                                    </select>
                                 </div>
                              </div>
                              
							  <div class="control-group">
                                 <label class="control-label" for="basicinput">Motherboard</label>
                                 <div class="controls">
                                    <select name="mboard" class="span8 tip" required>
                                       <option value="<?php echo htmlentities($row['mboard']);?>"><?php echo htmlentities($row['mboard']);?></option>
                                       <?php $query=mysqli_query($con,"select * from subcategory where categoryid=2");
                                          while($rw=mysqli_fetch_array($query))
                                          {
                                          	if($row['mboard']==$rw['subcategory'])
                                          	{
                                          		continue;
                                          	}
                                          	else{
                                          	?>
                                       <option value="<?php echo $rw['subcategory'];?>"><?php echo $rw['subcategory'];?></option>
                                       <?php }} ?>
                                    </select>
                                 </div>
                              </div>
                              
							  <div class="control-group">
                                 <label class="control-label" for="basicinput">Processor 1</label>
                                 <div class="controls">
                                    <select name="cpu1" class="span8 tip" required>
                                       <option value="<?php echo htmlentities($row['cpu1']);?>"><?php echo htmlentities($row['cpu1']);?></option>
                                       <?php $query=mysqli_query($con,"select * from subcategory where categoryid=1");
                                          while($rw=mysqli_fetch_array($query))
                                          {
                                          	if($row['cpu1']==$rw['subcategory'])
                                          	{
                                          		continue;
                                          	}
                                          	else{
                                          	?>
                                       <option value="<?php echo $rw['subcategory'];?>"><?php echo $rw['subcategory'];?></option>
                                       <?php }} ?>
                                    </select>
                                 </div>
                              </div>
                              
							  <div class="control-group">
                                 <label class="control-label" for="basicinput">Processor 2</label>
                                 <div class="controls">
                                    <select name="cpu2" class="span8 tip" required>
                                       <option value="<?php echo htmlentities($row['cpu2']);?>"><?php echo htmlentities($row['cpu2']);?></option>
                                       <?php $query=mysqli_query($con,"select * from subcategory where categoryid=1");
                                          while($rw=mysqli_fetch_array($query))
                                          {
                                          	if($row['cpu2']==$rw['subcategory'])
                                          	{
                                          		continue;
                                          	}
                                          	else{
                                          	?>
                                       <option value="<?php echo $rw['subcategory'];?>"><?php echo $rw['subcategory'];?></option>
                                       <?php }} ?>
                                    </select>
                                 </div>
                              </div>
                              
							  <div class="control-group">
                                 <label class="control-label" for="basicinput">RAM 1</label>
                                 <div class="controls">
                                    <select name="ram1" class="span8 tip" required>
                                       <option value="<?php echo htmlentities($row['ram1']);?>"><?php echo htmlentities($row['ram1']);?></option>
                                       <?php $query=mysqli_query($con,"select * from subcategory where categoryid=3");
                                          while($rw=mysqli_fetch_array($query))
                                          {
                                          	if($row['ram1']==$rw['subcategory'])
                                          	{
                                          		continue;
                                          	}
                                          	else{
                                          	?>
                                       <option value="<?php echo $rw['subcategory'];?>"><?php echo $rw['subcategory'];?></option>
                                       <?php }} ?>
                                    </select>
                                 </div>
                              </div>
                              
							  <div class="control-group">
                                 <label class="control-label" for="basicinput">RAM 2</label>
                                 <div class="controls">
                                    <select name="ram2" class="span8 tip" required>
                                       <option value="<?php echo htmlentities($row['ram2']);?>"><?php echo htmlentities($row['ram2']);?></option>
                                       <?php $query=mysqli_query($con,"select * from subcategory where categoryid=3");
                                          while($rw=mysqli_fetch_array($query))
                                          {
                                          	if($row['ram2']==$rw['subcategory'])
                                          	{
                                          		continue;
                                          	}
                                          	else{
                                          	?>
                                       <option value="<?php echo $rw['subcategory'];?>"><?php echo $rw['subcategory'];?></option>
                                       <?php }} ?>
                                    </select>
                                 </div>
                              </div>
                              
							  <div class="control-group">
                                 <label class="control-label" for="basicinput">RAM 3</label>
                                 <div class="controls">
                                    <select name="ram3" class="span8 tip" required>
                                       <option value="<?php echo htmlentities($row['ram3']);?>"><?php echo htmlentities($row['ram3']);?></option>
                                       <?php $query=mysqli_query($con,"select * from subcategory where categoryid=3");
                                          while($rw=mysqli_fetch_array($query))
                                          {
                                          	if($row['ram3']==$rw['subcategory'])
                                          	{
                                          		continue;
                                          	}
                                          	else{
                                          	?>
                                       <option value="<?php echo $rw['subcategory'];?>"><?php echo $rw['subcategory'];?></option>
                                       <?php }} ?>
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
      <?php include('include/footer.php');?>
      <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
      <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
      <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
      <script src="scripts/datatables/jquery.dataTables.js"></script>
      <script>
         $(document).ready(function() {
         	$('.datatable-1').dataTable();
         	$('.dataTables_paginate').addClass("btn-group datatable-pagination");
         	$('.dataTables_paginate > a').wrapInner('<span />');
         	$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
         	$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
         } );
      </script>
   </body>
   <?php } ?>
