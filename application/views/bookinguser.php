<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Booking List</title>
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
      <th>First Name</th>
      <th>Last Name</th>
      <th>Phone</th>
      <th>Booking Date</th>
      <th>Booking Time</th>
      <th>Customer ID </th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
    
    <tr>
    	<?php
	foreach ($message as $row){
		?>
	<td> <?php echo $row->firstname; ?> </td>
	<td> <?php echo $row->lastname; ?> </td>
	<td> <?php echo $row->phone; ?> </td>
	<td> <?php echo $row->bookingdate; ?> </td>
	<td> <?php echo $row->bookingtime; ?> </td>
	<td> <a href="<?php echo base_url() . "index.php/Admin/deletebooking/" . $row->bookingid; ?>">
<button>Delete</button></a> </td> 
	
</tr>

<?php
}
?>	    
   
  </tbody>
</table> 
</div>
</tbody>
</table>

