<?php
include("shared/connection.php");
$uname = $_POST['aname'];
$uemail = $_POST['aemail'];
$utime = $_POST['atime'];
$udate = $_POST['adate'];
$uservice = $_POST['aservice'];
$insert = "INSERT INTO appointments(name,email,time,date,service) VALUES('{$uname}','{$uemail}','{$utime}','{$udate}','{$uservice}')";
$result = mysqli_query($conn,$insert);
header("Location:appointtable.php");
mysqli_close($conn);
?>