<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Elegance Salon</title>
  <link rel="shortcut icon" type="image/png" href="/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  <link rel="shortcut icon" href="assets/css/styles.min.css" />
  <style>
    table{
      border:2px solid black;
      margin:auto;
    }
    table td,th{
      width:200px;
      text-align:center;
      border:1px solid black;


    }
    /* thead th{
      height:30px;
     
    } */
    h5{
      margin-left:750px;
  
    }
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Sidebar Start -->
        <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.php" class="text-nowrap logo-img">
          <h2>Elegance <span >salon</span></h2>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="usersdisplay.php" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">users</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="products.php" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">products</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="categories.php" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">categories</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="staff.php" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">staff</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="usersform.php" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">usersform</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="productsform.php" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">products form</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="categoriesform.php" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">categories form</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="staffform.php" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">staffform</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="appointtable.php" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">appointment</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="appointform.php" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">appointment form</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="feedback.php" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">feedback</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="feedbackform.php" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">feedback form</span>
              </a>
            </li>
        
          </ul>
          <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex">
              
              <div class="unlimited-access-img">
             
              </div>
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->

    
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <h1 align="center">Apoointment</h1>
        <?php
        include("shared/connection.php");
        $data="SELECT * FROM appointments";
        $read=mysqli_query($conn,$data);
        if(mysqli_num_rows($read)>0){

        
        
        
        ?>
       <table class="table table-striped  table-light">
        <thead class="table-danger">
          <th >id</th>
          <th>name</th>
          <th>email</th>
          <th>date</th>
          <th>time</th>
          <th>service</th>
          <th>Edit</th>
          <th>Delete</th>
        </thead>
        <tbody>
        <?php
          while($row = mysqli_fetch_assoc($read)){


          ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['time']; ?></td>
            <td><?php echo $row['service']; ?></td>
            <td> <a href='aedit.php?edit=<?php echo $row["id"];?>' class="btn btn-danger">edit</a></td>
            <td> <a href='appointdelete.php?delete=<?php echo $row["id"];?>' class="btn btn-danger"> Delete</a></td>
       
         
          </tr>
     
       <?php }?>
        </tbody>
       </table>
       <?php
        }
     
      mysqli_close($conn);

?>
         
     
      </div>
      <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label"><h5>ADD appointments</h5></label>
                   <a href="appointform.php"><button type="submit" class="btn btn-danger">ADD</button></a>
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