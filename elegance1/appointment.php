<?php include("shared/navbar.php");
?>

<style>
    .bg-log p{
 color:white;

}
</style>

<?php
    
    if(isset($_POST['makeapp'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
  $date=$_POST['date'];
    $time=$_POST['time'];
    $service=$_POST['service'];
    
    $query = "INSERT INTO appointments(name,email,date,time,service) VALUES ('{$name}','{$email}','{$date}','{$time}','{$service}')";
    $run=mysqli_query($conn,$query);
    if($run){
        echo"<script>alert('appointment book  successfully')
                location.href = index.php
                </script>";
    }
    else{
     echo "<script>alert('something went wrong')</script>";
    }
    
    
    
    
    
  }
    
    
    


?>



<!-- Header Start -->
<div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px; background-image:linear-gradient(rgba(33, 30, 28, 0.7), rgba(33, 40, 28, 0.7)), url(img/open.jpg);">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">APPOINTMENT</h3>
            <div class="d-inline-flex align-items-center text-white">
                <!-- <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="far fa-circle px-3"></i>
                <p class="m-0"></p> -->
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Appointment Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0 justify-content-center text-center">
                <div class="col-lg-6">
                    <!-- <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Appointment</h6> -->
                    <!-- <h1 class="mb-5">Make An Appointment</h1> -->
                </div>
            </div>
            <div class="row justify-content-center bg-appointment mx-0">
                <div class="col-lg-6 py-5">
                    <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
                        <h1 class="text-white text-center mb-4">Make Appointment</h1>
                        <form action="" method="Post">
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-transparent p-4" placeholder="Your Name" required="required" name="name" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control bg-transparent p-4" placeholder="Your Email" required="required"  name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="date" id="date" >
                                            <input type="date" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="" name="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="time" id="time" >
                                            <input type="time" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="" name="time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <div class="control-group">
                           <select name="service"style="height: 47px;width: 430px;background-color:transparent;color:gray;">
                            <option value="" selected disabled ">select service</option>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "elegance") or die("failed");
                            $sql="SELECT * FROM categories";
                            $result=mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($result)){

 ?>
                            <option value="<?php echo $row['cate_name'];?>"><?php echo $row['cate_name'];?></option>
                            
                            
                            <?php
}
mysqli_close($conn);
?>
</select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <button class="btn btn-primary btn-block" type="submit" style="height: 47px;width: 400px;" name="makeapp">Make Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <div class="container text-center py-5">
            <h3 class="text-dark display-3 mb-4">Open Hours</h3>
            <!-- <div class="d-inline-flex align-items-center text-dark"> -->
        </div>
<!-- Open Hours Start -->
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/salon.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="hours-text bg-log p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Open Hours</h6>
                        <h1 class="mb-4">Best Beauty and Relaxing center</h1>
                        <p>We are offering services on best timmings for your convenience.Come and enjoy our services.</p>
                        <ul class="list-inline">
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Mon – Fri : 11:00 AM - 10:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Saturday : 11:30 AM - 10:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Sunday : 12:30 PM - 10:00 PM</li>
                        </ul>
                        <a href="appointment.php" class="btn btn-primary mt-2">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Open Hours End -->
    


    <?php include("shared/footer.php");
?>
    