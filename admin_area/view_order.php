


<html><head></head>


<body>



<div class="box">
<center>
<h1>View All Order</h1>
<p>if you have any question, feel free to ask ,our customer service is available 24/7.</p>
</center>
<hr>
 <div class="table-responsive">
   <table class="table table-bordered table-hover">
      <thead><tr><th>Order.no.</th><th>Customer Id</th><th>Invoice no.</th><th>Product id</th><th>Qty</th><th>Status</th><th>Delete</th></tr></thead>
 <?php
include("../includes/db.php");
//include("../admin_area/functions/functions.php");
//@session_start();
$i=0;
	$get_order="select * from pending_order ";
			$run_order=mysqli_query($con,$get_order);
			 
			 while($row_ord=mysqli_fetch_array($run_order)){
			 
			 $order_id=$row_ord['order_id'];
			 $cust_id=$row_ord['customer_id'];
			 $invoice=$row_ord['invoice_no'];
			 $prod_id=$row_ord['product_id'];
			 
			 $qty=$row_ord['qty'];
			  $status=$row_ord['order_status'];
			$i++;
			
			
			
			
?>     



   
 
   <tbody><tr><td><?php echo $i; ?></td><td><?php echo $cust_id;?></td><td><?php echo $invoice;?></td><td><?php echo $prod_id;?></td><td><?php echo $qty;?></td><td><?php echo $status;?></td>
   
  
   
   
   </td><td><a href='delete_ord.php?delete_order=<?php echo $order_id;?>' target='_blank' class='btn btn-primary btn-sm'>Delete</a></td><td>

   
   
   
   </td></tr></tbody>
   
  <?php  }?>
   
   </table>
 
 
 
 </div>

</hr>
</div>

</body>

</html>