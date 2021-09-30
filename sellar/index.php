

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
				  <center><h2> Sellar Login</h2></center>	
				
				</div>
			  </div>
			  <form action="" method="post">
			     <div class="form-group">
				   <label> Sellar E-mail</label>
				   <input type="text" name="s_email" required="" class="form-control">
				 </div>
				 
				 <div class="form-group">
				   <label>Password</label>
				   <input type="password" name="s_pass" required="" class="form-control">
				 </div>
				 
					<div class="form-group">
				<center> <a href="index.php?forgot_pass">Forgot password ?</a></center>
				 
				 </div>
				 <div class="text-center">
				   <button type="submit" name="s_login" class="btn btn-primary"><i class="fa fa-user-md"></i>
				   Login</button></div>
				 </div>
			  
			  </form>
			 <?php
			   if(isset($_GET['forgot_pass'])){
			   echo "
			   <div align='center'>
			   <b> Enter your Email below to get your password</b></br>
			   <form action='' method='post'>
			   
			   <input type='text' name='s_email' placeholder='Enter your email' required=''/></br>
			   <input type='submit' name='forgot_pass' value='Send me Password'/>
			   
			   
			   </form>
			   </div>
			   
			   
			   ";
			   
			   if(isset($_POST['forgot_pass'])){
			   
			   $s_email=$_POST['s_email'];
			   $sel_s="select * from sellar where sellar_email='$s_email'";
			   $run_s=mysqli_query($con,$sel_s);
			   $check_s=mysqli_num_rows($run_s);
			   $row_s=mysqli_fetch_array($run_s);
			   $s_name=$row_s['sellar_name'];
			   $s_pass=$row_s['sellar_pass'];
			   
			   if($check_s==0){
			   echo "<script>alert('This email does not exit in our database,sorry!')</script>";

               exit();			   
			   
			   
			   }else{ 
			   
			   $from='chandansingher89@gmail.com';
			   $subject='Your Password';
			   $message="<html>
			   <h3>Dear $s_name</h3>
			   
			   <p> You requested for your password at master-ji.com</p>
			   <b> Your Password is </b><span style='color:red;'>$s_pass</span>
			   
			   <h3>Thank you for using our website</h3>
			   
			   </html>
			   ";
			   
			   mail($s_email,$subject,$message,$from);
			   echo "<script>alert('Password sent to your email ,please check your inbox')</script>";
			   echo "window.open('index.php','_self')";
			   }
			   
			   
			   
			   
			   
			   }
			   
			   
			   
			   }
			  
			  
			  
			  
			  
			  ?>
			    <h2><a href="sellar_registration.php">New  Sellar  Register Here<a></h2>
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
if(isset($_POST['s_login'])){
$sellar_email=$_POST['s_email'];
$sellar_pass=$_POST['s_pass'];
$sel_sellar="select * from sellar where sellar_email='$sellar_email' AND sellar_pass='$sellar_pass'";
$run_sellar=mysqli_query($con,$sel_sellar);
$check_sellar=mysqli_num_rows($run_sellar);


if($check_sellar==0){
echo"<script>alert('wrong email or password')</script>";
exit();

}else{
$_SESSION['sellar_email']=$sellar_email;
echo "<script> window.open('index2.php','_self')</script> ";




}

}






?>



 



