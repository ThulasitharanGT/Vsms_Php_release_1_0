<?php
if(isset($_SESSION['username'])){
	header("location:Error.php");
}
?>
<html>
<head>
<title> Vehicle Showroom Management System</title><link rel="stylesheet" href="../util/vsms_theme.css">

</head>
<br>
  <a href="ShowroomManagement.php"> back </a> 
<body bgcolor="orange">
<br><br>
<center> <h1>Vehicle Showroom Management System</h1><br>
<h4>Register Staff</h4>
<form action="../util/StaffAddingFunction.php" method='post'>
<table cellpadding=5 cellspacing=5 border=5>
<tr>
<td>DESIGNATION</td><td><input type="text" name="DESIGNATION"> </td>
<tr>
<td>NAME</td><td><input type="text" name="NAME"></td>
<tr>
<td>DATE_OF_JOINING</td><td><input type="text" name="DATE_OF_JOINING"></td>
<tr>
<td>STAFF_ID</td><td><input type="text" name="STAFF_ID"></td>
<tr>
<td>DATE_OF_BIRTH</td><td><input type="text" name="DATE_OF_BIRTH"></td>
<tr>
<td>ACTIVE_INACTIVE</td><td><input type="text" name="ACTIVE_INACTIVE"></td>
</tr>
<tr>
<td>BRANCH_ID</td><td><input type="text" name="BRANCH_ID"></td>
</tr>
<tr>
<td><center><input type="submit" name="Cancel" value="Cancel"></center></td>
<td><center><input type="submit" name="Insert" value="Insert"></center></td>
</tr>
</table>
</form>