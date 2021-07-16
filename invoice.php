<?php
session_start();
include('includes/config.php');

require('fpdf183/fpdf.php');

//Invoice Title
$pdf = new FPDF('p','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',13);
$pdf->Cell(130,5,'Infinity PC Solutions',0,0);
$pdf->Cell(59,5,'Invoice',0,1);


// Invoice Address
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130,5,'[Street address]',0,0);
$pdf->Cell(59,5,'',0,1);

$pdf->Cell(130,5,'[City, Country, ZIP]',0,0);
$pdf->Cell(25,5,'Date',0,0);
$pdf->Cell(34,5,'[dd/mm/yyyy]',0,1);

$pdf->Cell(130,5,'Phone [+94 777159369]',0,0);
$pdf->Cell(25,5,'Invoice #',0,0);
$pdf->Cell(34,5,'[number]',0,1);

$pdf->Cell(130,5,'Phone [+94 777159369]',0,0);
$pdf->Cell(25,5,'Customer ID',0,0);
$pdf->Cell(34,5,'[id]',0,1);

//Invoice


$pdf->Cell(189,10,'',0,1);

$pdf->Cell(100,5,'Bill to: ',0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,'[name]',0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,'[Company]',0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,'[Address]',0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,'[Phone]',0,1);

//end of the line
$pdf->Cell(189,10,'',0,1);

$pdf->Cell(130,5,'Product Name',1,0);
$pdf->Cell(25,5,'Quantity',1,0);
$pdf->Cell(34,5,'Unit Price',1,1);

//
$query=mysqli_query($con,"select products.*,orders.* from products join orders on orders.productId = products.id WHERE orders.orderSession = (SELECT MAX(orderSession) FROM orders)");
                                    $cnt=1;
                                    while($row=mysqli_fetch_array($query))
                                    {
                                        $pdf->Cell(130,5,$row['productName'],1,0);
                                        $pdf->Cell(25,5,$row['quantity'],1,0);
                                        $pdf->Cell(34,5,$row['productPrice'],1,1);

                                    }
$pdf->Output();



?>



