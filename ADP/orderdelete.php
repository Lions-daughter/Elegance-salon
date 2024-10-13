<?php
$users_id=$_GET['delete'];
include("shared/connection.php");
$read="DELETE FROM orders WHERE order_no = {$users_id}";
$result=mysqli_query($conn,$read) or die("query failed");
header("Location:orders.php");
mysqli_close($conn);



?>