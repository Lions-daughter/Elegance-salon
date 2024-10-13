
<?php 
include("shared/navbar.php");
include("shared/connection.php");
if(isset($_POST['submit'])){
   $prod_id = $_POST['prod_id'];
   $sql = "SELECT * FROM products WHERE product_id = '{$prod_id}'";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);
   $id = $row['product_id'];
   $name = $row['product_name'];
   $price = $row['product_price'];
   $image = $row['product_image'];

   $cartarray = array(
       $name=>array(
           'name'=>$name,
           'id'=>$id,
           'price'=>$price,
           'quantity'=>1,
           'image'=>$image
       )
       );
   
   if(!isset($_SESSION['shopping_cart'])){
       $_SESSION['shopping_cart'] = $cartarray;
       echo "<script>alert('Product is added to your cart')</script>";
   }
   else{
       $array_keys = array_keys($_SESSION['shopping_cart']);
       if(in_array($name,$array_keys)){
           foreach($_SESSION['shopping_cart'] as &$value){
               if($value['id'] === $_POST['prod_id']){
                   echo "<script>alert('Quanity of this Product in your Cart is ".$value['quantity']."')</script>";
                   break;
               }
           }
       }else{
           $_SESSION['shopping_cart'] = array_merge($_SESSION['shopping_cart'],$cartarray);
           echo "<script>alert('Another Product is added to your cart.')</script>";
       }
   }

 }
    
?>
<style>
   img{
      width: 200px;
   }
   .box h5, a{
      color:  #f56649;
   }
   h1{
      text-align:center;
      margin-bottom:60px;
   }
   .product_section .box:hover .option_container {
  opacity: 1;
  visibility: visible;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}

.product_section .option_container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background-color: rgba(255, 255, 255, 0.6);
  z-index: 3;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all .2s;
  transition: all .2s;
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
}

.product_section .options {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.product_section .options a {
  display: inline-block;
  padding: 8px 15px;
  border-radius: 30px;
  width: 165px;
  text-align: center;
  -webkit-transition: all .3s;
  transition: all .3s;
  margin: 5px 0;
}

.product_section .options .option1 {
  background-color: #f7444e;
  border: 1px solid #f7444e;
  color: #ffffff;
}
.products{
   background-image:url("https://cdn.britannica.com/35/222035-131-9FC95B31/makeup-cosmetics.jpg");
   background-size:cover;
}

.product_section .options .option1:hover {
  background-color: transparent;
  color: #f7444e;
}

.product_section .options .option2 {
  background-color: #000000;
  border: 1px solid #000000;
  color: #ffffff;
}

.product_section .options .option2:hover {
  background-color: transparent;
  color: #000000;
}
   
</style>
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid bg-jumbotron products" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h5 class="text-white display-3 mb-4">OUR PRODUCTS</h5>
            <div class="d-inline-flex align-items-center text-white">
                <!-- <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                <p class="m-0"></p> -->
            </div>
        </div>
    </div>
    <!-- Header End -->
      <!-- <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <!-- <div class="heading_container heading_center">
               <h1>
                  Our <span>products</span>
               </h1>
        </div>  -->
        
            <div class="row">
            <?php 
           $pro_id = $_GET['id'];
           $query = "SELECT * FROM products WHERE product_cat_id = '{$pro_id}'";
           $run = mysqli_query($conn , $query);
           if(mysqli_num_rows($run)>0){
           while($row = mysqli_fetch_assoc($run)){
           ?>
               <div class="col-sm-6 col-md-4 col-lg-4 mt-5">
                  <div class="box">
                  <div class="option_container">
                        <div class="options">
                        <form action="" method="POST">
                           <input type="hidden" name="prod_id" value="<?php echo $row['product_id'] ?>">
                           <?php if (isset($_SESSION['user_name'])) { ?>
                              <button type="submit" name="submit" class="btn btn-dark d-flex m-auto">Add to Cart</button>

                           <?php } else { ?>
                              <button type="button" name="button" class="btn d-flex m-auto">
                                 <a class="btn btn-dark d-flex m-auto" href="login.php">Add to Cart</a></button>

                           <?php } ?>
                        </form>
                        </div>
                     </div>
                     <div class="img-box">
                     <img src="../ADP/<?php echo $row['product_image']; ?>" alt="">
                     </div>
                     <div class="detail-box box">
                        <h5>
                        <?php echo $row['product_name']; ?>
                        </h5>
                        <p>
                        <?php echo $row['product_desc']; ?>

                        </p>
                        <h6>
                        <?php echo "Rs/- ".$row['product_price']; ?>
                        </h6>
                     
                     </div>
                  </div>
               </div>
               <?php }
               }?>

            </div>
         
            <!-- <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div> -->
         </div>
      </section>
      <!-- end product section -->

      <?php include("shared/footer.php");
?>
    
      <!-- footer section -->
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>