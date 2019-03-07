<?php
if(isset($_SESSION['username'])){
	header("location:Error.php");
}
?>
<html>
<head>
<title> Vehicle Showroom Management System</title><link rel="stylesheet" href="../util/vsms_theme.css">
</head>
<br><body bgcolor="orange">
 <a href="ShowroomManagement.php"> back </a> 
<br><br>
<center> <h1>Vehicle Showroom Management System</h1><br>
<h4>Update Vehicle</h4>
<form action="../util/UpdateVehicleFunction.php" method='post'>
<table cellpadding=5 cellspacing=5 border=5>
<tr>
<td>VEHICLE_ID</td><td><input type="text" name="VEHICLE_ID"> </td>
<tr>
<td>DATE_OF_REGISTRATION</td><td><input type="text" name="DATE_OF_REGISTRATION"></td>
<tr>
<td>DATE_OF_DELIVERY</td><td><input type="text" name="DATE_OF_DELIVERY"></td>
<tr>
<td>BRANCH_CUSTOMER</td><td><input type="text" name="BRANCH_CUSTOMER"></td>
<tr>
<td>CUSTOMER_ID_BRANCH_ID</td><td><input type="text" name="CUSTOMER_ID_BRANCH_ID"></td>
<tr>
<td>STATUS</td><td><input type="text" name="STATUS"></td>
</tr>
<tr>
<td><center><input type="submit" name="Cancel" value="Cancel"></center></td>
<td><center><input type="submit" name="Update" value="Update"></center></td>
</tr>
</table>
</form>