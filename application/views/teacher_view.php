<!DOCTTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,th,td{
			border:1px solid;

		}
	</style>
	</head>
	<body>
<form>
		<table>
			
			<tr>
			
				<td>firstname</td>
				<td>lastname</td>
				<td>address</td>
				<td>district</td>
				<td>pincode</td>
				<td>phonenumber</td>
				<td>gender</td>
				<td>age</td>
				<td>subject</td>
				<td>email</td>
			
			</tr>
			</thead>
		<?php
		if($n->num_rows()>0)
		{
			foreach($n->result()as $row)
		{
		?>
		<tr>
		
		<td><?php echo $row->name;?></td>
		<td><?php echo $row->address;?></td>
		<td><?php echo $row->district;?></td>
		<td><?php echo $row->pincode;?></td>
		<td><?php echo $row->phonenumber;?></td>
		<td><?php echo $row->gender;?></td>
		<td><?php echo $row->age;?></td>
		<td><?php echo $row->subject;?></td>
		<td><?php echo $row->email;?></td>
		<?php
		if($row->status==1)
		{
			?>
			
			<?php
		}
		elseif($row->status==2)
		{
			?>
			
			<?php
		}
		else
		{
			?>

		
		
		<?php
}
}}
else
{
	?>
	
	<?php
}

?>
	
	</table>
</form>
	</body>
	</html>

