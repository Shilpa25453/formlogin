<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
table{
border:2px solid;
padding:20px;
margin:10px;
}
</style>
</head>
<body>
<form method="post" action="<?php echo base_url()?>main/register">
<table>
<tr>
<td>Name:</td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td>Address:</td>
<td><textarea name="address"></textarea></td>
</tr>
<tr>
<td>District:</td>
<td><input list="location" name="district">
<datalist id="location">
<option value="trivandrum">
<option value="Eranakulam">
<option value="Kollam">
</datalist>
</td>
</tr>
<tr>
<td>Pincode:</td>
<td><input type="text" name="pincode"></td>
</tr>
<tr>
<td>Phonenumber:</td>
<td><input type="text" name="phonenumber"></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="radio" name="gender" value="male"> male</td>
<td><input type="radio" name="gender" value="female"> female</td>
</tr>
<tr>
<td>Age:</td>
<td><input type="date" name="age"></td>
</tr>
<tr>
<td>Subject:</td>
<td><input list="subject" name="subject">
<datalist id="subject">
<option value="physics">
<option value="maths">
<option value="computer">
<option value="biology">
<option value="hindi">
</datalist></td>
</tr>
<tr>
<td>Email id:</td>
<td><input type="email" name="email"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td><input type="submit" name="Register"></td>
</tr>
</table>
</body>
</html>

