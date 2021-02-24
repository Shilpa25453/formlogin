<!DOCTTYPE html>
<html>
<head>
	<title></title>
	<style>
		table{
			border:2px solid;
			padding: 20px;
			margin: 40px;
		}
	</style>
</head>
	<body>
		<form method="post" action="<?php echo base_url()?>main/viewers">
			<?php
		if(isset($user_data))
		{
			foreach($user_data->result() as $row1)
			{
				?>
			<table>
				<th>
					<td><h1>Student Updation</h1></td>
				</th>
				<tr>
					<td>firstname:</td>
			<td><input type="text" name="firstname" value="<?php echo $row1->firstname;?>" ></td>
		</tr>
		<tr>
					<td>lastname:</td>
			<td><input type="text" name="lastname" value="<?php echo $row1->lastname;?>"></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><textarea name="address" value="<?php echo $row1->address;?>"></textarea></td>
		</tr>
		<tr>
<td>District:</td>
<td><input type="text" name="district" value="<?php echo $row1->district;?>">
</td>
</tr>
		<tr>
					<td>pincode:</td>
			<td><input type="text" name="pincode" value="<?php echo $row1->pincode;?>"></td>
		</tr>
		<tr>
					<td>phone number:</td>
			<td><input type="text" name="phonenumber" value="<?php echo $row1->phonenumber;?>"></td>
		</tr>
		<tr>
					<td>dob:</td>
			<td><input type="text" name="dob"value="<?php echo $row1->dob;?>"></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td><input type="radio" name="gender" value="<?php echo $row1->gender;?>"></td>
			
			</tr>
			<tr>
<td>HighestEducation::</td>
<td><input type="education" name="education" value="<?php echo $row1->education;?>">
</td>
</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" value="<?php echo $row1->email;?>"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Update"></td>
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

?>
	</table>
</form>
</body>
</html>