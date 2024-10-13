<?php
$pname = $_POST['pname'];
$pdesc = $_POST['pdesc'];
$pprice = $_POST['pprice'];
$pcateid = $_POST['pcateid'];

if(isset($_FILES['pimage'])){
    $filename = time() . '_' . $_FILES['pimage']['name']; // Prepend timestamp to avoid conflicts
    $temp_name = $_FILES['pimage']['tmp_name']; // Get the temporary file path

    // Set a destination path for uploaded images
    $destination = "assets/images/" . $filename; // Correct path with a slash

    // Move the uploaded file to the destination
    if(move_uploaded_file($temp_name, $destination)){
        echo "<h2>File successfully uploaded</h2>";
    } else {
        echo "<h2>Something went wrong, file not uploaded</h2>";
    }
} else {
    echo "<h2>No file uploaded</h2>";
}

include("shared/connection.php");

// Insert product data into the database
$insert = "INSERT INTO products(product_name, product_desc, product_image, product_price, product_cat_id) 
           VALUES('{$pname}', '{$pdesc}', '{$destination}', '{$pprice}', '{$pcateid}')";

$result = mysqli_query($conn,$insert);
header("Location: products.php");
mysqli_close($conn);
?>