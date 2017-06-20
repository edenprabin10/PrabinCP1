<!DOCTYPE html>
<html>
<head>
	<title> Registration Form</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"> </link>
		</head>
	<body>
	
		<div class="container">
			
			<img src="<?php echo base_url();?>assets/img/signup.png" width="49">
			<form action="<?php echo site_url('Customer/getRegister') ?>" method="post">
				<div class="form-input">
			    <input type="text" name="firstname" placeholder="Enter Firstname">				
				</div>				
				<div class="form-input">
				<input type="text" name="lastname" placeholder="Enter Lastname">				
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
				
				<button type="submit" name="submit" value="Sign Up" class="btn-login"> Sign Up </button>
				<a href="#"> Forget Password ?</a> <br>
				
			</form>
		</div>
	</body>
</html>	