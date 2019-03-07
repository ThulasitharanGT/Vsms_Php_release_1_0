<?php
if(isset($_SESSION['username'])){
	header("location:Error.php");
}
?>
<html>
<head>
<title> Vehicle Showroom Management System</title><link rel="stylesheet" href="../util/vsms_theme.css">

</head>
<br><body bgcolor="lightgreen">
  <a href="CustomerManagement.php"> back </a>  
<br><br>
<center> <h1>Vehicle Showroom Management System</h1><br>
<h4>Register Customer</h4>
<form action="../util/RegisterCustomerFunction.php" method='post'>
<table cellpadding=5 cellspacing=5 border=5>
<tr>
<td>BRANCH_ID</td><td><input type="text" name="BRANCH_ID"> </td>
<tr>
<td>CUSTOMER_ID</td><td><input type="text" name="CUSTOMER_ID"></td>
<tr>
<td>DATE_OF_INQUIRY</td><td><input type="text" name="DATE_OF_INQUIRY"></td>
<tr>
<td>MOBILE_NUMBER</td><td><input type="text" name="MOBILE_NUMBER"></td>
<tr>
<td>MAIL_ID</td><td><input type="text" name="MAIL_ID"></td>
<tr>
<td>MODEL</td><td><input type="text" name="MODEL"></td>
</tr>
<tr>
<td>NAME</td><td><input type="text" name="NAME"></td>
</tr>
<tr>
<td><center><input type="submit" name="Cancel" value="Cancel"></center></td>
<td><center><input type="submit" name="Insert" value="Insert"></center></td>
</tr>
</table>
</form>