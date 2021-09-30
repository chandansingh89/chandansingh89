


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
      <thead><tr><th>Sr.no.</th><th>Category Title</th><th>Category Description</th><th>Delete</th></tr></thead>
 <?php
include("../includes/db.php");
//include("../admin_area/functions/functions.php");
//@session_start();
$i=0;
	$get_cat="select * from product_categories ";
			$run_cat=mysqli_query($con,$get_cat);
			 
			 while($row_p=mysqli_fetch_array($run_cat)){
			 
			 $cat_id=$row_p['p_cat_id'];
			 $cat_title=$row_p['p_cat_title'];
			 $cat_desc=$row_p['p_cat_desc'];
			 
			 
			
			$i++;
			
			
			
			
?>     



   
 
   <tbody><tr><td><?php echo $i; ?></td><td><?php echo $cat_title;?></td><td><?php echo $cat_desc;?></td><td><a href='delete_cat.php?delete_cat=<?php echo $cat_id;?>' target='_blank' class='btn btn-primary btn-sm'>Delete</a></td><td>
   

   
   
   
   
   
   </td></tr></tbody>
   
  <?php  }?>
   
   </table>
 
 
 
 </div>

</hr>
</div>

</body>

</html>