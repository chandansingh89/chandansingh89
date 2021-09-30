


<html><head></head>


<body>



<div class="box">
<center>
<h1>View All Customer</h1>
<p>if you have any question, feel free to ask ,our customer service is available 24/7.</p>
</center>
<hr>
 <div class="table-responsive">
   <table class="table table-bordered table-hover">
      <thead><tr><th>Sr.no.</th><th>Name</th><th>Email</th><th>Image</th><th>Country</th><th>Delete</th></tr></thead>
 <?php
include("../includes/db.php");
//include("../admin_area/functions/functions.php");
//@session_start();
$i=0;
	$get_cust="select * from customer ";
			$run_cust=mysqli_query($con,$get_cust);
			 
			 while($row_p=mysqli_fetch_array($run_cust)){
			 
			 $cust_id=$row_p['customer_id'];
			 $cust_name=$row_p['customer_name'];
			 $cust_email=$row_p['customer_email'];
			 $cust_image=$row_p['customer_image'];
			 
			 $cust_country=$row_p['customer_country'];
			$i++;
			
			
			
			
?>     



   
 
   <tbody><tr><td><?php echo $i; ?></td><td><?php echo $cust_name;?></td><td><?php echo $cust_email;?></td><td><?php 	 echo "<img src='../customer/customer_images/$cust_image' width='50' height='50' class='img-responsive'>";?></td><td>
   
  
   
   
   </td><td><a href='delete.php?delete_cust=<?php echo $cust_id;?>' target='_blank' class='btn btn-primary btn-sm'>Delete</a></td><td>

   
   
   
   </td></tr></tbody>
   
  <?php  }?>
   
   </table>
 
 
 
 </div>

</hr>
</div>

</body>

</html>