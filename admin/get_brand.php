<?php
include('include/config.php');
if(!empty($_POST["cat_id"])) 
{
 $id=intval($_POST['cat_id']);
$query=mysqli_query($con,"SELECT * FROM brand WHERE categoryid=$id");
?>
<option value="">Select Brand</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['brand']); ?>"><?php echo htmlentities($row['brand']); ?></option>
  <?php
 }
}
?>