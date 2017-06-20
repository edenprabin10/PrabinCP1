<?php
	foreach($profile as $row){
?>
	<form action="<?php echo base_url();?>Customer/updateCustomerDetails" method="post">

	<table>
		<tr>
			<td> <input type="hidden" name="customerID" value="<?php echo $row->customerID; ?>"> </td> 
		</tr> 
		<tr> 
			<td> <label for="firstName"> First Name </label> </td> 
			<td> <input type="text" name="firstName" value="<?php echo $row->customerFirstName;?> "> </td> 
		</tr> 
		<tr> 
			<td> <label for="firstName"> Last Name </label> </td> 
			<td> <input type="text" name="lastName" value="<?php echo $row->customerLastName;?>"> </td>
		</tr>
		<tr>
			<td> <label for="firstName"> Email </label> </td> 
			<td> <input type="email" name="email" value="<?php echo $row->email; ?>"> </td> 
		</tr>
		<tr>
			<td> <label for="firstName"> Username </label> </td> 
			<td> <input type="text" name="username" value="<?php echo $row->username; ?>"> </td> 
		</tr>
		<tr>
			<td> <label for="mobileNumber"> Mobile Number </label> </td> 
			<td> <input type="text" name="mobileNumber" value="<?php echo $row->mobileNumber; ?>"> </td> 
		</tr>
		<tr>
			<td> <label for="firstName"> District </label> </td> 
			<td>
		<div class="styled-select">
		
		
		<tr>
			<td> </td>
			<td> <button type="submit" name="add" class="btn btn-info"> UPDATE </button> </td>
		</tr>
	</form>	
	
<?php	
	}
?>	