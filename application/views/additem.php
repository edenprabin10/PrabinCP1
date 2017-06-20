<!DOCTYPE html>
<html>
<head>
	<title> Adding Item</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/additem.css"> 
		</head>
	<body>	
		<div class="container">
			
			
			<?php echo form_open_multipart(base_url()."admin/additem/");?>

			<form action="<?php echo base_url();?>/admin/additem" method="post">
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
				</div>
				<!-- <div class="form-input">
				<input type="file" name="file" placeholder="Select Image">				
				</div>
				 -->
				
			<button>	<input type="submit" name="submit" value="upload" class="btn-login"> </button>
				
			</form>
		</div>
	</body>
</html>	