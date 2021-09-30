<?php
include("includes/db.php");

if(isset($_POST['submit'])){
$cat_title=$_POST['cat_title'];
$cat_desc=$_POST['cat_desc'];
$insert_cat="insert into product_categories(p_cat_title,p_cat_desc)values('$cat_title','$cat_desc')";
$run_cat=mysqli_query($con,$insert_cat);

if($run_cat)

{
echo" <script>alert('New category has been inserted')</script>";
echo" <script>window.open('index2.php?view_cat','_self')</script>";

}




}




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
		 Dashboard/Insert_category
	   
	   </li>
	
	
	</div>
  
  </div>
  </div>
     <div class="row">
	 
	 <div class="col-lg-3"></div>
	    
	 
	   <div class="col-lg-12">
	     <div class="panel panel-default">
		   <div class="panel-heading">
		      <h3><i class="fa a-money fa-w"></i>Insert Category</h3>
		   
		   
		   </div>
		       <div class="panel-body">
			      <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
				     <div class="form-group">
					    <label class="col-md-3 control-label">Category Title</label>
						<input type="text" name="cat_title"  class="form-control" required="">
					 </div>
					 
					 
					 
					 <div class="form-group">
					    <label class="col-md-3 control-label">Category Description</label>
				      <textarea name="cat_desc" class="form-control" rows="6" cols="19" ></textarea>
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
