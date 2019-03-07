<?php
if(isset($_SESSION['username'])){
	header("location:../util/Error.php");
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
<H4> Sales And Services Report </H4></center>
Profit scale : 1 to 0 -> High to Low <center> 
<?php
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"vsms");
$query = "select (BUDGET_REMAINING+TURN_OVER)/BUDGET_ALLOCATION as PLS,VEHICLES_SOLD,MONTH_YEAR,BRANCH_ID from branch ";
$result = mysqli_query($con,$query);
echo '<table border="2">';
echo '<tr>';
echo '<th>Profit Loss Scale</th>';
echo '<th>VEHICLES_SOLD</th>';
echo '<th>MONTH_YEAR </th>';
echo '<th>BRANCH_ID</th>';
echo '</tr>';
if( mysqli_num_rows( $result )==0 ){
echo '<tr><td colspan="4">No Rows Returned</td></tr>';
}
else
{
while ($rows=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo '<tr>';
foreach ($rows as $data)
{
echo "<td align='center'>".$data."</td>";
}
echo '</tr>';
}
}
echo '</table>'
?>
</center>
</body>
</html>