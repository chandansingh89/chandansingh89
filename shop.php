
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
					   <a href="customer/customer_login.php">Customer Login</a>
					   
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
					 <li  class="active">
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
					
					  <li>
					    <a href="contactus.php">Contact us</a>
					 </li>
					 
				</ul>
            </div>
            <a href="cart.php" class="btn btn-primary navbar-btn right">
             <i class="fa fa-shopping-cart"></i>
                <span><?php item();?>item in cart</span>			 
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
		  <li>Shop</li>
		</ul>
	 </div>
	     <div class="col-md-3">
		 <?php include 'sidebar.php';?>
		 </div>
	       
		  <div class="col-md-9">
		  <?php
		  if(!isset($_GET['p_cat'])){
		   if(!isset($_GET['cat_id'])){
		   echo "
		     <div class='box'>
			 <h1>Shop</h1>
			 <p>this theme is created by er chandan singh.Explore the best features of this site</p>
		     </div>";
			 }
			 }
			 ?>
		  </div>
		  
		  <div class="row">
		     <?php
		  if(!isset($_GET['p_cat'])){
		   if(!isset($_GET['cat_id'])){
		   $per_page=6;
		   if(isset($_GET['page'])){
		   
		   $page=$_GET['page'];
		   
		   }else{
		   $page=1;
		   
		   }
		   $start_from=($page-1)*$per_page;
		   $get_product="select * from product order by 1 DESC LIMIT $start_from,$per_page";
		   $run_pro=mysqli_query($con,$get_product);
		   while($row=mysqli_fetch_array($run_pro)){
		   $pro_id=$row['product_id'];
		   $pro_title=$row['product_title'];
		   $pro_price=$row['product_price'];
		   $pro_img1=$row['product_img1'];

		   echo "   
		   <div class='col-md-4 col-sm-6 center-responsive'>
		      <div class='product'>
			  <a href='details.php?pro_id=$pro_id'>
			  <img src='admin_area/product_images/$pro_img1' class='img-responsive'>
			  </a>
			  <div class='text'>
			  <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
			  <p class='price'>
			  INR $pro_price
			  </p>
			  <p class='buttons'>
			  <a href='details.php?pro_id=$pro_id' class='btn btn-default'>
			  
			  View Details
			  </a>
			   <a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
			   <i class='fa fa-shopping-cart'></i>
			  
			  Add To Cart
			  </a>
			  </p>
			  
			  
			  
			  
			  </div>
			  
			  </div>
		   
		   
		   
		   
		   
		   </div>
		   
		   
		   
		   ";
		   
		   
		   
		   }
		   
		   ?>
		   
		   
		   </div>
		  
		     <center>
			   <ul class="pagination">
			       <?php
				   $query="select * from product";
				   $result=mysqli_query($con,$query);
				   $total_record=mysqli_num_rows($result);
				   $total_pages=ceil($total_record/$per_page);
				   
				   echo "
				   <li><a href='shop.php?page=1'>".'first page'."</a></li>
				   
				   
				   ";
				   
				   for($i=1;$i<=$total_pages;$i++){
				   
				    echo "
				   <li><a href='shop.php?page=".$i."'>".$i."'</a></li>
				   
				   
				   ";
				   
				   
				   }
				   
				     
				   echo "
				   <li><a href='shop.php?page=$total_pages'>".'Last Page'."</a></li>
				   
				   
				   ";
				   
				   
				   
				   
				   
				   }}
				   
				   
				   
				   ?>
			   </ul>
			 </center>
			 
			 
			 <?php
			 getpcatpro();
			 
			getcatpro();
			 ?>
  </div>
</div>



<?php include 'footer.php';?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>