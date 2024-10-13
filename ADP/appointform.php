<?php
include("shared/_header.php");
include("shared/_sidebar.php");
include("shared/_nav.php");
?>
 
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">appointment  Form</h5>
              <div class="card">
                <div class="card-body">
                  <form method="post" action="appointdata.php">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">name</label>
                      <input type="text" name="aname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">email</label>
                      <input type="email" name="aemail" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">time</label>
                      <input type="time" name="atime" class="form-control" >
                    </div>
                 
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">date</label>
                      <input type="date" name="adate" class="form-control" >
                    </div>
                      
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">service</label>
                      <input type="text" name="aservice" class="form-control" >
                    </div>
                  
                    <a href="appointtable.php"><button type="submit" class="btn btn-danger">submit</button></a>
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