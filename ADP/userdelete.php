<?php
$users_id=$_GET['delete'];
include("shared/connection.php");
$read="DELETE FROM users WHERE user_id = {$users_id}";
mysqli_query($conn,$read) or die("query failed");
header("Location:usersdisplay.php");
mysqli_close($conn);



?>