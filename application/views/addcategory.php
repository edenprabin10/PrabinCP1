<!DOCTYPE html>
<html>
<head>
	<title> Add Category</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/addcategory.css"> </link>
		</head>
	<body>
	
		<div class="container">
			<h1> Add Category </h1>
			
			<form action="<?php echo base_url();?>/index.php/Admin/addCategory" method="post">
				<div class="form-input">
			    <input type="text" name="categoryname" placeholder="Enter Category Name">				
				</div>				
				
				
				
				<button type="submit" name="submit" value="Sign Up" class="btn-login"> Add Category </button> </br></br>
				
				 <a href="<?php echo site_url("home/admindash");?>"> Back</a> </br> </br></br>
			</form>

		</div>
		
	</body>
</html>	