


<?php
include("includes/db.php");
//include("admin_area/functions/functions.php");

?>


<html><head></head><body>

<div class="panel panel-default sidebar-menu">
  <div class="panel-heading">
     <h3 class="panel-title">Product Categories</h3>
  </div>
    <div class="panel-body">
	   <ul class="nav nav pills nav-stacked category">
	       <?php
	  getpcats();
	  
	  
	  ?>
	   </ul>
	</div>
</div>


<div class="panel panel-default sidebar-menu">
  <div class="panel-heading">
     <h3 class="panel-title"> Categories</h3>
  </div>
    <div class="panel-body">
	   <ul class="nav nav pills nav-stacked category">
	        <?php
	  getcat();
	  
	  
	  ?>
	   </ul>
	</div>
</div>


<div class="panel panel-default sidebar-menu">
  <div class="panel-heading">
     <h3 class="panel-title">Manufacturers</h3>
  </div>
    <div class="panel-body">
	   <ul class="nav nav pills nav-stacked category">
	      <li><a href="shop.php">Abhi</a></li>
		   <li><a href="shop.php">kabhi</a></li>
		    <li><a href="shop.php">nabi</a></li>
			 <li><a href="shop.php">jabhi</a></li>
			  <li><a href="shop.php">tabhi</a></li>
	   </ul>
	</div>
</div>




</body>
</html>