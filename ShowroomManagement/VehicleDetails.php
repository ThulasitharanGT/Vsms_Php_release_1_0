<?php
if(isset($_SESSION['username'])){
	header("location:Error.php");
}
?>
<html>
<head>
<title> Vehicle Showroom Management System</title>
<link rel="stylesheet" href="../util/vsms_theme.css">
</head>
<br>
<left> <a href="ShowroomManagement.php"> back </a> </left>
<body bgcolor="orange">
<br><br>
<center> <h1>Vehicle Showroom Management System</h1><br>
<h4>Vehicle Details</h4>
<form action="../util/VehicleDetailsFunction.php" method='post'>
<table cellpadding=5 cellspacing=5 border=5>
<tr>
<td>VEHICLE_ID</td><td><input type="text" name="VEHICLE_ID"></td>
<tr>
<tr>
<td><center><input type="submit" name="Cancel" value="Cancel"></center></td>
<td><center><input type="submit" name="Search" value="Search"></center></td>
</tr>
</table>
</form>