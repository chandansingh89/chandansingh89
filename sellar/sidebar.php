
















<div class="panel panel-default sidebar-menu">
  <div class="panel-heading">
     <center>
	 
<?php
include("../includes/db.php");
//include("../admin_area/functions/functions.php");
@session_start();
global $con;
$sellar_session=$_SESSION['sellar_email'];
$get_sellar_pic="select * from sellar where sellar_email='$sellar_session'";
$run_sellar=mysqli_query($con,$get_sellar_pic);
$row_sellar=mysqli_fetch_array($run_sellar);
$sellar_pic=$row_customer['sellar_image'];
$sellar_name=$row_customer['sellar_name'];
	 echo "<img src='sellar_image/$sellar_pic' class='img-responsive'>";?>
	 </center>
	 <br>
	 <h3 align="center" class="panel-title">Welcome!!<?php echo $sellar_name; ?></h3>
   </div>
       <div class="panel-body">
	   
	   <ul class="nav nav-pills nav-stacked">
	       <li class="<?php if (isset($_GET[inst_prod_s])){echo "active";}?>">
		   <a href="index2.php?inst_prod_s">
		   <i class="fa fa-list"></i>Insert Products</a></li>
	        
			<li class="<?php if (isset($_GET[view_prod_s])){echo "active";}?>">
		   <a href="index2.php?view_prod_s">
		   <i class="fa fa-bolt"></i>View Products</a></li>

           <li class="<?php if (isset($_GET[view_order_s])){echo "active";}?>">
		   <a href="index2.php?view_order_s">
		   <i class="fa fa-bolt"></i>View Orders</a></li>

           <li class="<?php if (isset($_GET[edit_acct_s])){echo "active";}?>">
		   <a href="index2.php?edit_act_s">
		   <i class="fa fa-bolt"></i>Edit Account</a></li>

            <li class="<?php if (isset($_GET[change_pass_s])){echo "active";}?>">
		   <a href="index2.php?change_pass_s">
		   <i class="fa fa-bolt"></i>Change Password</a></li>
          

           <li class="<?php if (isset($_GET[delete_ac_s])){echo "active";}?>">
		   <a href="index2.php?delete_ac_s">
		   <i class="fa fa-bolt"></i>Delete Account</a></li>


             <li class="<?php if (isset($_GET[logout])){echo "active";}?>">
		   <a href="index2.php?logout">
		   <i class="fa fa-bolt"></i>Log Out</a></li>


	   
	   </ul>
	   
	   </div>




</div>