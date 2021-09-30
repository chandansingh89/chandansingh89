<?php
session_start();
include("includes/db.php");
include("../admin_area/functions/functions.php");


?>



<html>
<head>
<title>e-commerce shop</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="styles/style.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>


<body>
<div id="top">
    <div class="container">
       <div class="col-md-6 offer">
           <a href="#" class="btn btn-success btn-sm"><?php
		   if(!isset($_SESSION['sellar_email']))
		   {
		   echo "<b>Welcome Guest !!</b>";
		   
		   }else{
		   echo " <b> Welcome     ".$_SESSION['sellar_email']."</b>";
		   
		   }
		   
		   ?></a>
               
         </div>
		      <div class="col-md-6">
			       <ul class="menu">
				       <li class="active">   
					   <a href="customer_registration.php">Register</a>
					   
					   </li>
					   
					   <li>   
					   <a href="my_account.php">My Account</a>
					   
					   </li>
					   
					   <li>   
					   <a href="cart.php">Goto cart</a>
					   
					   </li>
					   
					   <li>   
					   <a href="login.php">Login</a>
					   
					   </li>
				   
				   </ul>
			  
			  
			  </div>
		 
     </div>
</div>

<div class="navbar navbar-default" id="navbar">
   <div class="container">
      <div class="navbar-header">
	     <a class="navbar-brand home" href="index.php">
		 <!--  <img src="images/logo.jpg" class="hidden-xs">
		  <img src="images/logo2.jpg" class="visible-xs">
		  </a>-->
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
		  <span class="sr-only">Toggle Navigation</span>
		<!-- <i class="fa fa-align-justify"</i>-->
		  </button>
		  
		  <button type="button" class="navbar-toggle" data-toggle="navbar-toggle" data-target="#search">
		  <span class="sr-only"></span>
		 <!-- <i class="fa fa-search"</i>-->
		  </button>
       </div>
	   
	   <div class="navbar-collapse collapse" id="navigation">
	        <div class="padding-nav">
			   <ul class="nav navbar-nav navbar-left">
			        <li class="active">
					   <a href="index.php">Home</a>
					 </li>
					 <li  >
					    <a href="shop.php">Shop</a>
					 </li>	
					 <li>
					    <a href="my_account.php">MyAccount</a>
					 </li>
					 <li>
					    <a href="cart.php">Shopping cart</a>
					 </li>
					 <li>
					    <a href="aboutus.php">About us</a>
					 </li>
					  <li>
					    <a href="services.php">Services</a>
					 </li>
					  <li>
					    <a href="contactus.php">Contact us</a>
					 </li>
					 
				</ul>
            </div>
            <a href="cart.php" class="btn btn-primary navbar-btn right">
             <i class="fa fa-shopping-cart"></i>
                <span> 4 item in cart</span>			 
			</a>
	         <div class="navbar-collapse collapse right">
			   <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
			   <span class="sr-only">Toggle search</span>
			   <i class="fa fa-search"></i>
			   </button>
			 </div>
             
              <div class="collapse clearfix" id="search">
			  <form class="navbar-form" method="get" action="result.php">
			  <div class="input-group">
			    <input type="text" name="user_query" placeholder="search" class="form-control" required="">
				
				<button type="submit" value="search" name="search" class="btn btn-primary">
				<i class="fa fa-search"></i>
				</button>
				
               </div>			  
			 </form>
			 </div>
	   </div>
	 </div>
</div>	 

<br>
<div id="content">
   <div class="container">
     <div class="col-md-12">
	    <ul class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li>Registration</li>
		</ul>
	 </div>
	    
		    <div class="col-md-12">
			  <div class="box">
			    <div class="box-header">
				  <center><h2>Sellar Registration</h2><p class="text-muted">Feel free to feed all queries required</p></center>	
				
				</div>
			  </div>
			  <form action="" method="post" enctype="multipart/form-data">
			     <div class="form-group">
				   <label>Sellar Name</label>
				   <input type="text" name="s_name" required="" class="form-control">
				 </div>
				 
				 <div class="form-group">
				   <label>Sellar Email</label>
				   <input type="text" name="s_email" required="" class="form-control">
				 </div>
				 
				 <div class="form-group">
				   <label>Sellar Password</label>
				   <input type="password" name="s_password" required="" class="form-control">
				 </div>
				
				
				 <div class="form-group">
				   <label>Confirm Sellar Password</label>
				   <input type="password" name="s_cpassword" required="" class="form-control">
				 </div>
				 
				  <div class="form-group">
				   <label>Sellar Country</label>
				   <input type="text" name="s_country" required="" class="form-control">
				 </div>
				 
				  <div class="form-group">
				   <label>Sellar City</label>
				   <input type="text" name="s_city" required="" class="form-control">
				 </div>
				 
				  <div class="form-group">
				   <label> Sellar Contact number</label>
				   <input type="text" name="s_contact" required="" class="form-control">
				 </div>
				 
				  <div class="form-group">
				   <label>Sellar Address</label>
				   <input type="text" name="s_address" required="" class="form-control">
				 </div>
				 
				  <div class="form-group">
				   <label>Sellar Image</label>
				   <input type="file" name="s_image" required="" class="form-control">
				 </div>
				 
				 
				 
				 <div class="text-center">
				   <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-user-md"></i>
				   Sellar Register</button></div>
				 </div>
			  
			  </form>
			  
			</div>
		 
		 
		 
	      </div>
          </div>		  
		   
		   
		   <div>

<?php include '../footer.php';?>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>

<?php
if(isset($_POST['submit'])){
$s_name=$_POST['s_name'];
$s_email=$_POST['s_email'];
$s_password=$_POST['s_password'];
$s_country=$_POST['s_country'];
$s_city=$_POST['s_city'];
$s_contact=$_POST['s_contact'];
$s_address=$_POST['s_address'];
$s_image=$_FILES['s_image']['name'];
$s_tmp_image=$_FILES['s_image']['tmp_name'];
$s_ip=getuserip();

move_uploaded_file($s_tmp_image,"sellar_image/$s_image");

$insert_sellar="insert into sellar(sellar_name,sellar_email,sellar_pass,sellar_country,sellar_city,sellar_contact,sellar_address,sellar_image,sellar_ip) values ('$s_name','$s_email','$s_password','$s_country','$s_city','$s_contact','$s_address','$s_image','$s_ip')";

$run_sellar=mysqli_query($con,$insert_sellar);



echo "<script>
alert('you have been registered successfully');
window.open('index.php','_self');
</script>";
}



?>





























