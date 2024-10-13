
<?php
include("shared/connection.php");
$id=$_POST['sid'];
$sname = $_POST['sname'];
$sroleid = $_POST['sroleid'];
$scnum = $_POST['scnum'];
$sshift = $_POST['sshift'];
$insert = "UPDATE  staff set name='{$sname}' ,staff_role_id='{$sroleid}' ,contact_info='{$scnum}' ,shift='{$sshift}' where staff_id='{$id}'";
$result = mysqli_query($conn,$insert);
header("Location:staff.php");
mysqli_close($conn);
?>
