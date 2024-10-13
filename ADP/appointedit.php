

<?php
$conn = mysqli_connect("localhost", "root", "", "elegance");

$id = $_POST['sid'];  // Correct variable name
$uname = $_POST['aname'];
$uemail = $_POST['aemail'];
$utime = $_POST['atime'];  // Correct variable name
$udate = $_POST['adate'];  // Correct variable name
$uservice = $_POST['aservice'];  // Correct variable name

// Update query
$sql = "UPDATE appointments SET name = '{$uname}', email = '{$uemail}', time = '{$utime}', date = '{$udate}', service = '{$uservice}' WHERE id = '{$id}'";

if (mysqli_query($conn, $sql)) {
    // Redirect to appointtable.php after successful update
    header("Location: appointtable.php");
} else {
    // Error handling
    echo "Error updating record: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
