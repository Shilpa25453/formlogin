<?php
include('connect.php');
$id=$_GET['id'];
$sql="delete from reg_det where id='$id' ";

mysqli_query($link, $sql);
header("Location:regi_form.php");
?>