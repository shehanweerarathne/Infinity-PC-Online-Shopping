<?php 
include('includes/config.php');
$sessionquery = "SELECT MAX(orderSession) AS LastSession FROM `orders` LIMIT 1";
$sql=mysqli_query($con,$sessionquery);
$rw   = mysqli_fetch_row($sql);
$lastsession=$rw[0];


?>


<?php
$thisSession = $lastsession + 1;
?>