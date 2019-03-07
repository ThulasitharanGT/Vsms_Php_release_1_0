<?php
echo '<link rel="stylesheet" href="../util/vsms_theme.css">';
echo '<body bgcolor="orange">';
if(isset($_SESSION['username'])){
	header("location:./Login_Register/Error.php");
}
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"vsms");
$query_1="update vehicle set  DATE_OF_REGISTRATION='$_POST[DATE_OF_REGISTRATION]' where VEHICLE_ID='$_POST[VEHICLE_ID]' ";
$query_2="update vehicle set  DATE_OF_REGISTRATION='$_POST[DATE_OF_REGISTRATION]' where VEHICLE_ID='$_POST[VEHICLE_ID]' ";
$query_3="update vehicle set  DATE_OF_DELIVERY='$_POST[DATE_OF_DELIVERY]' where VEHICLE_ID='$_POST[VEHICLE_ID]' ";
$query_4="update vehicle set  BRANCH_CUSTOMER='$_POST[BRANCH_CUSTOMER]' where VEHICLE_ID='$_POST[VEHICLE_ID]' ";
$query_5="update vehicle set  CUSTOMER_ID_BRANCH_ID='$_POST[CUSTOMER_ID_BRANCH_ID]' where VEHICLE_ID='$_POST[VEHICLE_ID]' ";
$query_6="update vehicle set  STATUS='$_POST[STATUS]' where VEHICLE_ID='$_POST[VEHICLE_ID]' ";
if( ! mysqli_query($con,$query_1) )
{
die('Error' . mysqli_error());
}
else if( ! mysqli_query($con,$query_2) )
{
die('Error' . mysqli_error());
}
else if( ! mysqli_query($con,$query_3) )
{
die('Error' . mysqli_error());
}
else if( ! mysqli_query($con,$query_4) )
{
die('Error' . mysqli_error());
}
else if( ! mysqli_query($con,$query_5) )
{
die('Error' . mysqli_error());
}
else if( ! mysqli_query($con,$query_6) )
{
die('Error' . mysqli_error());
}
else
{
echo 'Vehicle Detalis updated';		
}
echo '<br><br>';
echo '<a href="../ShowroomManagement/UpdateVehicle.php"> back </a>';
echo '</body>';
?>