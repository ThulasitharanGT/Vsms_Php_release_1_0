<?php
echo '<link rel="stylesheet" href="../util/vsms_theme.css">';
echo '<body bgcolor="orange">';
if(isset($_SESSION['username'])){
	header("location:./Login_Register/Error.php");
}
echo '<br> ';
echo '<br> ';
echo '<a href="../ShowroomManagement/VehicleDetails.php"> back </a> ';
echo '<br> ';
echo '<br> ';
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"vsms");
$query="select  MODEL,BRANCH_ID,VARIANT,DATE_OF_INTAKE,VEHICLE_ID,DATE_OF_REGISTRATION,DATE_OF_DELIVERY,BRANCH_CUSTOMER,CUSTOMER_ID_BRANCH_ID,STATUS from vehicle where VEHICLE_ID='$_POST[VEHICLE_ID]' ";
$result = mysqli_query($con,$query);
echo '<table border="10">';
echo '<tr>';
echo '<th>MODEL </th>';
echo '<th>BRANCH_ID </th>';
echo '<th>VARIANT </th>';
echo '<th>DATE_OF_INTAKE </th>';
echo '<th>VEHICLE_ID </th>';
echo '<th>DATE_OF_REGISTRATION </th>';
echo '<th>DATE_OF_DELIVERY </th>';
echo '<th>BRANCH_CUSTOMER </th>';
echo '<th>CUSTOMER_ID_BRANCH_ID </th>';
echo '<th>STATUS </th>';
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

