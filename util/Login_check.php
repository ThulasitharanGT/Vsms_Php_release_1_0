<?php
echo '<link rel="stylesheet" href="./util/vsms_theme.css">';
echo '<body bgcolor="Yellow">';
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	die('Could not conect : '.mysqli_error());
}
mysqli_select_db($con,"vsms");
$uname=$_POST['id'];
$pwd=$_POST['pwd'];
$check_sql="select * from login_table where user_id='$uname' and password='$pwd' ";
$result=mysqli_query($con,$check_sql);
$count=mysqli_num_rows($result);
if($count ==1)
{   session_start();
	$_SESSION['username']= '$uname';
	$_SESSION['pwd']= '$pwd';
	header("location:staff_main.php");
}
else 
	echo "incorrect Username or Password" ;
echo '</body>';
?>
