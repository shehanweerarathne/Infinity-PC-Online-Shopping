

<?php 
   session_start();
   error_reporting(0);
   include('includes/config.php');
   	if (isset($_POST['upload'])) {
           $file = $_FILES['image']['name'];
   
   		    $query = "INSERT INTO paymentproof(image) VALUES('$file')";

            $res = mysqli_query($con,$query);

            if ($res) {
                move_uploaded_file($_FILES['image']['tmp_name'], "uploads/$file");
            }
   	}
   ?>
<form class="my-5" method="post" enctype="multipart/form-data">
    <input type="file" name="image" class="form-control">
    <input type="submit" name="upload" value = "UPLOAD" class="btn btn-success my-3">
</form>