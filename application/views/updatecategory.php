<!DOCTYPE html>
<html lang="en">

<body>

<div class="container">
	<h1> Update Category </h1>
		<a href="<?php echo base_url();?>admin/selectlistcategory"> 
				<img src="<?php echo base_url();?>assets/images/back.png" style="margin-left: -300px; margin-top:0px;" />
	</a>

	<?php
		foreach($category as $row){
	?>
	
	<form action="<?php echo base_url();?>admin/selectlistcategory" method="post">
		<div class="form-input">
			<input type="hidden" name="hiddenID" value="<?php echo $row->categoryID; ?>" > <br>
			<input type="text" placeholder="Category Name" name="categoryName" value="<?php echo $row->categoryName; ?>" ><br>
			<button type="reset" class="btn btn-warning"> RESET </button>
			<button type="submit" name="add" class="btn btn-success"> UPDATE </button>
		</div>
	</form>
</div>

<?php
	}
?>

</body>
</html>