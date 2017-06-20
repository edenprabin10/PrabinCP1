<table>
	<thead>
		<tr>
			<td> Item Name </td>
			<td> Item Price </td>
			<td> Item Description </td>
			
		</tr>
	</thead>
	<tbody>
		<tr>
<?php
	foreach ($message as $row){
		?>
	<td> <?php echo $row->itemname; ?> </td>
	<td> <?php echo $row->itemprice; ?> </td>
	<td> <?php echo $row->itemdescription; ?> </td>

	<td> <a href="<?php echo base_url() . "index.php/Admin/deleteitem/" . $row->itemid; ?>">
	<button>Delete</button></a> </td>
	
</tr>
<?php
}
?>	