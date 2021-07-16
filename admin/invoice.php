<?php
session_start();
include('include/config.php');

require('fpdf183/fpdf.php');

$pdf = new FPDF('p','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Cell(130,5,'Infinity PC Solutions',1,0);
$pdf->Output();



?>



<?php
$query=mysqli_query($con,"select products.*,orders.* from products join orders on orders.productId = products.id WHERE orders.orderSession = (SELECT MAX(orderSession) FROM orders)");
                                    $cnt=1;
                                    while($row=mysqli_fetch_array($query))
                                    {
?>	


<?php }?>