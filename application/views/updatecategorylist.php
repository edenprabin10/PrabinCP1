<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cafe Club</title>
	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>

<body>


<div class="container">
	<h1> Category List </h1>
		<a href="<?php echo base_url();?>Home/admindash"> 
			
				<img src="<?php echo base_url();?>assets/images/back.png" style="margin-left: -250px; margin-top:-10px;" />
	</a>
	<table class="table">
		<thead>
			<th> Name </th>
			<th> Action </th>
		</thead>
		<tbody>
	<?php
	foreach ($records as $row){
		?>
			<tr>
				<td> <?=$row->categoryname ?> </td>
				<td> 
					<?php echo anchor("admin/editcategory/{$row->categoryid}", 'Edit', ['class'=>"btn btn-primary"]); ?> 

					  <?php echo anchor('admin/addcategory', 'Add Post',['class'=>'label label-success']); ?>
				</td>
			</tr>
		<?php 
			} 
		?>	
		</tbody>
	</table>
</div>



</body>
</html>