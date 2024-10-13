<?php 
include("shared/connection.php");
session_start();
//place_order
if(isset($_POST['place_order'])){
    $id = $_POST['id'];
    $user_id = $_SESSION['user_id'];
    $sql =  "SELECT * FROM products WHERE product_id = '{$id}'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['product_name'];
    $price = $row['product_price'];
    $date = date("Y-m-d H:i:s");
    $query = "INSERT INTO orders(prod_name, order_price, order_date, order_user_id) VALUES('{$name}', '{$price}', '{$date}', '{$user_id}')";
    $run = mysqli_query($conn, $query);
    
    if($run){
        foreach($_SESSION["shopping_cart"] as &$value)
            {
          if($value['id'] === $_POST["id"]){
            $key=$value['name'];
            unset($_SESSION["shopping_cart"][$key]);
            if(!isset($_SESSION["shopping_cart"]))
                unset($_SESSION["shopping_cart"]);
            break; // Stop the loop after we've found the product
                    }		
                }
        echo "<script>alert('Your order has been placed successfully.');
    window.location.href='index.php'</script>";
}else{
    echo "<script>alert('something went wrong')</script>";

}

}
?>