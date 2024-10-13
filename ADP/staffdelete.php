<?php
$staff_id=$_GET['delete'];
include("shared/connection.php");
$read="DELETE FROM staff WHERE staff_id = {$staff_id}";
mysqli_query($conn,$read) or die("query failed");
header("Location:staff.php");
mysqli_close($conn);



?>