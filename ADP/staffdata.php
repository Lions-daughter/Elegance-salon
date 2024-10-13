<?php
include("shared/connection.php");
$sname = $_POST['sname'];
$sroleid = $_POST['sroleid'];
$scnum = $_POST['scnum'];
$sshift = $_POST['sshift'];
$insert = "INSERT INTO staff (name,staff_role_id,contact_info,shift) VALUES ('{$sname}','{$sroleid}','{$scnum}','{$sshift}')";
$result = mysqli_query($conn,$insert);
header("Location:staff.php");
mysqli_close($conn);
?>