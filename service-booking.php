<!DOCTYPE php>
<php lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Booking Information-- TX Service Hand</title>
        <link rel="icon" type="image/x-icon" href="assets/images/servicepic/title-logo.png">
        <!--Bootstrap 5 CDN Link-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <!--Custom Css link-->
        <link rel="stylesheet" href="assets/css/service-booking.css">
        <link ref="stylesheet" href="assets/fonts/bootstrap-icons.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar">
        <!--Nav Bar-->
        <header class="menu-wrapper">
            <nav class="navbar navbar-expand-lg navigation-wrap" data-aos="fade-down">
                <div class="container">
                    <a class="navbar-brand" href="dashboard.php"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-stream navbar-toggler-icon"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">Home</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="#support">Support</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="our_service.php">All Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#faq">FAQ</a>
                            </li>
                            <li class="nav-item dropdown dropdown-menu-end dropdown-menu-lg-start">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img style="width: 28px; height: 28px" src="assets/images/servicepic/userprofiles.png">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                    <li>
                                        <hr style="height: 2px;" class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="serviceorder.php">Service Order</a></li>

                                    <li><a class="dropdown-item" href="support.php">Help & Supports</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#faq"><img style="width: 22px; height: 22px" src="assets/images/servicepic/bell.png"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--section-1 top banner-->
        <section id="home">
            <div class="container-fluid px-0 top-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-12 section-intro">
                            <h1 class="text-white" data-aos="zoom-in" data-aos-duration="1500">Service Booking
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- ======= Service Booking Details Section ======= -->
        <section id="booking" class="booking">

            <div class="row">
                <div class="col-md-12 booking-info">
                    <form action="service-booking-check.php" method="post" class="row service-selected g-3">
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error alert alert-danger text-center"><?php echo $_GET['error']; ?></p>
                        <?php } ?>

                        <?php if (isset($_GET['success'])) { ?>
                            <p class="success alert alert-success text-center"><?php echo $_GET['success']; ?></p>
                        <?php } ?>
                        <header class="section-header">
                            <div class="d-flex justify-content-between">
                                <h3>Service Information</h3>

                                <p class="view-all">
                                    <?php if (isset($_GET['varserviceamount'])) : ?>
                                        <input value="<?php echo $_GET["varserviceamount"]; ?>" type="text" name="amount" class="form-control" id="inputEmail4" readonly>
                                    <?php endif; ?>
                                    <?php if (isset($_GET['erroramount'])) : ?>
                                        <input value="<?php echo $_GET["erroramount"]; ?>" type="text" name="amount" class="form-control" id="inputEmail4" readonly>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </header>

                        <div class="col-12">
                            <label class="form-label"><strong>Service Name</strong> </label>

                            <?php if (isset($_GET['varservice'])) : ?>
                                <input value="<?php echo $_GET["varservice"]; ?>" type="text" name="sevicename" class="form-control" id="inputEmail4" readonly>
                            <?php endif; ?>

                            <?php if (isset($_GET['error2'])) : ?>
                                <input value="<?php echo $_GET["error2"]; ?>" type="text" name="sevicename" class="form-control" id="inputEmail4" readonly>
                            <?php endif; ?>
                        </div>
                        <div class="col-12">
                            <label for="inputEmail" class="form-label"><strong>Pick The Date & Time</strong></label>
                            <input type="datetime-local" name="pickdate" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail" class="form-label"><strong>Tell About Us the Service</strong></label>
                            <textarea name="comment" class="form-control shadow-none" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <h3 class="mt-5">Personal Information</h3>
                        <div class="col-12">
                            <label for="inputName" class="form-label pt-3"><strong>Full Name</strong></label>
                            <input type="text" name="fullname" placeholder="Full Name" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail" class="form-label"><strong>User Email</strong></label>
                            <input type="email" name="email" class="form-control shadow-none" placeholder="Email Address">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><strong>Contact Number</strong></label>
                            <input type="number" name="contactnumber" class="form-control shadow-none" minlength="11" maxlength="11" placeholder="Contact Number">
                        </div>

                        <div class="col-12">
                            <label for="inputAddress2" class="form-label"><strong>Address</strong></label>
                            <input type="text" name="address" class="form-control" id="inputAddress2" placeholder="Street Address">
                        </div>
                        <div class="col-md-8">
                            <label for="inputCity" class="form-label"><strong>City</strong></label>
                            <input type="text0" placeholder="City" name="city" class="form-control" id="inputCity">
                        </div>

                        <div class="col-md-4">
                            <label for="inputZip" class="form-label"><strong>Zip</strong></label>
                            <input type="number" placeholder="Zip" name="zip" class="form-control" id="inputZip">
                        </div>
                        <div class="col-12 submit-btn text-center">

                            <button type="register_btn" name="register_btn" class="col-12 mt-2 btn btn-primary">Place Order Request</button>
                        </div>

                    </form>



                </div>


            </div>


        </section>
        <!--Support Section-->
        <section id="support">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <h3 data-aos="fade-right" data-aos-duration="1500">Can’t find your desired service? Let us know 24/7
                            in 16056.
                        </h3>
                        <div class="mt-4">
                            <a href="#">
                                <butoon class="main-btn" data-aos="zoom-in" data-aos-duration="1500">Request Service<i class="fas fa-angle-right ps-3"></i></butoon>
                            </a>
                            <a href="#">
                                <butoon class="main-btn" data-aos="zoom-in" data-aos-duration="1500"><i class="fa-solid fa-phone px-2"></i>16056</i></butoon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Footer Section-->
        <section class="footer_wrapper mt-3 mb-md-0">
            <div class="container px5 px-lg-0">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                        <h5>Service Hand</h5>
                        <p class="mb-4 ps-0 company_details">
                            Tackle your to-do list wherever you are with our mobile app &amp; make your life easy.
                        </p>
                        <div class="contact-info">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-home me-3"></i>24, Gabtoli, Dhaka-1216, Bangladesh</a></li>
                                <li><a href="#"><i class="fa fa-phone me-3"></i>+880 1712 632866</a></li>
                                <li><a href="#"><i class="fa fa-envelope me-3"></i>shakil.eub.cse@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                        <h5>Customer Support</h5>
                        <ul class="link-widget p-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Term & Conditions</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                        <h5>QuickLinks</h5>
                        <ul class="link-widget p-0">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Linkedin</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                        <h5>Newsletter</h5>
                        <div class="form-group mb-4">
                            <input type="email" class="form-control bg-transparent" placeholder="Enter Your Email Here">
                            <button type="submit" class="btn main-btn">Subscribe</button>
                        </div>
                        <h5>Stay Connected</h5>
                        <ul class="social-network d-flex align-item-center p-0">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-fluid copyright-section">
                <p>Copyright <a href="#"> @ SERVICE HAND.</a>All Rights Reserved</p>
            </div>
        </section>
        <script src="assets/js/bootstrap.bundle.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="assets/js/main.js"></script>

    </body>

</php>