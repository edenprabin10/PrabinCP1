<!DOCTYPE html>
<html>
<head>
	<title> Adding Item</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"> </link>
		</head>
	<body>
	
		<div class="container">
			
			
			<form action="<?php echo site_url('Customer/addItem') ?>" method="post">
				<div class="form-input">
			    <input type="text" name="itemname" placeholder="Enter Item Name">				
				</div>				
				<div class="form-input">
				<input type="text" name="itemprice" placeholder="Enter Item Price">				
				</div>
				
				<div class="form-input">
				<input type="text" name="itemdescription" placeholder="Enter Description">				
				</div>
				
				<div class="form-input">
				<input type="text" name="username" placeholder="Enter Image">				
				</div>
				
				
				<button type="submit" name="submit" value="Sign Up" class="btn-login"> Add Item </button>
				
				
			</form>
		</div>
	</body>
</html>	