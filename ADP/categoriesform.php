<?php
include("shared/_header.php");
include("shared/_sidebar.php");
include("shared/_nav.php");
?>

      
              <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Category Form</h5>
              <div class="card">
                <div class="card-body">
                  <form method="post" action="categoriesdata.php">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">category name</label>
                      <input type="text" name="cname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                    </div>
               
                
                  
                    <a href="categories.php"><button type="submit" class="btn btn-danger">submit</button></a>
                  </form>
                </div>
              </div>
              <div class="container-fluid">
        <div class="container-fluid">
   
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