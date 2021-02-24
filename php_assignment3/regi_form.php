<!DOCTYPE html>
<html>
<head>
</head>
<style>

	input,textarea
	{
		padding:10px;
		margin:10px;
		text-align: center;
	}
	fieldset
	{

		width:300px;
		height:400px;

	}
	form h2
	{
		margin-left: 300px;
	}
	table
	{
		text-align: center;
	}
</style>
<body>
	<center>
<h2>Registration Form</h2>
<form method="GET" action="insertnew.php">
	<fieldset>
		<table>
		<tr>
				<td>
			Firstname:</td>
			<td><input type="text" name="fname" placeholder="Enter your Firstname">
				</td>
			</tr>
			<br>
						<tr>
				<td>
			Address:</td>
			<td><textarea name="address" placeholder="address"></textarea>
				</td>
			</tr>
			<br>
			
			
			
				<td>
			Email Id:</td><td><input type="Email"name="email" placeholder="email">
				</td>
			</tr>
			<br>
			<tr>
				<td>
			<tr>
				<td>
			<input type="submit" value="submit">
				</td>
			</tr>
		</table>
	</fieldset>
</form>
<h2>Viewtable</h2>
<table border='1'>
<thead>
<tr>
<th>SlNo</th>
<th>Name</th>
<th>Address</th>
<th>Email id</th>

<th colspan="3">Action</th>
</tr>
</thead>
<tbody>
<?php
$link=mysqli_connect("localhost","root","","reg_table");
$result="SELECT * from reg_det";
$res=mysqli_query($link,$result);
while($row=mysqli_fetch_assoc($res))
{
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['fname']."</td>
    <td>".$row['address']."</td>
    <td>".$row['email']."</td>
    <td><a href='viewform.php?id=".$row['id']."'>View</a></td>
    <td><a href='editform.php?id=".$row['id']."'>Edit</a></td>
    <td><a href='delete.php?id=".$row['id']."''>Delete</a></td>
    </tr>";
}
?>
</center>

</body>
</html>