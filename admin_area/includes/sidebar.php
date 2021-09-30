
















<div class="panel panel-default sidebar-menu">
  <div class="panel-heading">
     <center>
	 
<?php
include("../includes/db.php");
//include("../admin_area/functions/functions.php");
@session_start();
global $con;
//$customer_session=$_SESSION['customer_email'];
//$get_customer_pic="select * from customer where customer_email='$customer_session'";
//$run_customer=mysqli_query($con,$get_customer_pic);
//$row_customer=mysqli_fetch_array($run_customer);
//$customer_pic=$row_customer['customer_image'];
	// echo "<img src='customer_images/$customer_pic' class='img-responsive'>";?>
	 </center>
	 <br>
	 <h3 align="center" class="panel-title">Name:chandan singh</h3>
   </div>
       <div class="panel-body">
	   
	   <ul class="nav nav-pills nav-stacked">
	       <li class="<?php if (isset($_GET[inst_prod])){echo "active";}?>">
		   <a href="index2.php?inst_prod">
		   <i class="fa fa-list"></i>Insert Product</a></li>
	        
			<li class="<?php if (isset($_GET[view_prod])){echo "active";}?>">
		   <a href="index2.php?view_prod">
		   <i class="fa fa-bolt"></i>View Product</a></li>

           <li class="<?php if (isset($_GET[inst_cat])){echo "active";}?>">
		   <a href="index2.php?inst_cat">
		   <i class="fa fa-bolt"></i>Insert Category</a></li>

           <li class="<?php if (isset($_GET[view_cat])){echo "active";}?>">
		   <a href="index2.php?view_cat">
		   <i class="fa fa-bolt"></i>View Category</a></li>

            <li class="<?php if (isset($_GET[view_cust])){echo "active";}?>">
		   <a href="index2.php?view_cust">
		   <i class="fa fa-bolt"></i>View Customers</a></li>
          

           <li class="<?php if (isset($_GET[view_order])){echo "active";}?>">
		   <a href="index2.php?view_order">
		   <i class="fa fa-bolt"></i>View Orders</a></li>

		   
		   
           <li class="<?php if (isset($_GET[view_payment])){echo "active";}?>">
		   <a href="index2.php?view_payment">
		   <i class="fa fa-bolt"></i>View Payments</a></li>
		   
		   

             <li class="<?php if (isset($_GET[logout])){echo "active";}?>">
		   <a href="logout.php?logout">
		   <i class="fa fa-bolt"></i>Log Out</a></li>


	   
	   </ul>
	   
	   </div>




</div>