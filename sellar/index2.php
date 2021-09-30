

<?php
include("../includes/db.php");
include("../admin_area/functions/functions.php");
@session_start();
?>



<?php    
@session_start();
if(!isset($_SESSION['sellar_email']))
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
<div id="top">
    <div class="container">
       <div class="col-md-6 offer">
           <a href="#" class="btn btn-success btn-sm"><?php
		 
		   echo " <b> Welcome     ".$_SESSION['sellar_email']."</b>";
		   
		  
		   
		   ?></a>
             
         </div>
		      <div class="col-md-6">
			       <ul class="menu">
				       <li>   
					   <a href="sellar_registration.php">Sellar Register</a>
					   
					   </li>
					   
					   
					  
					   
					   <li>   
					   <a href="index.php"> Sellar Login</a>
					   
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
	   
	 
	 </div>
</div>	 

<br>
<div id="content">
   <div class="container">
     <div class="col-md-12">
	    <ul class="breadcrumb">
		  <li><a href="../index.php">Home</a></li>
		  <li>MyAccount</li>
		</ul>
	 </div>
	     <div class="col-md-3">
		 <?php include 'sidebar_s.php';?>
		 </div>
	       
		   <div class="col-md-9">
		   
		   <?php
		   if(isset($_GET['inst_prod_s'])){
		   include ("inst_prod_s.php");
		   
		   }
		   
		   ?>
		    <?php
		   if(isset($_GET['view_prod_s'])){
		   include ("view_prod_s.php");
		   
		   }
		   
		   ?>

		   
		    <?php
		   if(isset($_GET['view_order_s'])){
		   include ("view_order_s.php");
		   
		   }
		   
		   ?>

		   
		    <?php
		   if(isset($_GET['edit_act_s'])){
		   include ("edit_act_s.php");
		   
		   }
		   
		   ?>
		   
		   <?php
		   if(isset($_GET['change_pass_s'])){
		   include ("change_password_s.php");
		   
		   }
		   
		   ?>
		   
		   <?php
		   if(isset($_GET['delete_ac_s'])){
		   include ("delete_ac_s.php");
		   
		   }
		   
		   ?>
		   
		   
		    <?php
		   if(isset($_GET['logout'])){
		   include ("logout.php");
		   
		   }
		   
		   ?>
		   
		   </div>
		   
		   
		   
		   
		   
		   
		   
		   
	</div></div>	   
<div>		   
<?php include '../footer.php';?>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html



<?php }?>