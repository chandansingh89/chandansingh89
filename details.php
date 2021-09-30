<?php
include("includes/db.php");
include("admin_area/functions/functions.php");

?>




<?php
if(isset($_GET['pro_id'])){
$pro_id=$_GET['pro_id'];
$get_product="select * from product where product_id='$pro_id'";
$run_product=mysqli_query($con,$get_product);
$row_product=mysqli_fetch_array($run_product);
$p_cat_id=$row_product['p_cat_id'];
$p_title=$row_product['product_title'];
$p_price=$row_product['product_price'];
$p_desc=$row_product['product_desc'];
$p_img1=$row_product['product_img1'];
$p_img2=$row_product['product_img2'];
$p_img3=$row_product['product_img3'];
$get_p_cat="select * from product_categories where p_cat_id='$p_cat_id'";
$run_p_cat=mysqli_query($con,$get_p_cat);
$row_p_cat=mysqli_fetch_array($run_p_cat);
$p_cat_id=$row_p_cat['p_cat_id'];
$p_cat_title=$row_p_cat['p_cat_title'];


}




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
           <a href="#" class="btn btn-success btn-sm">Welcome Guest</a>
               <a href="#">shopping cart total price:INR :<?php
			   totalprice();
			   ?></a>
         </div>
		      <div class="col-md-6">
			       <ul class="menu">
				       <li>   
					   <a href="customer_registration.php">Register</a>
					   
					   </li>
					   
					   <li>   
					   <a href="checkout.php">My Account</a>
					   
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
					 <li>
					    <a href="shop.php">Shop</a>
					 </li>	
					 <li>
					    <a href="customer/my_account.php">MyAccount</a>
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
		  <li>Shop</li>
		  <li><a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title;?></a> </li>
		  <li><?php echo $p_title;?></li>
		  
		  
		  
		  
		  
		</ul>
	 </div>
	     <div class="col-md-3">
		 <?php include 'sidebar.php';?>
		 </div>
	   
	   <div class="col-md-9">
	      <div class="row" id="productmain">
		     <div class="col-sm-6">
			    <div id="mainimage">
				   <div id="mycarousel" class="carousel slide" data-ride="carousel">
				      <ol class="carousel-indicators">
					     <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
						     <li data-target="#mycarousel" data-slide-to="1" ></li>
							     <li data-target="#mycarousel" data-slide-to="2" ></li>
								     <li data-target="#mycarousel" data-slide-to="3"></li>
					  </ol>
					  
					    <div class="carousel-inner">
						   <div class="item active">
						      <center>
							   <img src="admin_area/product_images/<?php echo $p_img1?>" class="img-responsive">
							   </center>
						   </div>
						   <div class="item ">
						      <center>
							   <img src="admin_area/product_images/<?php echo $p_img2?>" class="img-responsive">
							   </center>
						   </div>
						   <div class="item ">
						      <center>
							   <img src="admin_area/product_images/<?php echo $p_img3?>" class="img-responsive">
							   </center>
						   </div>
						 
						   
						   
						</div>
						   <a href="#mycarousel" class="left carousel-control" data-slide="prev">
						   <span class="glyphicon glyphicon-chevron-left"></span>
						   <span class="sr-only">Previous</span>
						   </a>
						   
						    <a href="#mycarousel" class="right carousel-control" data-slide="next">
						   <span class="glyphicon glyphicon-chevron-right"></span>
						   <span class="sr-only">Next</span>
						   </a>
				   </div>
				</div>
			 </div>
			     
				 <div class="col-sm-6">
				    <div class="box">
					  <h1 class="text"><?php echo $p_title;?></h1>
					  <?php
					  addcart();
					  
					  ?>
					  
					     <form action="details.php?add_cart=<?php echo $pro_id;?>" method="post" class="form-horizontal">
						   <div class="form-group">
						     <label class="col-md-5 control-label">Product Quantity</label>
							   <div class="col-md-7">
                                  <select name="product_qty" class="form-control">
								    <option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
								  </select>							  
							   </div>
						    </div>
						   <div class="form-group">
						     <label class="col-md-5 control-label">Product Size</label>
							
							 <div class="col-md-7">
							  <select name="product_size" class="form-control">
								    <option>selectproductsize</option>
									<option>small</option>
									<option>medium</option>
									<option>large</option>
									<option>extra-large</option>
									
								  </select>							  
							   </div>
						   </div>
						   <p class="Price">INR:<?php echo $p_price;?></p>
						   <p class"text-center buttons">
						   <button class="btn btn-primary" type="submit" >
						   <i class="fa fa-shopping-cart">    Add to shopping cart</i></button></p>
						  
						 </form>
					</div>
					   <div class="col-xs-4">
					   <a href="" class="thumb">
					   <img src="admin_area/product_images/<?php echo $p_img1?>" class="img-responsive">
					    </a>
					    </div>
						 <div class="col-xs-4">
					   <a href="" class="thumb">
					   <img src="admin_area/product_images/<?php echo $p_img2?>" class="img-responsive">
					    </a>
					    </div>
						 <div class="col-xs-4">
					   <a href="" class="thumb">
					   <img src="admin_area/product_images/<?php echo $p_img3?>" class="img-responsive">
					    </a>
					    </div>
						
					
				 </div>
			 
		  </div>
		       <div class="box" id="details"
			     <h4>Product details</h4>
				   <p><?php echo $p_desc; ?></p>
                    <h4>size</h4>
                       <ul>
					     <li>small</li>
						  <li>medium</li>
						   <li>lagre</li>
						    <li>extra large</li>
							 
					   </ul>					
				   </div>
		            <div id="row same-height-row">
					  <div class="col-md-3 col-sm-6">
					    <div class="box same-height-headline">
						   <h3 class="text-center">You may like these products.</h3>
						</div>
					  </div>
                          <?php
						  $get_product="select * from product order by 1 LIMIT 0,3";
						  $run_product=mysqli_query($con,$get_product);
						  while($row=mysqli_fetch_array($run_product)){
						  $pro_id=$row['product_id'];
						   $pro_title=$row['product_title'];
						    $pro_price=$row['product_price'];
							 $pro_img1=$row['product_img1'];
						  echo "
						  <div class='center-responsive col-md-3 col-sm-6'>
						  
						  <div class='product same-height'>
						  <a href='details.php?pro_id=$pro_id'>
						  <img src ='admin_area/product_images/$pro_img1' class='img-responsive'>
						  
						  </a>
						  <div class='text'>
						  <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
						  <p class='price'>$pro_price</p>
						  </div>
						  
						  
						  
						  
						  
						  </div>
						  
						  
						  
						  
						  
						  
						  </div>
						  
						  
						  ";
						  
						  
						  }
						  
						  
						  
						  
						  ?> 
                           						  
					</div>
				 
				 
	   </div>
	   
	  </div> 
	  </div> 
	   

<?php include 'footer.php';?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>	   