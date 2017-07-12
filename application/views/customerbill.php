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
    <td> Customer ID </td>	
    <td> Item Name </td>
	<td> Item Price </td>
	<td>  Quantity </td>
	<td> Date </td>
	<td> Total Amount </td>
	

    </tr>
  </thead>
  <tbody>
    
    <tr class="info">
      <?php
      $totalamount=0;
	foreach ($bill as $row){
		/*array bata data select gareko*/
		$price=$row['itemprice'];
		$quantity=$row['quantity'];
		$total=$price * $quantity;
		$totalamount+=$total;
		?>

	<td> <?php echo $row['customerid'];  ?> </td>	
	<td> <?php echo $row['itemname']; ?> </td>
	<td> <?php echo $row['itemprice']; ?> </td>
	<td> <?php echo $row['quantity']; ?></td>
	<td> <?php echo $row['date']; ?> </td>
	<td> <?php 
		
		echo $total; ?>
	</td>
	

</tr>


<?php
}
?>	


<td> Grand Total : <?php echo $totalamount; ?></td>
  <a href="<?php echo site_url("home/customerdash");?>"> Back</a>
  </tbody>
</table>