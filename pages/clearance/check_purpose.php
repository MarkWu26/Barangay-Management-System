<?php
	//mysql query to select field purpose if it's equal to the purpose that we check '  
include "../connection.php";
session_start();
$result = mysqli_query($con,"select * from tblclearance where purpose = '".$_POST['purpose']."' and residentid = '".$_SESSION['userid']."' ");
$cnt = mysqli_num_rows($result);
print($cnt);
?>