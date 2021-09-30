


<html><head></head>


<body>



<div class="box">
<center>
<h1>View All Payments</h1>
<p>if you have any question, feel free to ask ,our customer service is available 24/7.</p>
</center>
<hr>
 <div class="table-responsive">
   <table class="table table-bordered table-hover">
      <thead><tr><th>Sr.no.</th><th>Invoice No</th><th>Amount Paid.</th><th>Payment Method</th><th>Ref no</th><th>Date</th></tr></thead>
 <?php
include("../includes/db.php");
//include("../admin_area/functions/functions.php");
//@session_start();
$i=0;
	$get_payment="select * from payments";
			$run_payment=mysqli_query($con,$get_payment);
			 
			 while($row_pay=mysqli_fetch_array($run_payment)){
			 
			 $payment_id=$row_pay['payment_id'];
			 $invoice=$row_pay['invoice_no'];
			 $amount=$row_pay['amount'];
			 $payment_method=$row_pay['payment_method'];
			 $ref_no=$row_pay['ref_no'];
			 $date=$row_pay['payment_date'];
			
			$i++;
			
			
			
			
?>     



   
 
   <tbody><tr><td><?php echo $i; ?></td><td><?php echo $invoice;?></td><td><?php echo $amount;?></td><td><?php echo $payment_method;?></td><td><?php echo $ref_no;?></td><td><?php echo $date;?></td>
   
  
   
   
   </td><td><a href='delete_payment.php?delete_payment=<?php echo $payment_id;?>' target='_blank' class='btn btn-primary btn-sm'>Delete</a></td><td>

   
   
   
   </td></tr></tbody>
   
  <?php  }?>
   
   </table>
 
 
 
 </div>

</hr>
</div>

</body>

</html>