<!DOCTYPE html>
<html>
<head>
	<title> Adding Item</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/additem.css"> 
		</head>
	<body>	
		<div class="container">
			
			
			<?php echo form_open_multipart(base_url()."Admin/additem/");?>

			<form action="<?php echo base_url();?>/admin/additem" method="post">

					
				<div class="form-input">
			    <input type="text" name="itemname" placeholder="Enter Item Name">				
				</div>	

				<div class="form-input">
				<input type="text" name="itemprice" placeholder="Enter Item Price">				
				</div>
				
				<div class="form-input">
				<input type="text" name="itemdescription" placeholder="Enter Description">				
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
                            <select size="1" name="categoryID" id="">
                                <option value="">Select category </option>
                                <?php if(count($getCategory)):?>
                                    <?php foreach($getCategory as $category):?>
                                     <option value=<?php echo $category->categoryid?>>
                                                   <?php echo $category->categoryname;?>  
                                     </option> 
                                 <?php endforeach;?>
                             <?php else:?>
                             <?php endif;?>
                            </select>
                        
                    




				<!-- <div class="form-input">
				<input type="file" name="file" placeholder="Select Image">				
				</div>
				 -->
				
			<button>	<input type="submit" name="submit" value="Add" class="btn-login"> </button>
				
			</form>
		</div>
	</body>
</html>	