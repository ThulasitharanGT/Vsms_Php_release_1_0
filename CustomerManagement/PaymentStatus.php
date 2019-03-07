<?php
if(isset($_SESSION['username'])){
	header("location:../util/Error.php");
}
?>


<html>
<head>
<title> Vehicle Showroom Management System</title> <link rel="stylesheet" href="../util/vsms_theme.css">
</head><body bgcolor="lightgreen">
<br>
 <a href="CustomerManagement.php"> back </a> 
<br><br>
<center> <h1>Vehicle Showroom Management System</h1><br>
<h4>Payment Status</h4>
<form action="../util/PaymentStatusFunction.php" method='post'>
<table cellpadding=5 cellspacing=5 border=5>
<tr>
<td>CUSTOMER_ID</td><td><input type="text" name="CUSTOMER_ID"></td>
<tr>
<tr>
<td><center><input type="submit" name="Cancel" value="Cancel"></center></td>
<td><center><input type="submit" name="Search" value="Search"></center></td>
</tr>
</table>
</form>