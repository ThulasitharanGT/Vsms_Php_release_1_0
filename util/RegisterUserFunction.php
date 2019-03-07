<?php
echo '<link rel="stylesheet" href="./util/vsms_theme.css">';
echo'<body bgcolor="Yellow" >';
if(isset($_SESSION['username'])){
	header("location:./Login_Register/Error.php");
}
$staffid=$_POST['staffid'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$userid=$_POST['userid'];
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"vsms");
$query="select USER_ID from login_table where USER_ID='$userid' " ;
$result=mysqli_query($con,$query);
if( mysqli_num_rows( $result )==0 )
{
	if($password != $password2)
	{
		echo 'Password entered is not mataching';
	}
	else
	{
	$add_query="INSERT INTO login_table (user_id, password,staff_id) VALUES('$userid','$password','$staffid') " ;

	if( ! mysqli_query($con,$add_query) )
{
die('Error' . mysqli_error());
}
else
{
echo 'Registered';		
}
	}
}
else
{
			echo 'User id already exists';

}
echo '<br><br>';
echo '<a href="./Login_Register/RegisterUser.php"> back </a>';
echo'</body >';
?>