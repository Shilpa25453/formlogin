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
		<form method="post" action="<?php echo base_url()?>main/updatedetails">
		<?php
		if(isset($user_data))
		{
			foreach($user_data->result() as $row1)
			{
				?>
				<table>
					<tr>
						<td>name:</td>
						<td><input type="text" name="name" value="<?php echo $row1->name;?>"></td>
					</tr>
					<tr>
						<td>address:</td>
						<td><textarea name="address"><?php echo $row1->address;?></textarea></td>
					</tr>
					<tr>
						<td>gender:</td>
						<td><select name="gender">
							<option><?php echo $row1->gender;?>
						</option>
						<option>male</option>
						<option>female</option>
					</td>


					</tr>
					<tr>
						<td>age:</td>
						<td><input type="text" name="age" value="<?php echo $row1->age;?>"></td>
					</tr>
					<tr>
						<td>emailid:</td>
						<td><input type="text" name="emailid" value="<?php echo $row1->emailid;?>"></td>
					</tr>
					<tr>
						<input type="hidden" name="id" value="<?php echo $row1->id;?>">
						<td><input type="submit" name="update" value="update"></td>
					</tr>
				</table>
				<?php
			}
		}
		else
		{
			?>
		
		<table>
			<thead>
			<tr>
			
				<th>name</th>
				<th>address</th>
				<th>gender</th>
				<th>age</th>
				<th>email</th>
			
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
		<td><?php echo $row->gender;?></td>
		<td><?php echo $row->age;?></td>
		<td><?php echo $row->emailid;?></td>
		<input type="hidden" name="id" value="<?php echo $row->id;?>">
		<td><a href="<?php echo base_url()?>main/updatedetails/<?php echo $row->id;?>">edit</a></td>
		<td><a href="<?php echo base_url()?>main/deletedetails/<?php echo $row->id;?>">delete</a></td>
		</tr>
		<?php
}
}
else
{
	?>
	<tr>
		<td>no data found</td>
		</tr>
	<?php
}
}
?>
	
	</table>
</form>
	</body>
	</html>

