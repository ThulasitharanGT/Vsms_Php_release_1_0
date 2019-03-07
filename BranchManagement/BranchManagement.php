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
 <a href="../util/staff_main.php"> back </a> 
<body bgcolor="lightblue">
<br><br>
<center><h1>Vehicle Showroom Management System</h1></center><br>
<center><table cellpadding=5 cellspacing=5 border=5>
<tr>
<td><a href="ServiceAndSalesReport.php">Service And Sales Report</a></td>
<td><a href="ProfitAndLossReport.php">Profit And Loss Report</a></td>
<td><a href="MonthTotalUpdate.php">Month Total Update</a></td>
</tr>
</table>
<br><br><br><br><br><br><br><br><br>
<a href="../index.php"> click here to go to the home page </a>

</table> </center>
</body>
</html>