<?php
include("shared/connection.php");
$uname = $_POST['fname'];
$uemail = $_POST['femail'];
$fsugg = $_POST['fsugg'];
$fservice = $_POST['fservice'];
$insert = "INSERT INTO feedback (f_name,f_email,f_sugg,service) VALUES('{$uname}','{$uemail}','{$fsugg}'),'{$fservice}')";
$result = mysqli_query($conn,$insert);
header("Location:feedback.php");
mysqli_close($conn);
?>