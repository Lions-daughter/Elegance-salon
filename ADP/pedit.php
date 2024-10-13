<?php
include("shared/_header.php");
include("shared/_sidebar.php");
include("shared/_nav.php");
?>

      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Product Form</h5>
              <div class="card">
                <div class="card-body">
                    <?php
                $v_id = $_GET['edit'];
    $conn = mysqli_connect("localhost","root","","elegance") or die("Connection Failed");
    $sql1 = "SELECT * FROM products WHERE product_id = '{$v_id}'";
    $result1 = mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result1)>0){
        while($row1 = mysqli_fetch_assoc($result1)){

    ?>
                  <form method="post" action="productedit.php">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Product name</label>
                      <input type="hidden" name="sid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row1['product_id'];?>"/>
                      <input type="text" name="pname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row1['product_name'];?>"/>

                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">product description</label>
                      <input type="text" name="pdesc" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" value="<?php echo $row1['product_desc'];?>"/>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">product image</label>
                      <input type="file" name="pimage" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" value="<?php echo $row1['product_desc'];?>"/>>>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">product price</label>
                      <input type="number" name="pprice" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" value="<?php echo $row1['product_desc'];?>"/>
                    </div>
                   
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">product cate id</label>
                      <input type="number" name="pcateid" class="form-control" id="exampleInputPassword1" id="exampleInputPassword1" aria-describedby="emailHelp" value="<?php echo $row1['product_desc'];?>"/>
                    </div>
                  
                    <a href="product.php"><button type="submit" class="btn btn-danger">submit</button></a>
                  </form>
                  <?php
        }}
        mysqli_close($conn);?>
        
                </div>
              </div>
           
                  
           
 
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>