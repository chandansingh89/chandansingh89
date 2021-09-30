

<?php
include("includes/db.php");
//include("../admin_area/functions/functions.php");

@session_start();

function getuserip(){
				       switch(true){
					     case(!empty($_SERVER['HTTP_X_REAL_IP'])):
						 return $_SERVER['HTTP_X_REAL_IP'];
					   
					   	 case(!empty($_SERVER['HTTP_CLIENT_IP'])):
						 return $_SERVER['HTTP_CLIENT_IP'];
						 
						 
                         case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])):
						 return $_SERVER['HTTP_X_FORWARDED_FOR'];
						 
						 default: return $_SERVER['REMOTE_ADDR'];
					   
					   
					   }
				   
				   
				   
				   }
$getuserip= getuserip();
				   
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
       
		      
		 
     </div>
</div>

 

<br>
<div id="content">
   <div class="container">
     <div class="col-md-12">
	    
	 </div>
	    
		    <div class="col-md-12">
			  <div class="box">
			    <div class="box-header">
				  <center><h2>Login</h2></center>	
				
				</div>
			  </div>
			  <form action="" method="post">
			     <div class="form-group">
				   <label>E-mail</label>
				   <input type="text" name="a_email" required="" class="form-control">
				 </div>
				 
				 <div class="form-group">
				   <label>Password</label>
				   <input type="password" name="a_pass" required="" class="form-control">
				 </div>
				 
				<div class="form-group">
				 <a href="forget_pass.php">Forget password</a>
				 
				 </div>
				 <div class="text-center">
				   <button type="submit" name="a_login" class="btn btn-primary"><i class="fa fa-user-md"></i>
				   Login</button></div>
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
if(isset($_POST['a_login'])){
$admin_email=$_POST['a_email'];
$admin_pass=$_POST['a_pass'];
$sel_admin="select * from admin where admin_email='$admin_email' AND admin_password='$admin_pass'";
$run_admin=mysqli_query($con,$sel_admin);
$check_admin=mysqli_num_rows($run_admin);


if($check_admin==0){
echo"<script>alert('wrong email or password')</script>";
exit();

}else{
$_SESSION['admin_email']=$admin_email;
echo "<script> window.open('index2.php','_self')</script> ";




}

}






?>



