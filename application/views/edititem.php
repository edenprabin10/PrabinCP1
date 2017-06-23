<!DOCTYPE html>
<html>
<head>
	<title> Update Item</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/additem.css"> 
		</head>
	<body>	
		<div class="container">
			
			<?php
	foreach ($message as $value){
	

?>

			<form action="<?php echo base_url();?>/admin/edititem" method="post">
<input type="hidden" name="itemid" value="<?php echo $value->itemid; ?>">
					
				<div class="form-input">
			    <input type="text" name="itemname" placeholder="Enter Item Name" value="<?php echo $value->itemname; ?>">				
				</div>	

				<div class="form-input">
				<input type="text" name="itemprice" placeholder="Enter Item Price" value="<?php echo $value->itemprice; ?>" >				
				</div>
					
				<div class="form-input">
				<input type="text" name="itemdescription" placeholder="Enter Description" value="<?php echo $value->itemdescription; ?>">				
				</div>
				
				<div class="form-input">
				</div>

						
			<button>	<input type="submit" name="submit" value="Update" class="btn-login"> </button>
				
			</form>
		<?php
	}
		?>
		</div>
	</body>
</html>	