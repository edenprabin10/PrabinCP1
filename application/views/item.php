v<!DOCTYPE html>
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
	<td> Item Description </td>
    </tr>
  </thead>
  <tbody>
    
    <tr class="info">
      <?php
	foreach ($message as $row){
		?>
	<td> <?php echo $row->itemname; ?> </td>
	<td> <?php echo $row->itemprice; ?> </td>
	<td> <?php echo $row->itemdescription; ?> </td>

	<td> <a href="<?php echo base_url() . "index.php/Admin/deleteitem/" . $row->itemid; ?>">

	<button>Delete</button></a> </td>


	<td> <a href="<?php echo base_url() . "index.php/Admin/updateitem/" . $row->itemid; ?>">
		<button>Edit</button></a> </td>
	
</tr>
<?php
}
?>	
   
  </tbody>
</table>