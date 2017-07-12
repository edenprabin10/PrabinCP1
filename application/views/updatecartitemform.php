<!DOCTYPE html>
<html>
<head>
	<title> Update Cart Item</title>
	 
		</head>
	<body>	
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<div class="container">
			
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/updatecartitem.css"> 
			
	


			<form action="<?php echo base_url();?>/Cart/updateitemcart" method="post">
<input type="hidden" name="cartid" value="<?php echo $cartid; ?>">
				
					
				<div class="form-input"> Quantity
				<input type="text" name="quantity"  value="<?php ?>">				
				</div>
				
				

						
			<button>	<input type="submit" name="submit" value="Update" class="btn-login"> </button>
				
			</form>
		<?php
	
		?>
		</div>
	</body>
</html>	