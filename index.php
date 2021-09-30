<!DOCTYPE html>
<?php
include("includes/db.php");
include("admin_area/functions/functions.php");
@session_start();
?>



<html>
<head>
<title>master-ji.com</title>

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
		   if(!isset($_SESSION['customer_email']))
		   {
		   echo "<b>Welcome Guest !!</b>";
		   
		   }else{
		   echo " <b> Welcome".$_SESSION['customer_email']."</b>";
		   
		   }
		   
		   ?></a>
               <a href="#">shopping cart total price:INR :<?php
			       totalprice();
			   ?></a>
         </div>
		      <div class="col-md-6">
			       <ul class="menu">
				       <li>   
					   <a href="customer_registration.php">Customer Register</a>
					   
					   </li>
					   
					  
					   
					   <li>   
					   <a href="cart.php">Goto cart</a>
					   
					   </li>
					   
					   <li>   
					   <a href="customer/customer_login.php"> Customer Login</a>
					   
					   </li>
				   
				   </ul>
			  
			  
			  </div>
		 
     </div>
</div>

<div class="navbar navbar-default" id="navbar">
   <div class="container">
      <div class="navbar-header">
	      <a class="navbar-brand home" href="index.php">
		   <img src="images/logo.jpg" class="hidden-xs">
		  <img src="images/logo2.jpg" class="visible-xs">
		  </a>
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
					 <li>
					    <a href="shop.php">Shop</a>
					 </li>	
					 <li>
					    <a href="customer/my_account.php">MyAccount</a>
					 </li>
					 <li>
					    <a href="cart.php">Shoping cart</a>
					 </li>
					 <li>
					    <a href="sellar/index.php">Sellar Panel</a>
					 </li>
					  
					  <li>
					    <a href="contactus.php">Contactus</a>
					 </li>
					 
				</ul>
            </div>
            <a href="cart.php" class="btn btn-primary navbar-btn right">
             <i class="fa fa-shopping-cart"></i>
                <span> <?php item();?> item in cart</span>			 
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


<div class="container" id="slider">
    <div class="col-md-12">
	   <div class="carousel slide" id="mycarousel" data-ride="carousel">
	   <ol class="carousel-indicators">
	   <li data-target="mycarousel" data-slide-to="0" class="active"></li>
	   <li data-target="mycarousel" data-slide-to="1" ></li>
	   <li data-target="mycarousel" data-slide-to="2" ></li>
	   <li data-target="mycarousel" data-slide-to="3" ></li>
       </ol>
	   
	   <div class="carousel-inner">
	     <div class="item active">
	        <img src="admin_area/slider_images/image1.jpg">
		 </div>	
          <div class="item ">
	        <img src="admin_area/slider_images/image2.jpg">
		 </div>	
          <div class="item ">
	        <img src="admin_area/slider_images/image3.jpg">
		 </div>
          <div class="item ">
	        <img src="admin_area/slider_images/image4.jpg">
		 </div>			 
       
         </div>
		 
		 <a href="#mycarousel" class="left carousel-control" data-slide="prev">
		 <span class="glyphicon glyphicon-chevron-left"</span>
		 <span class="sr-only">Previous</span>
		 </a>
		 
		 <a href="#mycarousel" class="right carousel-control" data-slide="next">
		 <span class="glyphicon glyphicon-chevron-right"</span>
		 <span class="sr-only">Next</span>
		 </a>
	   </div>
     </div>
   </div>	 



<div id="advantage">
   <div class="container">
       <div class="same-height-row">
          <div class="col-sm-4">
		     <div class="box same-height">
			    <div class="icon">
				   <i class="fa fa-heart"></i>
				</div> 
                   <h3><a href="#">Best Prices</h3>
                       <p>here you get the best prices...please try</p>				   
			 </div>
		   </div>
		   <div class="col-sm-4">
		     <div class="box same-height">
			    <div class="icon">
				   <i class="fa fa-heart"></i>
				</div> 
                   <h3><a href="#">Best Prices</h3>
                       <p>here you get the best prices...please try</p>				   
			 </div>
		   </div>
		    <div class="col-sm-4">
		     <div class="box same-height">
			    <div class="icon">
				   <i class="fa fa-heart"></i>
				</div> 
                   <h3><a href="#">Best Prices</h3>
                       <p>here you get the best prices...please try</p>				   
			 </div>
		   </div>
		  
		  
      </div>
   </div>
</div>



<div id="hot">
  <div class="box">
     <div class="container">
	    <div class="col-md-12">
	      <h2>Hello friends welcome to masterji...Enjoy the cheapest prices in the world with best quality</h2>
      	</div> 
      </div>
   </div>
</div>


<div id="content" class="container">
   <div class="row">
      <?php
	  getpro();
	  
	  
	  ?>
   </div>
</div>




<?php include 'footer.php';?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>