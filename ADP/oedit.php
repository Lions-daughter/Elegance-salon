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
                <?php
    $v_id = $_GET['edit'];
    $conn = mysqli_connect("localhost","root","","elegance") or die("Connection Failed");
    $sql1 = "SELECT * FROM orders WHERE order_no = '{$v_id}'";
    $result1 = mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result1)>0){
        while($row1 = mysqli_fetch_assoc($result1)){

    ?>
                  <form action="orderedit.php" method="post">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Product name</label>
                      <input type="hidden" name="sid" class="form-control" id="exampleInputEmail1"  value="<?php echo $row1['order_no'];?>"/>
                      <input type="text" name="oname" class="form-control" id="exampleInputEmail1"  value="<?php echo $row1['prod_name'];?>"/>
                    
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Order date</label>
    
                      <input type="date" name="odate" class="form-control" id="exampleInputEmail1"  value="<?php echo $row1['order_date'];?>"/>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">order price</label>
                      <input type="number" name="oprice" class="form-control" id="exampleInputEmail1"  value="<?php echo $row1['order_price'];?>"/>
                    </div>
                    
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">order_user_id</label>
                      <input type="number" name="oid" class="form-control" id="exampleInputEmail1"  value="<?php echo $row1['order_user_id'];?>"/>
                    </div>
                 
                    
                  
                    <a href="orders.php"><button type="submit" class="btn btn-danger">submit</button></a>
  
  
  <?php

        }}
        mysqli_close($conn);



?>
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