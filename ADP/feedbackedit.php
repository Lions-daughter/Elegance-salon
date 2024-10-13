<?php
$id= $_POST['sid'];
$uname = $_POST['fname'];
$f_email = $_POST['femail'];
$fsugg = $_POST['fsugg'];
$service=$_POST['fservice'];
$conn = mysqli_connect("localhost", "root","","elegance");
$sql = "UPDATE feedback SET f_name = '{$uname}', f_email = '{$f_email}', f_sugg ='{$fsugg}',service ='{$service}' WHERE id = '{$id}'";
mysqli_query($conn,$sql);
header("Location:feedback.php");
mysqli_close($conn);
?>