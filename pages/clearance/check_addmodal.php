<?php
	//mysql query to select field purpose if it's equal to the purpose that we check '  
include "../connection.php";
$result = mysqli_query($con,"select * from tblclearance where purpose = '".$_POST['purpose']."' and residentid = '".$_POST['ddl_resident']."' ");
$cnt = mysqli_num_rows($result);
print($cnt)
?>