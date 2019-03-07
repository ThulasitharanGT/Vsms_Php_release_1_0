<?php
if(isset($_SESSION['username'])){
	header("location:..\Login_Register\Error.php");
}
?>
<html>
<head>
<title> Vehicle Showroom Management System</title> <link rel="stylesheet" href="../util/vsms_theme.css">
</head>
<br>
 <a href="BranchManagement.php"> back </a> 
<body bgcolor="lightblue">
<br><br>
<center> <h1>Vehicle Showroom Management System</h1><br>
<h4>Month Total Report Update</h4>
<form action="..\util\MonthTotalReportUpdateFunction.php" method='post'>
<table cellpadding=5 cellspacing=5 border=5>
<tr>
<td>BRANCH_ID</td><td><input type="text" name="BRANCH_ID"> </td>
<tr>
<td>BUDGET_REMAINING</td><td><input type="text" name="BUDGET_REMAINING"></td>
<tr>
<td>VEHICLES_SOLD</td><td><input type="text" name="VEHICLES_SOLD"></td>
<tr>
<td>TURN_OVER</td><td><input type="text" name="TURN_OVER"></td>
<tr>
<td>BUDGET_ALLOCATION</td><td><input type="text" name="BUDGET_ALLOCATION"></td>
<tr>
<td>MONTH_YEAR</td><td><input type="text" name="MONTH_YEAR"></td>
</tr>
<tr>
<td><center><input type="submit" name="Cancel" value="Cancel"></center></td>
<td><center><input type="submit" name="Insert" value="Insert"></center></td>
</tr>
</table>
</form>





