<?php
if(isset($_SESSION['username'])){
	header("location:./Login_Register/Error.php");
}
?>
<html>
<head>
<title> Vehicle Showroom Management System</title><link rel="stylesheet" href="../util/vsms_theme.css">
<script type="text/javascript" src="./jquery-3.3.1.js"></script>
</head>
<body bgcolor="Yellow" onload="DisableLogBtn()" >
<br><br>
<center><h1>Vehicle Showroom Management System</h1></center><br>
<center> <table cellpadding=5 cellspacing=5 border=5>
<tr>
<td><a href="../BranchManagement/BranchManagement.php">Branch Management</a></td>
<td><a href="../CustomerManagement/CustomerManagement.php">Customer Management</a></td>
<td><a href="../ShowroomManagement/ShowroomManagement.php">Showroom Management</a></td>
</tr>
</table>
<br><br><br><br><br><br><br><br><br>
<a href="../index.php"> click here to go to the home page </a>
<br><br><br>
</table>
<button name="triggerBtn" id="triggerBtn" onClick = "triggerJob()">Trigger Job</button> <br><br>
<form action="GenerateLog.php" method='post'>
<input type="submit" name="Logbtn" id="Logbtn" value= "Generate Log File"  > 
<br>
<textarea name ="joblog"  id="joblog" style="height:200px;width:1000px"> </textarea> </form> </center>
<script>
triggerJob =  function(){
	alert("Job Triggered");
	$("#triggerBtn").attr("disabled","disabled");
	$("#triggerBtn").html("Job Triggered.Wait till Job Completes");
	$.post("triggerjob.php", function(response){
		alert("Job Completed");
		$("#joblog").text(response);
		$("#triggerBtn").attr("disabled",false);
        $("#Logbtn").attr("disabled",false);
		$("#triggerBtn").html("Trigger Job");
		});
	
}
DisableLogBtn = function()
{
	$("#Logbtn").attr("disabled","disabled");
}
</script>

</body>
</html>