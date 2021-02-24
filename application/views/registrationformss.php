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
		<form method="post" action="<?php echo base_url()?>main/regist_form">
			<table>
				<th>
					<td><h1>registration</h1></td>
				</th>
				<tr>
					<td>firstname:</td>
			<td><input type="text" name="firstname" placeholder="firstname"></td>
		</tr>
		<tr>
					<td>lastname:</td>
			<td><input type="text" name="lastname" placeholder="lastname"></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><textarea name="address"></textarea></td>
		</tr>
		<tr>
					<td>district:</td>
			<td><input type="text" name="district" placeholder="district"></td>
		</tr>
		<tr>
					<td>pincode:</td>
			<td><input type="text" name="pincode" placeholder="pincode"></td>
		</tr>
		<tr>
					<td>phone number:</td>
			<td><input type="text" name="phonenumber" placeholder="phone number"></td>
		</tr>
		<tr>
					<td>dob:</td>
			<td><input type="date" name="dob" ></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td><input type="radio" name="gender" id="male">
			<label for="male">male</label></td>
			<td><input type="radio" name="gender" id="female">
				<label for="female">female</label></td>
			</tr>
			<tr>
				<td>higher education</td>
			<td><input type="text" name="highereducation" placeholder="highereducation"></td>
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