<?php
echo '<link rel="stylesheet" href="./util/vsms_theme.css">';
echo '<body bgcolor="lightgreen">';
if(isset($_SESSION['username'])){
	header("location:../Login_Register/Error.php");
}
echo '<br> ';
echo '<br> ';
echo '<a href="../CustomerManagement/PaymentStatus.php"> back </a> ';
echo '<br> ';
echo '<br> ';
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"vsms");
$query="select  CUSTOMER_ID,MOBILE_NUMBER,DATE_OF_BOOKING,MODEL,AMOUNT_PAID,PAYMENT_MODE,PAYMENT_ID,VEHICLE_ID,BRANCH_ID,BOOKING_ID,DATE_OF_DELIVERY,NAME,TOTAL_AMOUNT, (TOTAL_AMOUNT-AMOUNT_PAID)
    from customer where CUSTOMER_ID='$_POST[CUSTOMER_ID]' ";
$result = mysqli_query($con,$query);
echo '<table border="2">';
echo '<tr>';
echo '<th>CUSTOMER_ID</th>';
echo '<th>MOBILE_NUMBER</th>';
echo '<th>DATE_OF_BOOKING </th>';
echo '<th>MODEL</th>';
echo '<th>AMOUNT_PAID</th>';
echo '<th>PAYMENT_MODE</th>';
echo '<th>PAYMENT_ID</th>';
echo '<th>VEHICLE_ID</th>';
echo '<th>BRANCH_ID</th>';
echo '<th>BOOKING_ID</th>';
echo '<th>DATE_OF_DELIVERY</th>';
echo '<th>NAME</th>';
echo '<th>TOTAL_AMOUNT</th>';
echo '<th>AMOUNT_TO_BE_PAID</th>';
echo '</tr>';
if( mysqli_num_rows( $result )==0 ){
echo '<tr><td colspan="13">No Rows Returned</td></tr>';
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

