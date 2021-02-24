<!DOCTTYPE html>
<html>
<head>
	<title></title>
	<style>
		table{
			border:2px solid;
			padding: 20px;
			margin: 10px;
		}
	</style>
</head>
	<body>
			<table>
				<tr>
					<td>name:</td>
			<td><input type="text" name="name" placeholder="name"></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="address" name="address" placeholder="address"></td>
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
			<td><input type="text" name="age" placeholder="age"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" placeholder="email"></td>
		</tr>
		<tr>
			<td>Password:</td>
		    <td><input type="password" name="name" placeholder="password"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Register"></td>
		</tr>
	</table>
</body>
</html>