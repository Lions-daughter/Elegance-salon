<?php
include("shared/connection.php");
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Elegance Saloon</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
   


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.php" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-primary"><span class="text-dark">ELEGANCE</span> Salon</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <!-- <a href="productspage.php" class="nav-item nav-link">Products</a> -->
                    <a href="appointment.php" class="nav-item nav-link">Appointment</a>
                    <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="pro">Products</a>
               
                        <div class="dropdown-menu rounded-0 m-0">
                        <?php 
                    $query = "SELECT * FROM categories";
                    $run = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($run)){
                    ?>
                            <a href="productspage.php?id=<?php echo $row['cat_id'] ?>" class="dropdown-item"><?php echo $row['cate_name'] ?></a>
                            <?php }?>
                        </div>
                    </div>
                    <!-- <a href="contactus.php" class="nav-item nav-link">Contact Us</a> -->
                <a href="feedback.php" class="nav-item nav-link">Feedback</a>
                    
                    <?php
if(!isset($_SESSION['user_name'])){
?>                  <a href="login.php" class="nav-item nav-link">Login</a>
                    <!-- <a href="login.php" class="btn btn-primary d-none d-lg-block">login</a> -->
                    <a href="signin.php" class="nav-item nav-link">Signup</a>
                    <?php }else{?>
                        <a href="#" class="nav-item nav-link"><?php echo $_SESSION['user_name']?></a>
                <a href="logout.php" class="nav-item nav-link">logout</a>
                <?php }?>
                
                <a href="cart.php" class="nav-item nav-link"><i class="fa-solid fa-cart-shopping"></i></a>

                </div>

        </nav>
    </div>
    <!-- Navbar End -->
