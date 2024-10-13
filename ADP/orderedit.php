<?php
$id= $_POST['sid'];
$uname = $_POST['oname'];
$uprice = $_POST['oprice'];
$udate = $_POST['odate'];
$uid = $_POST['oid'];
$conn = mysqli_connect("localhost", "root","","elegance");
$sql = "UPDATE orders SET prod_name = '{$uname}', order_price = '{$uprice}', order_date ='{$udate}',order_user_id ='{$uid}' WHERE order_no = '{$id}'";
mysqli_query($conn,$sql);
header("Location:orders.php");
mysqli_close($conn);
?>