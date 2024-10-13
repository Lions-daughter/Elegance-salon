<?php
include("shared/_header.php");
include("shared/_sidebar.php");
include("shared/_nav.php");
?>

              <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">feedback Form</h5>
              <div class="card">
                <div class="card-body">
                <?php
    $v_id = $_GET['edit'];
    $conn = mysqli_connect("localhost","root","","elegance") or die("Connection Failed");
    $sql1 = "SELECT * FROM feedback WHERE id = '{$v_id}'";
    $result1 = mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result1)>0){
        while($row1 = mysqli_fetch_assoc($result1)){

    ?>
                  <form method="post" action="feedbackedit.php">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">name</label>
                      <input type="hidden" name="sid" class="form-control" id="exampleInputEmail1"  value="<?php echo $row1['id'];?>"/>
                      <input type="text" name="fname" class="form-control" id="exampleInputEmail1"  value="<?php echo $row1['f_name'];?>"/>

                     
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">email</label>
                      <input type="email" name="femail" class="form-control" id="exampleInputPassword1" value="<?php echo $row1['f_email'];?>"/>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">suggestion</label>
                      <input type="text" name="fsugg" class="form-control" value="<?php echo $row1['f_sugg'];?>"/>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">service</label>
                      <input type="text" name="fservice" class="form-control" id="exampleInputPassword1" value="<?php echo $row1['service'];?>"/>
                    </div>
               
                  
                    <a href="feedback.php"><button type="submit" class="btn btn-danger">submit</button></a>
                  </form>
                  <?php
        }}
        mysqli_close($conn);

?>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>