<?php
include("shared/_header.php");
include("shared/_sidebar.php");
include("shared/_nav.php");
?>
 
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">clients Form</h5>
              <div class="card">
                <div class="card-body">
                <div class="card-body">
                  <form action="clientsdata.php" method="post">
                   
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label"> service</label>
                      <input type="text" name="service" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">appointment date</label>
                      <input type="date" name="appointment_date" class="form-control" >
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">appointment time</label>
                      <input type="time" name="appointment_time" class="form-control" >
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">status</label>
                      <input type="text" name="status" class="form-control" >
                    </div>
                 
                 
                    
                  
                    <a href="app.php"><button type="submit" class="btn btn-danger">submit</button></a>
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