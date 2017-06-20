<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"> </script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"> </script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
	<table>
	<thead>
		<tr>
			<td> First Name </td>
			<td> Last Name </td>
			<td> Username </td>
			<td> Email </td>
			<td> Address </td>
			<td> Mobile No </td>
			<td> Delete </td>
		</tr>
	</thead>
	<tbody>
		<tr>
<?php
	foreach ($message as $row){
		?>
	<td> <?php echo $row->first_name; ?> </td>
	<td> <?php echo $row->last_name; ?> </td>
	<td> <?php echo $row->username; ?> </td>
	<td> <?php echo $row->email; ?> </td>
	<td> <?php echo $row->address; ?> </td>
	<td> <?php echo $row->mobile_no; ?> </td>
	<td> <a href="<?php echo base_url() . "index.php/admin/deletecustomer/" . $row->itemid; ?>">
	<button>Delete</button></a> </td>
	
</tr>
<?php
}
?>	