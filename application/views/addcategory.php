<!DOCTYPE html>
<html>
<head>
	<title> Add Category</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/addcategory.css"> </link>
		</head>
	<body>
	
		<div class="container">
			
			
			<form action="<?php echo base_url();?>/index.php/Customer/addcategory" method="post">
				<div class="form-input">
			    <input type="text" name="categoryname" placeholder="Enter Category Name">				
				</div>				
				
				
				
				<button type="submit" name="submit" value="Sign Up" class="btn-login"> Add Item </button>
				
				
			</form>
		</div>
	</body>
</html>	