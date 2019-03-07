<?php
echo '<link rel="stylesheet" href="./util/vsms_theme.css">';
echo '<body bgcolor="lightgreen">';
if(isset($_SESSION['username'])){
	header("location:./Login_Register/Error.php");
}

$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"vsms");
$query_1="update customer set  PAYMENT_MODE='$_POST[PAYMENT_MODE]' where CUSTOMER_ID='$_POST[CUSTOMER_ID]' ";
$query_2="update customer set  VEHICLE_ID='$_POST[VEHICLE_ID]' where CUSTOMER_ID='$_POST[CUSTOMER_ID]' ";
$query_3="update customer set  AMOUNT_PAID='$_POST[AMOUNT_PAID]' where CUSTOMER_ID='$_POST[CUSTOMER_ID]' ";
$query_4="update customer set  PAYMENT_ID='$_POST[PAYMENT_ID]' where CUSTOMER_ID='$_POST[CUSTOMER_ID]' ";
$query_5="update customer set  BOOKING_ID='$_POST[BOOKING_ID]' where CUSTOMER_ID='$_POST[CUSTOMER_ID]' ";
$query_6="update customer set  MODEL='$_POST[MODEL]' where CUSTOMER_ID='$_POST[CUSTOMER_ID]' ";
$query_7="update customer set  TOTAL_AMOUNT='$_POST[TOTAL_AMOUNT]' where CUSTOMER_ID='$_POST[CUSTOMER_ID]' ";
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
else if( ! mysqli_query($con,$query_7) )
{
die('Error' . mysqli_error());
}
else
{
echo 'Booked';		
}
echo '<br><br>';
echo '<a href="../CustomerManagement/BookVehicle.php"> back </a>';
echo '</body>';
?>