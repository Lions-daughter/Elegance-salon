<?php
$id= $_POST['sid'];
$uname = $_POST['cname'];
$conn = mysqli_connect("localhost", "root","","elegance");
$sql = "UPDATE categories SET cate_name = '{$uname}' WHERE cat_id = '{$id}'";
mysqli_query($conn,$sql);
header("Location:categories.php");
mysqli_close($conn);
?>