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
		   echo " <b> Welcome     ".$_SESSION['customer_email']."</b>";
		   
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
					 <li>
					    <a href="shop.php">Shop</a>
					 </li>	
					 <li>
					    <a href="customer/my_account.php">MyAccount</a>
					 </li>
					 <li  class="active">
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
                <span><?php item();?> item in cart</span>			 
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


<div id="content">
   <div class="container">
     <div class="col-md-12">
	    <ul class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li>cart</li>
		</ul>
	 </div>
	  
     <div class="col-md-9" id="cart"> 
	 <div class="box">
	    <form action="cart.php" method="post" enctype="multipart-form-data">
		<h1>Shopping cart</h1>
		<?php
		$ip_add=getuserip();
		$select_cart="select * from cart where ip_add='$ip_add'";
		$run_cart=mysqli_query($con,$select_cart);
		$count=mysqli_num_rows($run_cart);
		
		?>
		
		
		
         <p class="text-muted">Currently you have <?php echo $count;?>  item in your cart</p>
          <div class="table-responsive">
            <table class="table">
			  <thead>
			  <tr>
			  <th colspan="2">Product</th>
			    <th>Quantity</th>
				  <th>Unit Price</th>
				    <th>Size</th>
					  <th colspan="1">Delete</th>
					    <th colspan="1">Sub Total</th>
						</tr>
						</thead>
                         <tbody>
						     <?php
							 $total=0;
							 while($row=mysqli_fetch_array($run_cart)){
							 $pro_id=$row['p_id'];
							 $pro_size=$row['size'];
							 $pro_qty=$row['qty'];
							 $get_product="select * from product where product_id='$pro_id'";
							 $run_pro=mysqli_query($con,$get_product);
							 while($row=mysqli_fetch_array($run_pro)){
							 $p_title=$row['product_title'];
							  $p_img1=$row['product_img1'];
							   $p_price=$row['product_price'];
							   $sub_total=$row['product_price'] * $pro_qty;
							   $total +=$sub_total
							 
							 
							 ?>
						 
						 
						     <tr>
							  <td><img src="admin_area/product_images/<?php echo $p_img1;?>"></td>
							  <td><?php echo $p_title;?></td>
							    <td><?php echo $pro_qty;?></td>
								  <td>INR <?php echo $p_price;?></td>
								    <td><?php echo $pro_size;?></td>
									  <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"></td>
									    <td>INR  <?php echo $sub_total;?></td>

							  </tr> 
							 <?php }} ?>
							
						 </tbody>
						 <tfoot>
						  <tr><th colspan="5">Total :</th><th colspan="2">INR <?php echo $total;?></th></tr>
						 </tfoot>
            </table>			
          </div>	

               <div class="box-footer">
			     <div class="pull-left">
				   <a href="index.php" class="btn btn-default">
				   <i class="fa fa-chevron-left"></i>Continue Shopping
				   </a>
				 </div>
				 
				 <div class="pull-right">
				 <button class="btn btn-default" type="submit" name="update" value="Update Cart">
				 <i class="fa fa-refresh">Update cart</i></button>
			<a href="customer/checkout.php" class="btn btn-primary">Proceed to checkout</a><i class="fa fa-chevron-right"></i>
				 
				 </div>
			   
			   </div>

		  
		</form>
	 
	 </div>

	 <?php
	 function update_cart(){
	 global $con;
	 if(isset($_POST['update'])){
	 foreach($_POST['remove'] as $remove_id){
	 $delete_product="delete from cart where p_id='$remove_id'";
	 $run_del=mysqli_query($con,$delete_product);
	 
	 if($run_del){
	 
	 echo "<script>window.open('cart.php','_self')</script>";
	 
	 
	 }
	 
	 
	 
	 }
	 
	 
	 
	 }
	 
	 
	 
	 
	 }
	
echo @$up_cart=update_cart();	
	 
	 
	 ?>
	 
	 
	 
	 
	 <div id="row same-height-row">
					  <div class="col-md-3 col-sm-6">
					    <div class="box same-height-headline">
						   <h3 class="text-left">You may like these products.</h3>
						</div>
					  </div>
                          <div class="center-responsive col-md-3">
                            <div class="product same-height">
							  <a href=""><img src="admin_area/product_images/product1.jpg" class="img-responsive"></a>
							  <div class="text">
							    <h3><a href="details.php">this is the product information text</a></h3>
								<p class="price">INR 200</p>
							  </div>
							</div>
						  </div> 	
                          <div class="center-responsive col-md-3">
                            <div class="product same-height">
							  <a href=""><img src="admin_area/product_images/product2.jpg" class="img-responsive"></a>
							  <div class="text">
							    <h3><a href="details.php">this is the product information text</a></h3>
								<p class="price">INR 200</p>
							  </div>
							</div>
						  </div> 
						  <div class="center-responsive col-md-3">
                            <div class="product same-height">
							  <a href=""><img src="admin_area/product_images/product3.jpg" class="img-responsive"></a>
							  <div class="text">
							    <h3><a href="details.php">this is the product information text</a></h3>
								<p class="price">INR 200</p>
							  </div>
							</div>
						  </div> 
                          
                           						  
					</div>
	 </div>
	                 <div class="col-md-3">
					   <div class="box" id="order-summary">
					     <div class="box-header">
						   <h3>Order Summary</h3>
					   </div>
					   <p class=""text-muted">shipping and additional are calculated based on value you entered</p>
					   <div class="table-responsive">
					   <table class="table">
					      <tbody>
						    <tr><td>Order Sub total</td><th>INR 398</th></tr>
		                    <tr><td>Shipping and handling</td><th>INR 00</th></tr>
						    <tr><td>Tax</td><th>INR 0</th></tr>
							<tr><td>Total</td><th>INR 800</th></tr>
					       
						  
						  </tbody>
					   </table>
					   
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