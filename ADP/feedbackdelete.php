<?php
$id=$_GET['delete'];
include("shared/connection.php");
$read="DELETE FROM feedback WHERE id = {$id}";
mysqli_query($conn,$read) or die("query failed");
header("Location:feedback.php");
mysqli_close($conn);



?>