

<?php
include("includes/db.php");
include("admin_area/functions/functions.php");
@session_start();
global $con;
$ip=getuserip();
$get_customer="select * from customer where customer_ip='$ip'";
$run_customer=mysqli_query($con,$get_customer);
$customer=mysqli_fetch_array($run_customer);

$customer_id=$customer['customer_id'];
 
  
  
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


 

<br>
<div id="content">
   <div class="container">
     
	     
		    <div class="col-md-12">
			  <div class="box">
			    <div class="box-header">
				  <center><h2>Payment Options</h2><p class="text-muted">Feel free to ask any queries if any..we feel glad to respond you</p></center>	
				
				</div>
				<center>
				<div><b>Pay With</b>
				<a href="http://www.paypal.com"><img src="../images/payment.jpg" width="200" height="80"></a>
				<b> or
			
				<a href="../order.php?c_id=<?php echo $customer_id;?>">Pay Offline</a></b> 
				</div>
				</center>
				
				
			  </div>
			 
			  
			</div>
		 
		 
		 
	      </div>
          </div>		  
		   
		   
		   <div>

<?php include 'footer.php';?>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>