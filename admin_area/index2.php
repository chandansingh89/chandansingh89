

<?php
include("includes/db.php");
//include("admin_area/functions/functions.php");

?>

<?php    
@session_start();
if(!isset($_SESSION['admin_email']))
{
echo "<script>window.open('index.php','_self')</script>";

}

else{





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
	   
	   
	 </div>
</div>	 

<br>
<div id="content">
   <div class="container">
     <div class="col-md-12">
	    <ul class="breadcrumb">
		  <li><a href="../index.php">Home</a></li>
		  <li>Admin Panel</li>
		</ul>
	 </div>
	     <div class="col-md-3">
		 <?php include 'includes/sidebar.php';?>
		 </div>
	       
		   <div class="col-md-9">
		   <?php //getdefault();?>
		   <?php
		   if(isset($_GET['inst_prod'])){
		   include ("insert_product.php");
		   
		   }
		   
		   ?>
		    <?php
		   if(isset($_GET['view_prod'])){
		   include ("view_prod.php");
		   
		   }
		   
		   ?>

		   
		    <?php
		   if(isset($_GET['edit_prod'])){
		   include ("edit_prod.php");
		   
		   }
		   
		   ?>
		   
		   <?php
		   if(isset($_GET['inst_cat'])){
		   include ("insert_cat.php");
		   
		   }
		   
		   ?>
		   
		   <?php
		   if(isset($_GET['view_cat'])){
		   include ("view_cat.php");
		   
		   }
		   
		   ?>
		   
		    
		   <?php
		   if(isset($_GET['view_cust'])){
		   include ("view_customer.php");
		   
		   }
		   
		   ?>
		   
		   
		     <?php
		   if(isset($_GET['view_order'])){
		   include ("view_order.php");
		   
		   }
		   
		   ?>
		   
		      <?php
		   if(isset($_GET['view_payment'])){
		   include ("view_payment.php");
		   
		   }
		   
		   ?>
		   
		   </div>
		   
		   
		   
		   
		   
		   
		   
		   
	</div></div>	   
<div>		   
<?php// include '../includes/footer.php';?>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>


<?php } ?>