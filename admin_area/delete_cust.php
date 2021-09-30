<?php
include("includes/db.php");

if(isset($_GET['delete_cust'])){

$delete_id=$_GET['delete_cust'];

$delete_cust="delete from customer where customer_id='$delete_id'";

$run_delete=mysqli_query($con,$delete_cust);

if($run_delete){

echo "<script>alert('one customer has been deleted')</script>";

echo "<script>window.open('index2.php?view_customer','_self')</script>";




}




}






?>