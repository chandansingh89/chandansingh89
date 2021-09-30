<?php
include("includes/db.php");

if(isset($_GET['delete_payment'])){

$delete_id=$_GET['delete_payment'];

$delete_cust="delete from payments where payment_id='$delete_id'";

$run_delete=mysqli_query($con,$delete_cust);

if($run_delete){

echo "<script>alert('one payment has been deleted')</script>";

echo "<script>window.open('index2.php?view_payment','_self')</script>";




}




}






?>