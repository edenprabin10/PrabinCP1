<!DOCTYPE html>
<html>
<head>
	<title> Update Profile</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"> </link>
		</head>
	<body>
	
		<div class="container">

			<?php 
			foreach ($message as $value) {
			
			?>			
			<img src="<?php echo base_url();?>assets/img/signup.png" width="49">
			<form action="<?php echo site_url('Customer/editcustomer') ?>" method="post">

				<div class="form-input"><!-- 
					<input type="hidden" name="customerid" value="<?php echo $value->customerid; ?>"> -->
			    <input type="text" name="firstname" value="<?php echo $value->first_name;?>">				
				</div>				
				<div class="form-input">
				<input type="text" name="lastname" value="<?php echo $value->last_name;?>" >				
				</div>
				
				<div class="form-input">
				<input type="text" name="username" value="<?php echo $value->username;?>">				
				</div>
				
				<div class="form-input">
				<input type="password" name="password" value="<?php echo $value->password;?>">				
				</div>
				
			
				<div class="form-input">
				<input type="text" name="email"  value="<?php echo $value->email;?>" >				
				</div>
				
				<div class="form-input">
				<input type="text" name="address" value="<?php echo $value->address;?>" >				
				</div>
				
				<div class="form-input">
				<input type="text" name="contactno"  value="<?php echo $value->mobile_no;?>" >				
				</div>
				
				<button type="submit" name="submit" value="Update" class="btn-login"> 
				 Update </button>
				 <a href="<?php echo site_url("home/customerdash")?>"> Back</a> <br>
				
			
				
			</form>
				<?php
	}
		?>
		</div>
	</body>
</html>		