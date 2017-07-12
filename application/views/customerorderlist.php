<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View Order</title>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"> </script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"> </script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>

<body>

<div class="container">


<table class="table table-striped table-hover ">
	<h4> Customer Order List </h4>
  <thead>
    <tr>
    <td> Customer ID </td>
	<td> Item Name </td>
	<td> Quantity </td>
	<td> Item Price </td>
	
	

    </tr>
  </thead>
  <tbody>
    
    <tr class="info">
      <?php
	foreach ($message as $row){
		?>
	<td> <?php echo $row->customerid; ?> </td>
	<td> <?php echo $row->itemname; ?> </td>
	<td> <?php echo $row->itemprice; ?> </td>
	<td> <?php echo $row->quantity; ?> </td>

	</tr>


<?php
}
?>	
  
  </tbody>
</table>
<button><a href="<?php echo site_url("home/admindash");?>"> Back</a> </button>
</div>
</body>
</html>