<?php
$id=$_GET['delete'];
include("shared/connection.php");
$read="DELETE FROM appointments WHERE id = {$id}";
mysqli_query($conn,$read) or die("query failed");
header("Location:appoionttable.php");
mysqli_close($conn);

?>