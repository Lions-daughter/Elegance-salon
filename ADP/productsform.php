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
                <form action="productsdata.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Product name</label>
                      <input type="text" name="pname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">product description</label>
                      <input type="text" name="pdesc" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">product image</label>
                      <input type="file" name="pimage" class="form-control" >
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">product price</label>
                      <input type="number" name="pprice" class="form-control" >
                    </div>
                   
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">product cate id</label>
                      <input type="number" name="pcateid" class="form-control" id="exampleInputPassword1">
                    </div>
                  
                    <a href="products.php"><button type="submit" class="btn btn-danger">submit</button></a>
                  </form>
                </div>
              </div>
           
                  
           
 
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>