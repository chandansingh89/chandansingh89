<?php
include("includes/db.php");

if(isset($_GET['delete_order'])){

$delete_id=$_GET['delete_order'];

$delete_order="delete from pending_order where order_id='$delete_id'";

$run_delete=mysqli_query($con,$delete_order);

if($run_delete){

echo "<script>alert('one order has been deleted')</script>";

echo "<script>window.open('index2.php?view_order','_self')</script>";




}




}






?>