<?php
include("shared/connection.php");
$uname = $_POST['oname'];
$upassword = $_POST['oprice'];
$uemail = $_POST['odate'];
$uid = $_POST['oid'];
$insert = "INSERT INTO orders(prod_name,order_price,order_date,order_user_id) VALUES('{$uname}','{$uemail}','{$upassword}','{$uid}')";
$result = mysqli_query($conn,$insert);
header("Location:orders.php");
mysqli_close($conn);
?>