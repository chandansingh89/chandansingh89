
















<div class="panel panel-default sidebar-menu">
  <div class="panel-heading">
     <center>
	 
<?php
include("../includes/db.php");
//include("../admin_area/functions/functions.php");
@session_start();
global $con;
$customer_session=$_SESSION['customer_email'];
$get_customer_pic="select * from customer where customer_email='$customer_session'";
$run_customer=mysqli_query($con,$get_customer_pic);
$row_customer=mysqli_fetch_array($run_customer);
$customer_pic=$row_customer['customer_image'];
	 echo "<img src='customer_images/$customer_pic' class='img-responsive'>";?>
	 </center>
	 <br>
	 <h3 align="center" class="panel-title">Name:chandan singh</h3>
   </div>
       <div class="panel-body">
	   
	   <ul class="nav nav-pills nav-stacked">
	       <li class="<?php if (isset($_GET[my_order])){echo "active";}?>">
		   <a href="my_account.php?my_order">
		   <i class="fa fa-list"></i>My Order</a></li>
	        
			<li class="<?php if (isset($_GET[pay_offline])){echo "active";}?>">
		   <a href="my_account.php?pay_offline">
		   <i class="fa fa-bolt"></i>Pay Offline</a></li>

           <li class="<?php if (isset($_GET[my_address])){echo "active";}?>">
		   <a href="my_account.php?my_address">
		   <i class="fa fa-bolt"></i>My Address</a></li>

           <li class="<?php if (isset($_GET[edit_acct])){echo "active";}?>">
		   <a href="my_account.php?edit_act">
		   <i class="fa fa-bolt"></i>Edit Account</a></li>

            <li class="<?php if (isset($_GET[change_pass])){echo "active";}?>">
		   <a href="my_account.php?change_pass">
		   <i class="fa fa-bolt"></i>Change Password</a></li>
          

           <li class="<?php if (isset($_GET[delete_ac])){echo "active";}?>">
		   <a href="my_account.php?delete_ac">
		   <i class="fa fa-bolt"></i>Delete Account</a></li>


             <li class="<?php if (isset($_GET[logout])){echo "active";}?>">
		   <a href="my_account.php?logout">
		   <i class="fa fa-bolt"></i>Log Out</a></li>


	   
	   </ul>
	   
	   </div>




</div>