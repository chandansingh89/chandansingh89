<?php
include("includes/db.php");
@session_start();

if(isset($_GET['edit_prod_s'])){

$edit_id=$_GET['edit_prod_s'];
$get_edit="select * from product where product_id='$edit_id'";
$run_edit=mysqli_query($con,$get_edit);

while($row_edit=mysqli_fetch_array($run_edit)){






?>

<html>
<head>


 <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="styles/style.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>






<body>
<div class="row">
  <div class="col-lg-12">
    <div class="breadcrumb">
	   <li class="active">
	      <i class="fa fa-dashboard"></i>
		 Dashboard/Update/Edit product
	   
	   </li>
	
	
	</div>
  
  </div>
  </div>
     <div class="row">
	 
	 <div class="col-lg-3"></div>
	    
	 
	   <div class="col-lg-12">
	     <div class="panel panel-default">
		   <div class="panel-heading">
		      <h3><i class="fa a-money fa-w"></i>Update/Edit Product</h3>
		   <h4>refresh twice to see updated result</h4>
		   
		   </div>
		       <div class="panel-body">
			      <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
				     <div class="form-group">
					    <label class="col-md-3 control-label">Product Title</label>
						<input type="text" name="product_title" value="<?php echo $row_edit['product_title'];?>" class="form-control" required="">
					 </div>
					 
					 <div class="form-group">
					    <label class="col-md-3 control-label">Product Category</label>
					     <select name="p_cat_id" class="form-control" value="<?php echo $row_edit['p_cat_id'];?>" >
						 <option>Select product category</option>
						 <?php
						 $get_p_cats="select * from product_categories";
						 $run_p_cats=mysqli_query($con,$get_p_cats);
						 
						 while($row=mysqli_fetch_array($run_p_cats)){
						 $id=$row['p_cat_id'];
						 $cat_title=$row['p_cat_title'];
						 
						 echo "<option value='$id'>$cat_title</option>";
						 
						 
						 }
						 
						 
						 ?>
						 
						 
						 
						 </select>
					 </div>
					 
					  <div class="form-group">
					    <label class="col-md-3 control-label"> Categories</label>
					     <select name="cat_id" class="form-control" value="<?php echo $row_edit['cat_id'];?>" >
						 <option>Select  categories</option>
						 <?php
						 $get_cats="select * from catogries";
						 $run_cats=mysqli_query($con,$get_cats);
						 
						 while($row=mysqli_fetch_array($run_cats)){
						 $id=$row['cat_id'];
						 $cat_title=$row['cat_title'];
						 
						 echo "<option value='$id'>$cat_title</option>";
						 
						 
						 }
						 
						 
						 ?>
						 
						 
						 
						 </select>
					 </div>
					 
					 <div class="form-group">
					    <label class="col-md-3 control-label">Product Image 1</label>
						<input type="file" name="product_img1" class="form-control"  value="<?php echo $row_edit['product_img1'];?>" >
					 </div>
					 
					 <div class="form-group">
					    <label class="col-md-3 control-label">Product Image 2</label>
						<input type="file" name="product_img2" class="form-control"  value="<?php echo $row_edit['product_img2'];?>" >
					 </div>
					 
					 <div class="form-group">
					    <label class="col-md-3 control-label">Product Image 3</label>
						<input type="file" name="product_img3" class="form-control"  value="<?php echo $row_edit['product_img3'];?>" >
					 </div>
					 
					 <div class="form-group">
					    <label class="col-md-3 control-label">Product Price</label>
						<input type="text" name="product_price" class="form-control"  value="<?php echo $row_edit['product_price'];?>" >
					 </div>
					 
					 <div class="form-group">
					    <label class="col-md-3 control-label">Product keyword</label>
						<input type="text" name="product_keywords" class="form-control"  value="<?php echo $row_edit['product_keyword'];?>" >
					 </div>
					 
					 <div class="form-group">
					    <label class="col-md-3 control-label">Product Description</label>
				      <textarea name="product_desc" class="form-control" rows="6" cols="19" value=<?php echo $row_edit['product_desc'];?> ></textarea>
					 </div>
				  
				  <div class="form-group">
				  <input type="submit" name="submit" value="Insert product" class="btn btn-primary form-control">
				  
				  
				  </div>
				  
				  
				  </form>
			   
			   
			   </div>
		 
		 </div>
	   
	   </div>
	 
	 <div class="col-lg-3">
         </div>	 


	 
	 
	 </div>


</div>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>




</html>


<?php  }}?>



<?php
if(isset($_POST['submit'])){
$product_title=$_POST['product_title'];
$p_cat_id=$_POST['p_cat_id'];
$cat_id=$_POST['cat_id'];
$product_price=$_POST['product_price'];
$product_desc=$_POST['product_desc'];
$product_keywords=$_POST['product_keywords'];


$product_img1=$_FILES['product_img1']['name'];
$product_img2=$_FILES['product_img2']['name'];
$product_img3=$_FILES['product_img3']['name'];

$temp_name1=$_FILES['product_img1']['tmp_name'];
$temp_name2=$_FILES['product_img2']['tmp_name'];
$temp_name3=$_FILES['product_img3']['tmp_name'];


move_uploaded_file($temp_name1,"../admin_area/product_images/$product_img1");
move_uploaded_file($temp_name2,"../admin_area/product_images/$product_img2");
move_uploaded_file($temp_name3,"../admin_areaproduct_images/$product_img3");

$update_product="update product set p_cat_id='$p_cat_id',cat_id='$cat_id',product_title='$product_title',product_img1='$product_img1',product_img2='$product_img2',product_img3='$product_img3',product_price='$product_price',product_desc='$product_desc' where product_id='$edit_id' ";
 $run_product=mysqli_query($con,$update_product);
echo "$run_product";
 if($run_product){
 
 echo "<script>alert('product updated successfully')</script>";
 echo "<script>window.open('edit_prod_s.php?product_id='$edit_id')</script>";
 }







}







?>














