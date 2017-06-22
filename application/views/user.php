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
	<td> <a href="<?php echo base_url() . "index.php/Admin/deletecustomer/" . $row->customerid; ?>">
	<button>Delete</button></a> </td>
	
</tr>
<?php
}
?>	