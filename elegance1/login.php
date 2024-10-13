<?php 
include("shared/connection.php");
session_start();
if(isset($_POST['loginbtn'])){
    $useremail=$_POST['email'];
    $userpassword=$_POST['password'];
    $query="SELECT * FROM visitors WHERE user_email = '{$useremail}'   AND user_password ='{$userpassword}'" ;
    $run=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($run);
if(mysqli_num_rows($run)>0){
    if($data['user_role_id']==1){

        $_SESSION['user_id']= $data['user_id'];
        $_SESSION['user_name']=$data['user_name'];
        $_SESSION['user_email']=$data['user_email'];
        $_SESSION['user_password']=$data['user_password'];
        $_SESSION['user_role_id']=$data['user_role_id'];
        header("Location:../ADP/index.php");
    }else if($data['user_role_id']==2){

        $_SESSION['user_id']=$data['user_id'];
        $_SESSION['user_name']=$data['user_name'];
        $_SESSION['user_email']=$data['user_email'];
        $_SESSION['user_password']=$data['user_password'];
        $_SESSION['user_role_id']=$data['user_role_id'];
        header("Location:../ADP/receptionist.php");
    }
else if($data['user_role_id']==3){

    $_SESSION['user_id']=$data['user_id'];
    $_SESSION['user_name']=$data['user_name'];
    $_SESSION['user_email']=$data['user_email'];
    $_SESSION['user_password']=$data['user_password'];
    $_SESSION['user_role_id']=$data['user_role_id'];
    header("Location:../ADP/stylist.php");
}
else{
    $_SESSION['user_id']=$data['user_id'];
    $_SESSION['user_name']=$data['user_name'];
    $_SESSION['user_email']=$data['user_email'];
    $_SESSION['user_password']=$data['user_password'];
    $_SESSION['user_role_id']=$data['user_role_id'];
    header("Location:index.php");
}
}
else{
    echo"<script>alert('login failed')</script>";
}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Elegance Salon</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>




    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d4935928.294598552!2d-2.3278149!3d52.8382004!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1723232088097!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="contact-form bg-log p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">LOG IN</h6>
                        <h1 class="mb-4">LOG IN</h1>
                        <div id="success"></div> 
                        <form action="" id="contactForm" novalidate="novalidate" method="POST">
                            <div class="form-row">

                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control border-0 p-4" name="email" placeholder="Your Email"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control border-0 p-4" name="password" placeholder="password"
                                    required="required" data-validation-required-message="Please enter a password" />
                                <p class="help-block text-danger"></p>
                            </div>


                            <div>
                            
                                <button class="btn btn-primary py-3 px-4" type="submit" name="loginbtn">log in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <?php include("shared/footer.php");
?>