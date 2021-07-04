
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	
if(isset($_POST['submit']))
{
	$category=$_POST['category'];

//for getting product id
$query=mysqli_query($con,"select max(id) as oid from orders");
	$result=mysqli_fetch_array($query);
	 $oid=$result['oid']+1;
	$dir="productimages/$oid";
if(!is_dir($dir)){
		mkdir("admin/paymentproofs/".$oid);
	}

	move_uploaded_file($_FILES["productimage1"]["tmp_name"],"admin/paymentproofs/".$oid/".$_FILES["productimage1"]["name"]);
	
$sql=mysqli_query($con,"insert into products(category,subCategory,productName,productCompany,productPrice,productDescription,productImage1,productImage2,productImage3,productPriceBeforeDiscount,productAmount) values('$category','$subcat','$productname','$productcompany','$productprice','$productdescription','$productimage1','$productimage2','$productimage3','$productprice','$productamount')");

}


?>