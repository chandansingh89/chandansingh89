


<html><head></head>


<body>



<div class="box">
<center>
<h1>My Order</h1>
<p>if you have any question, feel free to ask ,our customer service is available 24/7.</p>
</center>
<hr>
 <div class="table-responsive">
   <table class="table table-bordered table-hover">
      <thead><tr><th>Sr.no.</th><th>Title</th><th>Product Price</th><th>Image</th><th>Total Sold</th><th>Sellar Email </th><th>Edit</th><th>Delete</th><th>Status</th></tr></thead>
 <?php
include("../includes/db.php");
//include("../admin_area/functions/functions.php");
//@session_start();
$i=0;
	$get_prod="select * from product ";
			$run_p=mysqli_query($con,$get_prod);
			 
			 while($row_p=mysqli_fetch_array($run_p)){
			 
			 $p_id=$row_p['product_id'];
			 $p_title=$row_p['product_title'];
			 $p_img=$row_p['product_img1'];
			 $p_price=$row_p['product_price'];
			 
			 $sellar_email=$row_p['sellar_email'];
			$i++;
			
			
			
			
?>     



   
 
   <tbody><tr><td><?php echo $i; ?></td><td><?php echo $p_title;?></td><td><?php echo $p_price;?></td><td><?php 	 echo "<img src='product_images/$p_img' width='50' height='50' class='img-responsive'>";?></td><td>
   
   <?php
   $get_sold="select * from pending_order where product_id='$p_id'";
   $run_sold=mysqli_query($con,$get_sold);
   $count=mysqli_num_rows($run_sold);
   echo $count;
   
   ?>
   
   
   </td><td><?php echo $sellar_email;?></td><td><a href='edit_prod.php?edit_prod=<?php echo $p_id;?>' target='_blank' class='btn btn-primary btn-sm'>Edit</a></td><td><a href='delete.php?delete_prod=<?php echo $p_id;?>' target='_blank' class='btn btn-primary btn-sm'>Delete</a></td><td>
   
<?php
   $get_status="select * from pending_order where product_id='$p_id'";
   $run_status=mysqli_query($con,$get_status);
   $row_status=mysqli_fetch_array($run_status);
   $p_status=$row_status['order_status'];
   echo $p_status;
   
   ?>
   
   
   
   
   
   </td></tr></tbody>
   
  <?php  }?>
   
   </table>
 
 
 
 </div>

</hr>
</div>

</body>

</html>