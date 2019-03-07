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
<h4>Add Vehicle</h4>
<form action="../util/AddVehicleFunction.php" method='post'>
<table cellpadding=5 cellspacing=5 border=5>
<tr>
<td>BRANCH_ID</td><td><input type="text" name="BRANCH_ID"> </td>
<tr>
<td>MODEL</td><td><input type="text" name="MODEL"></td>
<tr>
<td>VARIANT</td><td><input type="text" name="VARIANT"></td>
<tr>
<td>DATE_OF_INTAKE</td><td><input type="text" name="DATE_OF_INTAKE"></td>
<tr>
<td>VEHICLE_ID</td><td><input type="text" name="VEHICLE_ID"></td>
<tr>
<td>STATUS</td><td><input type="text" name="STATUS"></td>
</tr>
<tr>
<td><center><input type="submit" name="Cancel" value="Cancel"></center></td>
<td><center><input type="submit" name="Insert" value="Insert"></center></td>
</tr>
</table>
</form>