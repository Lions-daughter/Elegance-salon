<?php
include("shared/connection.php");
$uname = $_POST['uname'];
$uemail = $_POST['uemail'];
$upassword = $_POST['upassword'];
$insert = "INSERT INTO visitors(user_name,user_email,user_password) VALUES('{$uname}','{$uemail}','{$upassword}')";
$result = mysqli_query($conn,$insert);
header("Location:usersdisplay.php");
mysqli_close($conn);
?>