

<?php
include("includes/db.php");
include("admin_area/functions/functions.php");

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
           <a href="#" class="btn btn-success btn-sm">Welcome Guest</a>
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
					    <a href="customer/my_account.php">MyAccount</a>
					 </li>
					 <li>
					    <a href="cart.php">Shopping cart</a>
					 </li>
					 <li>
					    <a href="sellar/index.php">Sellar Panel</a>
					 </li>
					  
					  <li class="active">
					    <a href="contactus.php">Contact us</a>
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

<br>
<div id="content">
   <div class="container">
     <div class="col-md-12">
	    <ul class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li>Contact Us</li>
		</ul>
	 </div>
	     <div class="col-md-3">
		 <?php include 'sidebar.php';?>
		 </div>
		    <div class="col-md-9">
			  <div class="box">
			    <div class="box-header">
				  <center><h2>Contact Us</h2><p class="text-muted">Feel free to ask any queries if any..we feel glad to respond you</p></center>	
				
				</div>
			  </div>
			  <form action="contactus.php" method="post">
			     <div class="form-group">
				   <label>Name</label>
				   <input type="text" name="name" required="" class="form-control">
				 </div>
				 
				 <div class="form-group">
				   <label>Email</label>
				   <input type="text" name="email" required="" class="form-control">
				 </div>
				 
				 <div class="form-group">
				   <label>Subject</label>
				   <input type="text" name="subject" required="" class="form-control">
				 </div>
				 
				 <div class="form-group">
				   <label>Message</label>
				   <textarea name="message" required="" class="form-control"></textarea>
				 </div>
				 
				 <div class="text-center">
				   <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-user-md"></i>
				   Send Message</button></div>
				 </div>
			  
			  </form>
			  
			</div>
		 
		 
		 
	      </div>
          </div>		  
		   
		   
		   <div>

<?php include 'footer.php';?>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>