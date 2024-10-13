<?php
include("shared/_header.php");
include("shared/_sidebar.php");
include("shared/_nav.php");
?>
 
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Orders Form</h5>
              <div class="card">
                <div class="card-body">
                  <form action="ordersdata.php" method="post">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Product name</label>
                      <input type="text" name="oname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Order date</label>
                      <input type="date" name="odate" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">order price</label>
                      <input type="number" name="oprice" class="form-control" >
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">order_user_id</label>
                      <input type="number" name="oid" class="form-control" >
                    </div>
                 
                    
                  
                    <a href="orders.php"><button type="submit" class="btn btn-danger">submit</button></a>
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