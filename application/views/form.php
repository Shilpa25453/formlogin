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
		<form method="post" action="<?php echo base_url()?>main/regist">
			<table>
				<th>
					<td><h1>registration</h1></td>
				</th>
				<tr>
					<td>name:</td>
			<td><input type="text" name="name" placeholder="name"></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><textarea name="address"></textarea></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td><input type="radio" name="gender" id="male">
			<label for="male">male</label></td>
			<td><input type="radio" name="gender" id="female">
				<label for="female">female</label></td>
			</tr>
			<tr>
				<td>Age</td>
			<td><input type="age" name="age" placeholder="age"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" placeholder="email"></td>
		</tr>
		<tr>
			<td>Password:</td>
		    <td><input type="password" name="password" placeholder="password"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Register"></td>
		</tr>
	</table>
</form>
</body>
</html>