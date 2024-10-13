<?php
include("shared/connection.php");


$service = $_POST['service'];
$appointment_date = $_POST['appointment_date'];
$appointment_time = $_POST['appointment_time'];
$status = $_POST['status'];
$id = $_POST['client_id'];
$insert = "INSERT INTO appointments(service,appointment_date,appointment_time,status) VALUES('{$service}','{$appointment_date}','{$appointment_time}','{$status}')";
$result = mysqli_query($conn,$insert);
header("Location:app.php");
mysqli_close($conn);
?>