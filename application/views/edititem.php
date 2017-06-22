<!DOCTYPE html>
<html>
<head>
	<title> Update Item</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/additem.css"> 
		</head>
	<body>	
		<div class="container">
			
			<?php
	foreach ($message as $value){
	

?>

			<form action="<?php echo base_url();?>/admin/additem" method="post">

					
				<div class="form-input">
			    <input type="text" name="itemname" placeholder="Enter Item Name" value="<?php echo $value->itemname; ?>">				
				</div>	

				<div class="form-input">
				<input type="text" name="itemprice" placeholder="Enter Item Price" value="<?php echo $value->itemprice; ?>" >				
				</div>
					
				<div class="form-input">
				<input type="text" name="itemdescription" placeholder="Enter Description" value="<?php echo $value->itemdescription; ?>">				
				</div>
				
				<div class="form-input">
				</div>

				<!-- <div class="styled-select">
				<select name="categoryID">
				<?php
					foreach($records as $row){ 
				?>
					<option value="<?=$row->categoryID ?> "> 		
						<?=$row->categoryname ?> 
						
					</option>
				<?php 
			}
					?>
			</select> 
		</div> -->


                        <label for="category">Select categories:</label>                        
                            <select size="1" name="categoryid" id="">
                                     <option value=<?php echo $value->categoryid?>>
                                                   <?php echo $value->categoryname;?>  
                                     </option> 
                            </select>			
			<button>	<input type="submit" name="submit" value="Add" class="btn-login"> </button>
				
			</form>
		<?php
	}
		?>
		</div>
	</body>
</html>	