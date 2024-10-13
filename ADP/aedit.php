<?php
include("shared/_header.php");
include("shared/_sidebar.php");
include("shared/_nav.php");
?>

<div class="container-fluid">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Appointment Form</h5>
        <div class="card">
          <div class="card-body">
            <?php
            $v_id = $_GET['edit'];
            $conn = mysqli_connect("localhost", "root", "", "elegance") or die("Connection Failed");
            $sql1 = "SELECT * FROM appointments WHERE id = '{$v_id}'";
            $result1 = mysqli_query($conn, $sql1);
            if (mysqli_num_rows($result1) > 0) {
              while ($row1 = mysqli_fetch_assoc($result1)) {
            ?>
            <form method="POST" action="appointedit.php">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="hidden" name="sid" class="form-control" value="<?php echo $row1['id']; ?>"/>
                <input type="text" name="aname" class="form-control" value="<?php echo $row1['name']; ?>"/>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" name="aemail" class="form-control" value="<?php echo $row1['email']; ?>"/>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Time</label>
                <input type="time" name="atime" class="form-control" value="<?php echo $row1['time']; ?>"/>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Date</label>
                <input type="date" name="adate" class="form-control" value="<?php echo $row1['date']; ?>"/>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Service</label>
                <input type="text" name="aservice" class="form-control" value="<?php echo $row1['service']; ?>"/>
              </div>
              <button type="submit" class="btn btn-danger">Submit</button>
            </form>
            <?php
              }
            }
            mysqli_close($conn);
            ?>
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
