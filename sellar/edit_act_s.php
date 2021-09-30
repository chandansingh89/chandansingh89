

<?php
@session_start();
include("includes/db.php");
if(isset($_GET['edit_act_s'])){
$sellar_email=$_SESSION['sellar_email'];
$get_sellar="select * from sellar where sellar_email='$sellar_email'";
$run_sellar=mysqli_query($con,$get_sellar);
$row=mysqli_fetch_array($run_sellar);
$id=$row['sellar_id'];
$name=$row['sellar_name'];
$email=$row['sellar_email'];
$pass=$row['sellar_pass'];
$country=$row['sellar_country'];
$city=$row['sellar_city'];
$contact=$row['sellar_contact'];
$address=$row['sellar_address'];
$image=$row['sellar_image'];





?>








<html>
<head></head>
<body>



<div class="box">

<center>
    <h1>Edit your account</h1>
</center>
 <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
	<label>Sellar name</label>
	<input type="text" name="s_name" class="form-control" value="<?php echo $name;?>" >
	</div>

	 <div class="form-group">
	<label>Sellar Email</label>
	<input type="text" name="s_email" class="form-control" value="<?php echo $email;?>"  >
	</div>
	
	 <div class="form-group">
	<label>Sellar password</label>
	<input type="password" name="s_pass" class="form-control"value="<?php echo $pass;?>"  >
	</div>
	
	 <div class="form-group">
	<label>Sellar Country</label>
	<input type="text" name="s_country" class="form-control" value="<?php echo $country;?>"  >
	</div>
	
	 <div class="form-group">
	<label>Sellar City</label>
	<input type="text" name="s_city" class="form-control" value="<?php echo $city;?>"  >
	</div>
	
	 <div class="form-group">
	<label>Sellar Number</label>
	<input type="text" name="s_number" class="form-control"  value="<?php echo $contact;?>" >
	</div>
	
	 <div class="form-group">
	<label>Sellar Address</label>
	<input type="text" name="s_address" class="form-control" value="<?php echo $address;?>"  >
	</div>
	

	 <div class="form-group">
	<label>Sellar Image</label>
	<input type="file" name="s_image" class="form-control"  value="<?php echo $image;?>">
	<img src="sellar_image/<?php echo $image;?>" class="img-responsive" height="100" width="100">
	</div>
	
	
	<div class="text-center">
	    
		 <button class="btn btn-primary" name="update">
		 Update Now
		 </button>
	</div>
	
	</form>

</div>

</body>
</html>



<?php }?>

<?php
if(isset($_POST['update'])){

$update_id=$id;
$s_name=$_POST['s_name'];
$s_email=$_POST['s_email'];
$s_pass=$_POST['s_pass'];
$s_country=$_POST['s_country'];
$s_city=$_POST['s_city'];
$s_contact=$_POST['s_number'];
$s_address=$_POST['s_address'];
$s_image=$_FILES['s_image']['name'];
$s_image_tmp=$_FILES['s_image']['tmp_name'];


move_uploaded_file($s_image_tmp,"sellar_image/$s_image");

$update_s="update sellar set sellar_name='$s_name',sellar_email='$s_email',sellar_pass='$s_pass',sellar_country='$s_country',sellar_city='$s_city',sellar_contact='$s_contact',sellar_address='$s_address',sellar_image='$s_image' where sellar_id='$update_id' ";
$run_s=mysqli_query($con,$update_s);

if($run_s){
echo "<script> alert('your account updated successfully..thank you')</script>";
echo "<script>window.open('index2.php','_self')</script>";


}


}





?>







































