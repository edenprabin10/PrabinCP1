<!DOCTYPE html>
<html>
<head>
	<title> Adding Item</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"> </link>
		</head>
	<body>
	
		<div class="container">
			
			
			<form action="<?php echo site_url('Customer/getUpdate') ?>" method="post">
				<div class="form-input">
			    <input type="text" name="name" placeholder="Enter First Name">				
				</div>				
				<div class="form-input">
				<input type="text" name="price" placeholder="Enter Last Name">				
				</div>
				
				<div class="form-input">
				<input type="text" name="username" placeholder="Enter Username">				
				</div>
				
				<div class="form-input">
				<input type="password" name="password" placeholder="Enter Password">				
				</div>
				
				<div class="form-input">
				<input type="password" name="repassword" placeholder="Enter Repassword">		
				</div>
				
				<div class="form-input">
				<input type="text" name="email" placeholder="Enter Email">				
				</div>
				
				<div class="form-input">
				<input type="text" name="address" placeholder="Enter Address">				
				</div>
				
				<div class="form-input">
				<input type="text" name="contactno" placeholder="Enter Contact No.">				
				</div>
				
				<button type="submit" name="submit" value="Sign Up" class="btn-login"> Update Profile </button>
				
				
			</form>
		</div>
	</body>
</html>	