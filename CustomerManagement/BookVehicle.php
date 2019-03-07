<?php
if(isset($_SESSION['username'])){
	header("location:./util/Error.php");
}
?>

<html>
<head>
<title> Vehicle Showroom Management System</title> <link rel="stylesheet" href="../util/vsms_theme.css">
</head>
<br>
 <a href="CustomerManagement.php"> back </a> 
<body bgcolor="lightgreen">
<br><br>
<center> <h1>Vehicle Showroom Management System</h1><br>
<h4>Book Vehicle</h4>
<form action="../util/BookVehicleFunction.php" method='post'>
<table cellpadding=5 cellspacing=5 border=5>
<tr>
<td>BRANCH_ID</td><td><input type="text" name="BRANCH_ID"> </td>
<tr>
<td>CUSTOMER_ID</td><td><input type="text" name="CUSTOMER_ID"></td>
<tr>
<td>PAYMENT_MODE</td><td><input type="text" name="PAYMENT_MODE"></td>
<tr>
<td>AMOUNT_PAID</td><td><input type="text" name="AMOUNT_PAID"></td>
<tr>
<td>PAYMENT_ID</td><td><input type="text" name="PAYMENT_ID"></td>
<tr>
<td>BOOKING_ID</td><td><input type="text" name="BOOKING_ID"></td>
</tr>
<tr>
<td>MODEL</td><td><input type="text" name="MODEL"></td>
</tr>
<tr>
<td>TOTAL_AMOUNT</td><td><input type="text" name="TOTAL_AMOUNT"></td>
</tr>
<tr>
<td>VEHICLE_ID</td><td><input type="text" name="VEHICLE_ID"> </td>
<tr>
<tr>
<td><center><input type="submit" name="Cancel" value="Cancel"></center></td>
<td><center><input type="submit" name="UPDATE" value="UPDATE"></center></td>
</tr>
</table>
</form>