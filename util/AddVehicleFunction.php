<?php
echo '<link rel="stylesheet" href="../util/vsms_theme.css">';
echo'<body bgcolor="orange" >';
if(isset($_SESSION['username'])){
	header("location:./Login_Register/Error.php");
}
$BRANCH_ID=$_POST['BRANCH_ID'];
$MODEL=$_POST['MODEL'];
$VARIANT=$_POST['VARIANT'];
$STATUS=$_POST['STATUS'];
$VEHICLE_ID=$_POST['VEHICLE_ID'];
$DATE_OF_INTAKE=$_POST['DATE_OF_INTAKE'];
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"vsms");
$query="select VEHICLE_ID from vehicle where VEHICLE_ID='$VEHICLE_ID' " ;
$result=mysqli_query($con,$query);
$add_query="INSERT INTO vehicle (MODEL,BRANCH_ID,VARIANT,DATE_OF_INTAKE,VEHICLE_ID,STATUS) VALUES('$MODEL','$BRANCH_ID','$VARIANT','$DATE_OF_INTAKE','$VEHICLE_ID','$STATUS') " ;
if( mysqli_num_rows( $result )==0 )
{
if( ! mysqli_query($con,$add_query) )
{
die('Error' . mysqli_error());
}
else
{
echo 'Vehicle Added';		
}
}
else
{
			echo 'Vehicle ID already exists';

}
echo '<br><br>';
echo '<a href="../ShowroomManagement/AddVehicle.php"> back </a>';
echo'</body >';
?>