<?php
include("includes/db.php");
include("admin_area/functions/functions.php");

@session_start();

if (isset($_GET['c_id'])){
$customer_id=$_GET['c_id'];
$c_email="select * from customer where customer_id='$customer_id'";
$run_email=mysqli_query($con,$c_email);
$row_email=mysqli_fetch_array($run_email);
$customer_email=$row_email['customer_email'];

$customer_name=$row_email['customer_name'];

 
}
                 global $con;
                 $ip_add=getuserip();
				   $total=0;
				    $i=0;
				   $select_cart="select * from cart where ip_add='$ip_add'";
				   $run_cart=mysqli_query($con,$select_cart);
				   while($record=mysqli_fetch_array($run_cart)){
				   $pro_id=$record['p_id'];
				   $pro_qty=$record['qty'];
				   		$i++;
				   }
					     $get_price="select * from product where product_id='$pro_id'";
						 $run_price=mysqli_query($con,$get_price);
						while($row_sellar_email=mysqli_fetch_array($run_price)){
						$product_name=$row_sellar_email['product_title'];
						 $sellar_email=$row_sellar_email['sellar_email'];
						 }
						 $status='pending';
						 $invoice_no=mt_rand();
						
						 $count_pro=mysqli_num_rows($run_price);
						 while($row=mysqli_fetch_array($run_price)){
						 $sub_total=$row['product_price']*$pro_qty;
						 $total+=$sub_total;
						 
			
						 }
						
    
	$insert_order="insert into customer_order(customer_id,due_amount,invoice_no,total_products,order_date,order_status)  values('$customer_id','$total','$invoice_no','$count_pro',NOW(),'$status')";
	$run_order=mysqli_query($con,$insert_order);
	if($run_order){
	echo "<script> alert('order submitted ')</script>";
	echo "<script>window.open('customer/my_account.php','_self')</script>";
	
	
	$insert_to_pending_order="insert into pending_order(customer_id,invoice_no,product_id,qty,order_status,sellar_email) values('$customer_id','$invoice_no','$pro_id','$qty','$status','$sellar_email')";
	$run_pending_order=mysqli_query($con,$insert_to_pending_order);
	
	$empty_cart="delete from cart where ip_add='$ip_add'";
	$run_empty=mysqli_query($con,$empty_cart);
	
	$from='master-ji.com';
	$subject='Order Details';
	$message="<html>
	<p>Hello dear <b style='color:blue;'>$customer_name</b> you have ordered some products from our site,find you ordered details below..thank you!!</p>
	<table width='600' align='center' bgcolor='#FFCC99' border='2'>
	
	<tr><td><h2>your order details from master-ji.com</h2></td></tr>
	<tr>
	<th><b>S .No</b></th>
	<th><b>Product Name</b></th>
	<th><b>Quantity</b></th>
	<th><b>Total Price</b></th>
	<th>Invoice</th>
	
	</tr>
	
	<tr>
	<td>$i</td>
    <td>$product_name</td>
	<td>$qty</td>
	<td>$total</td>
	<td>$invoice_no</td>
	
	
	</tr>
	
	
	</table>
	
	<h3>Thank you for using master-ji.com</h3>
	
	</html>
	
	
	
	
	
	";
	
	
	
	
	mail($customer_email,$subject,$message,$from);
	
	
	}
	
	
	 
				   
					 
				   
	
	
	
	
	
	
	
	
	
	
	
?>