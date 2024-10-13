<?php
include("shared/navbar.php");
//Removing
if (isset($_POST['remove']))
{
foreach($_SESSION["shopping_cart"] as &$value)
{
          if($value['id'] === $_POST["id"]){
            $key=$value['name'];
            unset($_SESSION["shopping_cart"][$key]);
            echo "<script>alert('Item Removed')</script>";
            if(!isset($_SESSION["shopping_cart"]))
                unset($_SESSION["shopping_cart"]);
            break; // Stop the loop after we've found the product
                    }		
                }
        
}    
//Plus
if (isset($_POST['add_quantity']))
{
    foreach($_SESSION["shopping_cart"] as &$value)
    {
      if($value['id'] === $_POST["id"])
      {
          $value['quantity'] +=1;
          break; // Stop the loop after we've found the product
      }
  }
}
//Minus
if (isset($_POST['sub_quantity'])){
 
    foreach($_SESSION["shopping_cart"] as &$value)
    {
        if($value['quantity']>1){
            if($value['id'] === $_POST["id"])
            {
                $value['quantity'] -=1;
                break; // Stop the loop after we've found the product
            }
        }
        if($value['quantity']==1)
        {
          if($value['id'] === $_POST["id"])
          {
            $key=$value['name'];
            unset($_SESSION["shopping_cart"][$key]);
            echo "<script>alert('Item Removed')</script>";
            if(empty($_SESSION["shopping_cart"]))
            {
                unset($_SESSION["shopping_cart"]);
            break;
        } // Stop the loop after we've found the product
        }
         }		
        }
}   ?>      
      <!-- ***** Main Banner Area Start ***** -->
      <!-- <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content text-center">
                        <h2>Add to Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="jumbotron jumbotron-fluid bg-jumbotron products" style="margin-bottom: 90px;height:500px;">
        <div class="container text-center py-5">
            <h5 class="text-white display-3 mb-4">ADD TO CART</h5>
            <div class="d-inline-flex align-items-center text-white">
                <!-- <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                <p class="m-0"></p> -->
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
     <?php 
     if(isset($_SESSION['shopping_cart'])){
        $totalprice = 0;
     ?>
     <table class="table mt-4 fs-5">
        <thead>
            <tr>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Add Quantity</th>
                <th>Product Quantity</th>
                <th>Product Unit Price</th>
                <th>Total Items Amount</th>
                <th>Remove Item</th>
                <th>Place Order</th>
            </tr>
        </thead>
        <tbody>
        <?php		
foreach($_SESSION["shopping_cart"] as $product)
{ 
?>
                <tr>
                    <td><img src='../ADP
                    /<?php echo $product["image"];?>' width="100px" height="100px"/></td>
                    <td class="fs-4" >
                            <?php echo $product["name"];?>
                    </td>
                    <td class="fs-4">
                        <form method="POST">
                            <input type='hidden' name='id' value="<?php echo $product["id"];?>" />
                            <button class="btn btn-dark" type='submit' name="add_quantity">+</button>
                            <button class="btn btn-dark" type='submit' name="sub_quantity">-</button>
                        </form>
                    </td>
                    <td class="fs-4">
                        <?php echo $product["quantity"]; ?>
                    </td>
                    <td class="fs-4">
                        <?php echo "Rs".$product["price"]."/-"; ?>
                    </td>
                    <td class="fs-4">
                        <?php echo "Rs.".$product["price"]*$product["quantity"]."/-"; ?>
                    </td>
                     <!-- Removing -->
        <td>
         <form method="POST">
            <input type='hidden' name='id' value="<?php echo $product["id"]; ?>"/>
            <button class="btn btn-dark fw-bold fs-5" type='submit' name="remove">Remove Item</button>
        </form>
        </td>
        <td>
                        <form action="order.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $product['id']?>">
                            <button class="btn btn-success fw-bold fs-5" type="submit" name="place_order">Place Order</button>
                        </form>
                    </td>
        <!-- Removing -->
                </tr>
                <div class="container m-auto text-center">
                <tr class="mt-5 d-flex m-5">
                    <td class="fs-4">
                       <?php
                       $totalprice = $totalprice + ($product["price"]*$product["quantity"]);
                       } //Loop Ended
                       ?>
                        <h5 class = "mt-3 fs-4">Total Amount:<?php echo "Rs.".$totalprice."/-"; ?></h5><br>
                    </td>
                    
                </tr>
                </div>
        </tbody>
     </table>
     <?php
     }
     else{
        echo "<h3 class=' text-center mt-3'>

    Your Cart is Empty!
    
    </h3>";
     }

     include("shared/footer.php")
     ?>