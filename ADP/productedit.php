<?php
$id= $_POST['sid'];
$pname = $_POST['pname'];
$pdesc = $_POST['pdesc'];
$pimage = $_POST['pimage'];
$pprice = $_POST['pprice'];
$pcateid = $_POST['pcateid'];
$conn = mysqli_connect("localhost", "root","","elegance");
$sql = "UPDATE products SET product_name = '{$pname}', product_desc = '{$pdesc}', product_image ='{$pimage}',product_price ='{$pprice}',product_cat_id ='{$pcateid}' WHERE product_id = '{$id}'";
mysqli_query($conn,$sql);
header("Location:products.php");
mysqli_close($conn);
?>