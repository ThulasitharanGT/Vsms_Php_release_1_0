<?php
echo '<link rel="stylesheet" href="../util/vsms_theme.css">';
echo'<body bgcolor="orange" >';
if(isset($_SESSION['username'])){
	header("location:./Login_Register/Error.php");
}
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"vsms");
$query="INSERT INTO staff(DESIGNATION,NAME,DATE_OF_JOINING,STAFF_ID,DATE_OF_BIRTH,BRANCH_ID,ACTIVE_INACTIVE) VALUES('$_POST[DESIGNATION]','$_POST[NAME]','$_POST[DATE_OF_JOINING]','$_POST[STAFF_ID]','$_POST[DATE_OF_BIRTH]','$_POST[BRANCH_ID]','$_POST[ACTIVE_INACTIVE]') " ;
if( ! mysqli_query($con,$query) )
{
die('Error' . mysqli_error());
}
else
{
echo 'Inserted';		
}
echo '<br><br>';
echo '<a href="../ShowroomManagement/StaffAdding.php"> back </a>';
echo'</body >';
?>