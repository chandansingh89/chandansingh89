<?php
include("includes/db.php");

if(isset($_GET['delete_cat'])){

$delete_id=$_GET['delete_cat'];

$delete_prod="delete from product_categories where p_cat_id='$delete_id'";

$run_delete=mysqli_query($con,$delete_prod);

if($run_delete){

echo "<script>alert('one product has been deleted')</script>";

echo "<script>window.open('index2.php?view_cat','_self')</script>";




}




}






?>