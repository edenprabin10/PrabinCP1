<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Customer List</title>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"> </script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"> </script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>

<body>
	

<div class="container">

<table class="table table-striped table-hover ">

	<thead>
		<h2> Customer List </h2>

		<tr>
			<td> First Name </td>
			<td> Last Name </td>
			<td> Username </td>
			<td> Email </td>
			<td> Address </td>
			<td> Mobile No </td>
			<td> Customer ID</td>
			<td> Delete </td>
		</tr>
	</thead>
	<tbody>
		
<?php
	foreach ($message as $row){
		?>
		<tr>
	<td> <?php echo $row->first_name; ?> </td>
	<td> <?php echo $row->last_name; ?> </td>
	<td> <?php echo $row->username; ?> </td>
	<td> <?php echo $row->email; ?> </td>
	<td> <?php echo $row->address; ?> </td>
	<td> <?php echo $row->mobile_no; ?> </td>
	<td> <?php echo $row->customerid; ?> </td>
	<td> <a href="<?php echo base_url() . "admin/deletecustomer/" . $row->customerid; ?>">
	<button>Delete</button></a> </td>
	
</tr>
<?php
}
?>	
 </tbody>
</table>

 <a href="<?php echo site_url("home/admindash");?>"> Back</a>
