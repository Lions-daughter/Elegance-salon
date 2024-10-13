<?php
$product_id=$_GET['delete'];
include("shared/connection.php");
$read="DELETE FROM products WHERE product_id = {$product_id}";
mysqli_query($conn,$read) or die("query failed");
header("Location:products.php");
mysqli_close($conn);


?>