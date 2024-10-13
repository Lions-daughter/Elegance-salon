<?php
include("shared/connection.php");
$cname = $_POST['cname'];
$insert = "INSERT INTO categories (cate_name) VALUES('{$cname}')";
$result = mysqli_query($conn,$insert);
header("Location: categories.php");
mysqli_close($conn);
?>