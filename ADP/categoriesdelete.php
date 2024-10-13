<?php
$cat_id=$_GET['deletebtn'];
include("shared/connection.php");
$read="DELETE FROM categories WHERE cat_id = {$cat_id}";
mysqli_query($conn,$read) or die("query failed");
header("Location:categories.php");
mysqli_close($conn);



?>
