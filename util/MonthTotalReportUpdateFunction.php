<?php
echo '<link rel="stylesheet" href="./util/vsms_theme.css">';
echo '<body bgcolor="lightblue">';
if(isset($_SESSION['username'])){
	header("location:../Login_Register/Error.php");
}
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"vsms");
$query="INSERT INTO branch(BRANCH_ID,BUDGET_REMAINING,VEHICLES_SOLD,TURN_OVER,BUDGET_ALLOCATION,MONTH_YEAR) VALUES('$_POST[BRANCH_ID]','$_POST[BUDGET_REMAINING]','$_POST[VEHICLES_SOLD]','$_POST[TURN_OVER]','$_POST[BUDGET_ALLOCATION]','$_POST[MONTH_YEAR]') " ;
if( ! mysqli_query($con,$query) )
{
die('Error' . mysqli_error());
}
else
{
echo 'Inserted';		
}
echo '<br><br>';
echo '<a href="../BranchManagement/MonthTotalUpdate.php"> back </a>';
echo '</body>';
?>