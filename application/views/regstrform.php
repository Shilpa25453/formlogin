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

		<form method="post" action="<?php echo base_url()?>main/regg">
		<table>
			<th>
				<td><h1>REGISTRATION</h1></td>
			</th>
			<tr>
					<td>firstname:</td>
					<td><input type="text" name="firstname" placeholder="firstname" pattern=".{3,}"   required title="3 characters minimum" maxlength="25"></td>
			</tr>
			<tr>
					<td>lastname:</td>
					<td><input type="text" name="lastname" placeholder="lastname" pattern=".{3,}"   required title="3 characters minimum"  maxlength="25></td>
			</tr>
			<tr>
					<td>username:</td>
					<td><input type="text" name="username" placeholder="username" required pattern=".{3,}"   required title="3 characters minimum" maxlength="10"></td>
			</tr>
			<tr>
					<td>password:</td>
					<td><input type="password" name="password" placeholder="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"></td>
			</tr>
			<tr>
					<td>mobile:</td>
					<td><input type="text" name="mobile" placeholder="mobile" required minlength="10"maxlength="10"></td>
			</tr>
			<tr>
					<td>email:</td>
					<td><input type="email" name="email" placeholder="email" required></td>
			</tr>
			<tr>
			<td><input type="submit" value="Register"></td>
		</tr>
		
	
	</table>
</form>
	</body>
	</html>
