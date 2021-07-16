<?php
 include('includes/config.php');
?>
<?php
$query = sprintf("SELECT * FROM products");

$result = mysqli_query($con,$query);

$data = array();
foreach($result as $row){
    $data[] = $row;

}

print json_encode($data);
?>