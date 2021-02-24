<?php
$link=mysqli_connect("localhost","root","");
if($link===false)
{
	die("ERROR:could not connect".mysqli_connect_error());
}
$sql="create database reg_table";
if(mysqli_query($link,$sql))
{
	echo"database created";
}
else
{
	echo"Error".mysqli_error($link);
}