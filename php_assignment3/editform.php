<html>
<head>
	<title>
		Registration Form
	</title>
	<style>
		table
		{
			text-align:center;
			margin: 20px;
			padding:20px;

		}
		body
		{
			text-align: center;
			margin:30px;
		}
		tr,td
		{
			margin:30px;
			padding: 15px;
		}
		fieldset
		{
			width:500px;

			margin-left: 300px;
		}
		input
		{
			
		}
	</style>
</head>
<body>
	<fieldset>
	<table>
    <?php
require('connect.php');
$id=$_GET['id'];
$result="select * from reg_det where id='$id'";
$res=mysqli_query($link,$result);
while($row=mysqli_fetch_assoc($res))
{
    
    ?>
		
			<h1>Registration Form</h1>
			<form action="edit.php" method="post">
            <tr><td><input type="hidden" name="id" value="<?php echo $row['id']; ?>"></td></tr>
				<tr><td> First Name:</td><td><input type="text" name="fname" value="<?php echo $row['fname']; ?>"></td></tr>
                <tr><td> Address:</td><td><textarea name="address"><?php echo $row['address']; ?></textarea></td></tr>
				<tr><td>E-mail:</td><td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td></tr>
				<tr><td></td><td><input type="submit" name="submit" value="ok"></td></tr>
                <?php
}
?>
		
			</form>
	
	</table>
	</fieldset>
    </body>
</html>