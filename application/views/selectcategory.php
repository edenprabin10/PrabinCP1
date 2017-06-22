<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View Category</title>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"> </script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"> </script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>

<body>

<div class="container">
	<h1>  Category List </h1>
	<a href="<?php echo base_url();?>admin/listCategoryUpdate"> 
		<!-- <img src="<?php echo base_url();?>assets/images/back.png" style="margin-left: -200px; margin-top:-17px;" /> -->
	</a>
	<table class="table table-striped table-hover ">
  <thead>    
        
    <tr class="info">
      <td>Category List</td>
      
    </tr>
  </thead>

  <tbody>
   
    <?php foreach ($message as $row):?>
  <tr>
   
    <td><?php echo $row->categoryname?></td>
         
      <td>
        <?php echo anchor('admin/addcategory', 'Add Post',['class'=>'label label-primary']); ?>
        <?php echo anchor('admin/updatecategory', 'Update Post',['class'=>'label label-success']); ?>

       
      </td>
    </tr>
  <?php endforeach;?>    
 
  </tbody>
</table> 
	<!-- <table class="table">
		<tbody>
		<?php foreach ($message as $row){
		?>
				<td> <?=$row->categoryname ?> </td>
			</tr>
		<?php 
			} 
		?>	
		</tbody>
	</table> -->
</div>

</body>
</html>