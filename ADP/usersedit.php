<?php
$id= $_POST['sid'];
$uname = $_POST['uname'];
$uemail = $_POST['uemail'];
$upassword = $_POST['upassword'];
$conn = mysqli_connect("localhost", "root","","elegance");
$sql = "UPDATE visitors SET user_name = '{$uname}', user_email = '{$uemail}', user_password ='{$upassword}' WHERE user_id = '{$id}'";
mysqli_query($conn,$sql);
header("Location:usersdisplay.php");
mysqli_close($conn);
?>