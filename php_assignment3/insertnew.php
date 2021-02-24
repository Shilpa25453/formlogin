
<?php
$link=mysqli_connect("localhost","root","","reg_table");
if($link===false)
{
    die("error:could not connect".mysqli_connect_error());
}

$name=$_GET['fname'];
$address=$_GET['address'];
$email=$_GET['email'];
$result="insert into reg_det(fname,address,email)values('$name','$address','$email')";
if(mysqli_query($link,$result))
{
	echo "value inserted successfully";
}
else
{
	echo "could not insert$result".mysqli_error($link);
}


?>


		
</body>
</html>