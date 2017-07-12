<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Item</title>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"> </script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"> </script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>

<body>
	

<div class="container">

<table class="table table-striped table-hover ">
  <thead>
    <tr>
    <td> Item Name </td>
	<td> Item Price </td>
	<td> Item Quantity </td>
	<td> Item Date </td>
	<td> Action </td>
    </tr>
  </thead>
  <tbody>
    
    <tr class="info">
    	
      <?php
	foreach ($message as $row){ 
	
		?>
	


	<form method="post" action="<?php echo base_url();?>/index.php/cart/updateitemcart">
	 <input type="hidden" name="cartid" value="<?php echo $row->cartid; ?>">
	
	<td> <?php echo $row->itemname; ?> </td>
	<td> <?php echo $row->itemprice; ?> </td>
	<td> <input type="text" name="quantity" value="<?php echo $row->quantity;?>" > </td>
	
	<td> <?php echo $row->date; ?> </td>
	

	<td>
<?php echo anchor("index.php/cart/deletecartitem/{$row->cartid}",'Delete' );?>
	 </td>


<td> 
<?php echo anchor("index.php/cart/updates/{$row->cartid}",'Update' );?> </td>

	
	
</tr>
<?php
}
?>	
<button type="button" class="btn btn-success">Confirm</button>
<button type="back" class="btn btn-default" value="<?php echo site_url("home/customerdash");?>">Back</button>

   </form>
  </tbody>

</table>
</body>
</html>