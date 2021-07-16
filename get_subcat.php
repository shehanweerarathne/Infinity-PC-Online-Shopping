<?php
include('includes/config.php');
if(!empty($_POST["cat_id"])) 
{
 $id=intval($_POST['cat_id']);
$query=mysqli_query($con,"SELECT * FROM `products` WHERE subCategory IN (SELECT cpu1 FROM pccombinations WHERE mboard =$id)");

?>
<option value="">Select Subcategory</option>
<option ><?php echo $id; ?></option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo $row['Id']; ?>"><?php echo $row['productName']; ?></option>
  
  <?php
 }
}
?>