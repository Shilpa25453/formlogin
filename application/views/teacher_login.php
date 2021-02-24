<!DOCTTYPE html>
<html>
<head>
	<title></title>
</head>
	<style>
		form
		{
			margin:10px;
			padding:15px;
			height:200px;
			width:100px;

		}
	</style>

	<body>
			<form action="<?php echo base_url()?>main/log_student">
			<fieldset>
				email id:<input type="email id" name="email id" placeholder=" enter your email id"><br>
				password:<input type="password" name="password" placeholder=" enter your password"><br>
				<input type="submit" value="login">
			</fieldset>
		</form>
	</body>
	</html>

