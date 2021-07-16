
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
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="row">
			<div class="span3">
					<div class="sidebar">
					</div></div>
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Sales Of the Week</h3>
							</div>
							<div class="module-body">
							<?php include('earningschart.php');?>
							</div>
						</div>
						<div>
							<h3>Sales of this Week:</h3>

						</div>
						<div>
							<h3>Revenue of this Week:</h3>
							
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
</body>
