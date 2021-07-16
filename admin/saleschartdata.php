<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","616");

$sqlQuery = "SELECT DATE(orderDate) AS Date, SUM(quantity) as Sales FROM orders GROUP BY DATE(orderDate) LIMIT 7";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>