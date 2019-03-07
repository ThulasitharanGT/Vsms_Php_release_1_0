<?php
echo '<link rel="stylesheet" href="./util/vsms_theme.css">';
echo '<body bgcolor="lightgreen">';
if(isset($_SESSION['username'])){
	header("location:./Login_Register/Error.php");
}
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"vsms");
$query="INSERT INTO customer(BRANCH_ID,CUSTOMER_ID,DATE_OF_INQUIRY,MOBILE_NUMBER,MAIL_ID,MODEL,NAME) VALUES('$_POST[BRANCH_ID]','$_POST[CUSTOMER_ID]','$_POST[DATE_OF_INQUIRY]','$_POST[MOBILE_NUMBER]','$_POST[MAIL_ID]','$_POST[MODEL]','$_POST[NAME]') " ;
if( ! mysqli_query($con,$query) )
{
die('Error' . mysqli_error());
}
else
{
echo 'Inserted';		
}
echo '<br><br>';
echo '<a href="../CustomerManagement/RegisterCustomer.php"> back </a>';
echo '</body>';
?>