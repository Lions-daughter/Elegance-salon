<?php include("shared/navbar.php");
include("shared/connection.php");
?>

<style>
/* Base styles */
.part {
    height: 30vh; /* Using viewport height for responsive height */
    /* or you can use max-height for more control */
}

form {
    margin-left: 5%; /* Use percentage for responsive margins */
    margin-right: 5%; /* Adding right margin for balance */
}

.feed {
    margin-right: 5%; /* Use percentage for responsive margins */
}

input,
select {
    width: 100%; /* Make inputs and selects take full width of their container */
    max-width: 400px; /* Set a maximum width to prevent it from growing too large */
    height: 40px;
    box-sizing: border-box; /* Include padding and border in the element’s total width and height */
}

.bt {
    margin-top: 1em; /* Use relative units for margin */
}

/* Media Queries */
@media (max-width: 768px) {
    form,
    .feed {
        margin-left: 2%; /* Adjust margin for smaller screens */
        margin-right: 2%; /* Adjust margin for smaller screens */
    }

    input,
    select {
        max-width: 100%; /* Allow inputs and selects to be full-width on smaller screens */
    }
}

@media (max-width: 480px) {
    .part {
        height: 20vh; /* Adjust height for very small screens */
    }

    form {
        margin-left: 1%; /* Adjust margin for very small screens */
        margin-right: 1%; /* Adjust margin for very small screens */
    }
}

        
</style>
<?php
    
    include("shared/connection.php");
    if(isset($_POST['signinbtn'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $sugg=$_POST['suggestion'];
  $sclass=$_POST['class'];

   
    
    $query = "INSERT INTO feedback(f_name,f_email,f_sugg,service) VALUES ('{$name}','{$email}','{$sugg}','{$sclass}')";
    $run=mysqli_query($conn,$query);
    if($run){
        echo"<script>alert('feedback send successfully ');
        location.href = index.php
        </script>";
        // header("Location:index.php");
    }
    else{
     echo "<script>alert('something went wrong successfully')</script>";
    }
    
  }
    
    
    


?>

<div class="jumbotron jumbotron-fluid bg-jumbotron part" style="margin-bottom: 90px; background-image:linear-gradient(rgba(33, 30, 28, 0.7), rgba(33, 40, 28, 0.7)), url(img/feedback1.jpg);">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">FEEDBACK</h3>
            <div class="d-inline-flex align-items-center text-white">
                <!-- <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="far fa-circle px-3"></i>
                <p class="m-0"></p> -->
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 600px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/aboutus.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    
              
                    <div class="hours-text bg-log p-4 p-lg-5 my-lg-5">
                    <form action="" method="post">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Feedback</h6><br><br>
                    <?php 
                    if(!isset($_SESSION['user_name'])){
                    ?>
        <input type="text" placeholder="Enter your name" required="true"
        autofocus name="name"><br><br>
        <input type="email" placeholder="Enter Email Address" required="true"
                    autofocus name="email" ><br><br>

                    <?php } else{?>
                        <input type="text" placeholder="Enter your name" required="true"
        autofocus name="name" value="<?php echo $_SESSION['user_name'];?>"><br><br>
        <input type="email" placeholder="Enter Email Address" required="true"
                    autofocus name="email" value="<?php echo $_SESSION['user_email'];?>"><br><br>

                    <?php }?>
                    <input type="text" placeholder="share your suggestion" required="true"
                    autofocus name="suggestion"><br><br>

         
                <div class="control-group">
                           <select name="class">
                            <option value="" selected disabled>select service</option>
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
                            <div>
                            
                                <button class="btn btn-primary py-3 px-4 bt" type="submit" name="signinbtn">SUBMIT</button>
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