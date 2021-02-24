<?php
$link=mysqli_connect("localhost","root","","reg_table");
$sq="CREATE TABLE reg_det(id int NOT NULL AUTO_INCREMENT PRIMARY KEY, name varchar(20),address varchar(50),email varchar(32))";
if(mysqli_query($link,$sq))
{
echo "create successfully";
}
else{
	echo "could not connect".mysqli_error($link);
}
?>