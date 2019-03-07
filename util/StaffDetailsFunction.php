<?php
echo '<link rel="stylesheet" href="./util/vsms_theme.css">';
echo '<body bgcolor="orange">';
if(isset($_SESSION['username'])){
	header("location:./Login_Register/Error.php");
}
echo '<br> ';
echo '<br> ';
echo '<a href="../ShowroomManagement/StaffDetails.php"> back </a> ';
echo '<br> ';
echo '<br> ';
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"vsms");
$query="select  DESIGNATION,NAME,DATE_OF_JOINING,STAFF_ID,DATE_OF_BIRTH,ACTIVE_INACTIVE,BRANCH_ID from staff where STAFF_ID='$_POST[STAFF_ID]' ";
$result = mysqli_query($con,$query);
echo '<table border="2">';
echo '<tr>';
echo '<th>DESIGNATION</th>';
echo '<th>NAME</th>';
echo '<th>DATE_OF_JOINING </th>';
echo '<th>STAFF_ID</th>';
echo '<th>DATE_OF_BIRTH</th>';
echo '<th>ACTIVE_INACTIVE</th>';
echo '<th>BRANCH_ID</th>';
echo '</tr>';
if( mysqli_num_rows( $result )==0 ){
echo '<tr><td colspan="7">No Rows Returned</td></tr>';
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
echo '</table>';
echo '</body>';
?>

