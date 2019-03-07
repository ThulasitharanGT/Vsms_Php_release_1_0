<?php
if(isset($_SESSION['username'])){
	header("location:./Login_Register/Error.php");
}
?>
<html>
<head>
<title> Vehicle Showroom Management System</title><link rel="stylesheet" href="../util/vsms_theme.css">

</head>
<br>
 <a href="../index.php"> back </a>  
<body bgcolor="yellow">
<br><br>
<center> <h1>Vehicle Showroom Management System</h1><br>
<h4>Register User</h4>
<form action="RegisterUserFunction.php" method='post'>
<table cellpadding=5 cellspacing=5 border=5>
<tr>
<td>USER ID</td><td><input type="text" name="userid"> </td>
<tr>
<td>PASSWORD</td><td><input type="password" name="password"></td>
<tr>
<td>CONFIRM PASSOWRD</td><td><input type="password" name="password2"></td>
<tr>
<td>STAFF ID</td><td><input type="text" name="staffid"></td>
<tr>
<tr>
<td><center><input type="submit" name="Cancel" value="Cancel"></center></td>
<td><center><input type="submit" name="Register" value="Register"></center></td>
</tr>
</table>
</form>
</head>
</html>