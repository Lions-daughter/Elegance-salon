<?php include("shared/navbar.php");
?>

<style>
    .bg-log p{
        color:white;
    }
</style>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="img/hair.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Elegance Salon</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Hair Care</h3>
                            <p class="mx-md-5 px-5">Hair treatments not only focus on the hair strands but also address the health of the scalp. Scalp treatments,
                            including exfoliation and detoxifying treatments.</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="appointment.php">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="https://static-cdn.theamericansurgecenter.com/Uploads/Speciality/SpecialityBannerImage6-12e199a9-3910-4204-b044-574274e08476.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Elegance Salon</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Facial Treatment</h3>
                            <p class="mx-md-5 px-5">A facial is a noninvasive skin treatment that includes cleansing, moisturizing, exfoliating and other elements 
                                that are customized to your specific skin type and needs.
                            </p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="appointment.php">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="img/makeup.jpeg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Elegance Salon</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Make Up</h3>
                            <p class="mx-md-5 px-5">Our MakeUp assures your confident and integrety. We use world's best cosmetics on your skin so that you look natural and fresh.
                            </p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="appointment.php">Make Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="img/about.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">About Us</h6>
                    <h1 class="mb-4">Your Best Skin, Hair and Body Care Salon</h1>
                    <p class="pl-4 border-left border-primary">At ELEGANCE SALON, with over 35 years of
                         experience and a footprint of over 200+ franchise in 105 cities accross the country. We are offering best services in town.</p>
                    <div class="row pt-3">
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">99</h3>
                                <h6 class="text-uppercase">Beauty Specialist</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">999</h3>
                                <h6 class="text-uppercase">Happy Clients</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid px-0 py-5 my-5">
        <div class="row mx-0 justify-content-center text-center">
            <div class="col-lg-6">
                <!-- <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Our Service</h6> -->
                <h2>Beauty Services</h2>
            </div>
        </div>
        <div class="owl-carousel service-carousel">
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-4.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Body Massage and Polishing</h4>
                    <p class="text-white px-3 mb-3">Body polishing is a skincare treatment to
                         exfoliating the skin to remove dead. </p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment.php">Make Appointment</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-6.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Facial Treatment</h4>
                    <p class="text-white px-3 mb-3">A facial treatment is a skincare procedure
                         to cleanse and nourish the skin of face.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment.php">Make Appointment</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-1.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Skin Care</h4>
                    <p class="text-white px-3 mb-3">Skincare is the practice of maintaining and 
                        improving the health of skin through products</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment.php">Make Appointment</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/haircare.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Hair Care</h4>
                    <p class="text-white px-3 mb-3">Hair care involves a range of
                         practices to maintain and improve the health and appearance of hair.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment.php">Make Appointment</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/makeup1.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">MakeUp</h4>
                    <p class="text-white px-3 mb-3">It is to give a new and glaming look through using cosmetics.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment.php">Make Appointment</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/wax1.png" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Waxing</h4>
                    <p class="text-white px-3 mb-3">Waxing is a hair removal method through
                        applying a sticky wax to the skin and then remove it.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="appointment.php">Make Appointment</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <div class="row justify-content-center bg-appointment mx-0">
            <div class="col-lg-6 py-5">
                <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
                    <h1 class="text-white text-center mb-4">Make Appointment</h1>
                    <form>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-transparent p-4" placeholder="Your Name" required="required" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control bg-transparent p-4" placeholder="Your Email" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="custom-select bg-transparent px-4" style="height: 47px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 1</option>
                                        <option value="3">Service 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Make Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Service End -->


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


    <!-- Pricing Start -->
    <!-- <div class="container-fluid bg-pricing" style="margin: 90px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/pricing.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <div class="pricing-text bg-light p-4 p-lg-5 my-lg-5">
                        <div class="owl-carousel pricing-carousel">
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>49<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                    </h1>
                                    <h5 class="text-primary text-uppercase m-0">Basic Plan</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                                    <a href="" class="btn btn-primary my-2">Order Now</a>
                                </div>
                            </div>
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>99<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                    </h1>
                                    <h5 class="text-primary text-uppercase m-0">Family Plan</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                                    <a href="" class="btn btn-primary my-2">Order Now</a>
                                </div>
                            </div>
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>149<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                    </h1>
                                    <h5 class="text-primary text-uppercase m-0">VIP Plan</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                                    <a href="" class="btn btn-primary my-2">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Pricing End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Our Specialist</h6>
                    <h1 class="mb-5">MakeUp & Beauty Specialist</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Olivia Mia</h5>
                                <p class="m-0">MakeUp Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://www.whatsapp.com/" target='_blank'><i class="fab fa-whatsapp"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://www.facebook.com/login/" target='_blank'><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://www.linkedin.com/login" target='_blank'><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/accounts/login/?hl=en" target='_blank'><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Cory Brown</h5>
                                <p class="m-0">Hair Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://www.whatsapp.com/" target='_blank'><i class="fab fa-whatsapp"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://www.facebook.com/login/" target='_blank'><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://www.linkedin.com/login" target='_blank'><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/accounts/login/?hl=en" target='_blank'><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Elizabeth Ross</h5>
                                <p class="m-0">Skin Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://www.whatsapp.com/" target='_blank'><i class="fab fa-whatsapp"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://www.facebook.com/login/" target='_blank'><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://www.linkedin.com/login" target='_blank'><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/accounts/login/?hl=en" target='_blank'><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Kelly Walke</h5>
                                <p class="m-0">Wax Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://www.whatsapp.com/" target='_blank'><i class="fab fa-whatsapp"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://www.facebook.com/login/" target='_blank'><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://www.linkedin.com/login" target='_blank'><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/accounts/login/?hl=en" target='_blank'><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="img/pic.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Testimonial</h6>
                    <h1 class="mb-4">What Our Clients Say!</h1>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Mrs. David</h6>
            
                                </div>
                            </div>
                            <p class="m-0">I had a best whitening facial and a relaxing massage.. Your treatment was so relaxing.</p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Satin Duray</h6>
                                
                                </div>
                            </div>
                            <p class="m-0">You people are doing your very best to satisfy your beloved client and keep up the good work that i'm quite satisfied with your services.</p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Sarah Merchant</h6>
                                
                                </div>
                            </div>
                            <p class="m-0">I'm very happy and satisfied with our services and staff. it was a great experience coming at Elegance Salon.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <?php include("shared/footer.php");
?>