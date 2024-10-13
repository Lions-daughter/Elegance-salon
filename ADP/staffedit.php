<?php
include("shared/_header.php");
include("shared/_sidebar.php");
include("shared/_nav.php");
?>

              <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">staff Form</h5>
              <div class="card">
                <div class="card-body">
                    <?php

$id=$_GET['edit'];
include("shared/connection.php");
$insert="SELECT * from  staff where staff_id='{$id}'";
$result=mysqli_query($conn,$insert);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){




?>
                  <form action="sedit.php" method="post">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">name</label>
                      <input type="hidden" name="sid" class="form-control" id="exampleInputEmail1"  value="<?php echo $row['staff_id'];?>"/>
                      <input type="text" name="sname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="<?php echo $row['name'];?>"/>
                     
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">contact number</label>
                      <input type="number" name="scnum" class="form-control" id="exampleInputPassword1" value="<?php echo $row['contact_info'];?>"/>>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">staff role id</label>
                      <input type="number" name="sroleid" class="form-control"value="<?php echo $row['staff_role_id'];?>"/ >
                    </div>
                
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">shift</label>
                      <input type="text" name="sshift" class="form-control" id="exampleInputPassword1" value="<?php echo $row['shift'];?>"/>
                    </div>
<?php
    }}
mysqli_close($conn);
?>
                    <a href="staff.php"><button type="submit" class="btn btn-danger">submit</button></a>
                  </form>
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