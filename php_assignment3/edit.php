<?php
require('connect.php');


    $id=$_POST['id'];

    $name=$_POST['fname'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $res="UPDATE reg_det SET fname='$name',address='$address',email='$email' where id='$id'";
    mysqli_query($link,$res);
     header("Location: regi_form.php");


?>