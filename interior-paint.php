<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Interior Paint-- TX Service Hand</title>
        <link rel="icon" type="image/x-icon" href="assets/images/servicepic/title-logo.png">
        <!--Bootstrap 5 CDN Link-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <!--Custom Css link-->
        <link rel="stylesheet" href="assets/css/single-service.css">
        <link ref="stylesheet" href="assets/fonts/bootstrap-icons.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar">
        <!--Nav Bar-->
        <header>
            <nav class="navbar navbar-expand-lg navigation-wrap" data-aos="fade-down">
                <div class="container">
                    <a class="navbar-brand" href="dashboard.php"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-stream navbar-toggler-icon"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="our_service.php">Services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#faq">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#support">Contact Us</a>
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
            <header>
                <style>
                    .top-banner {
                        background: url(assets/images/servicepic/interior-paint-banner.jpg);
                        background-size: cover;
                        padding: 6.875rem 0 4.375rem;

                    }

                    .top-banner .row h1 {
                        color: white;
                        margin-bottom: .5rem;
                    }

                    .top-banner .row p {
                        color: white;
                        padding-left: 1rem;

                    }
                </style>
            </header>
            <div class="container-fluid px-0 top-banner">
                <div class="container">
                    <div class="row banner">

                        <div class="col-lg-12 col-md-6">
                            <h1 data-aos="fade-right" data-aos-duration="1500">Interior Paint Service</h1>
                            <p data-aos="fade-left" data-aos-duration="1500"><i class="fa-solid fa-circle-arrow-right px-2"></i>Background Checked Skilled Painter<i class="fa-solid fa-badge-check"></i></p>
                            <p data-aos="fade-left" data-aos-duration="1500"><i class="fa-solid fa-circle-arrow-right px-2"></i>Color Consultation & Transparent Pricing<i class="fa-solid fa-badge-check"></i></p>

                            <div class="mt-4 d-flex justify-content-between">
                                <a href="#">
                                    <form method="GET" action="service-booking.php">
                                        <input type="hidden" name="varservice" value="Interior Paint">
                                        <input type="hidden" name="varserviceamount" value="72000">
                                        <input class="main-btn" data-aos="zoom-in" data-aos-duration="1500" type="submit" value="Booking Now">
                                    </form>
                                </a>
                                <a href="#">
                                    <butoon class="main-btn" data-aos="zoom-in" data-aos-duration="1500"></i>Start From 7200 TK</i></butoon>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--Overview Section-->
        <section id="overview" class="overview">
            <div class="container">
                <div class="row">
                    <header class="section-header">
                        <div class="col-12 section-intro">
                            <h3>Overview Of Interior Paint Service</h3>
                        </div>
                    </header>
                    <div class="col-lg-12 pb-xl-3 px-xl-5">
                        <h4 class="pb-2">Service Feature</h4>
                        <ul>
                            <li>
                                <p>Professional Painter</p>
                            </li>
                            <li>
                                <p>Color Consultation & Transparent Pricing</p>
                            </li>
                            <li>
                                <p>Background Checked Skilled Painter</p>
                            </li>
                            <li>
                                <p>Hassle Free Painting Service</p>
                            </li>
                            <li>
                                <p>Night Shift Service</p>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-12 pb-xl-3 px-xl-5">
                        <h4 class="pb-2">What's Excluded?</h4>
                        <ul>
                            <li>
                                <p>Price of additional materials or parts (if needed)</p>
                            </li>
                            <li>
                                <p>Warranty on consumable materials/parts</p>
                            </li>
                            <li>
                                <p>Transportation cost for carrying new materials/parts (if applicable)</p>
                            </li>
                        </ul>
                    </div>



                    <div class="col-lg-12 pb-xl-3 px-xl-5">
                        <h4 class="pb-2">Payment</h4>
                        <ul>
                            <li>
                                <p>After Delivering The Service Customer Need To Pay The Bill Instantly</p>
                            </li>
                            <li>
                                <p>Two Types Of Payment Are Acceptable- 1. Cash On Delivery, 2.Digital Payment (Nagad, Bkash,Online Bank Payment)</p>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-12 pb-xl-3 px-xl-5">
                        <h4 class="pb-2">How to Booking Service</h4>
                        <ul style="list-style-type:decimal-leading">
                            <strong>
                                <li style="color:brown">
                                    <h5 style="padding-bottom: 0; color:brown">Select service</h5>
                                    <p>From the category, select the service you are looking for.</p>
                                </li>
                            </strong>
                            <strong>
                                <li style="color:brown">
                                    <h5 style="padding-bottom: 0; color:brown">Set Schedule</h5>
                                    <p>Select your convenient time slot.</p>
                                </li>
                            </strong>
                            <strong>
                                <li style="color:brown">
                                    <h5 style="padding-bottom: 0; color:brown">Place Booking</h5>
                                    <p>Confirm your order by clicking Place Booking.</p>
                                </li>
                            </strong>

                        </ul>
                    </div>
                    <div class="col-lg-12 pb-xl-3 px-xl-5">
                        <h4 class="pb-2">Note To Customer:</h4>
                        <ul>
                            <li>
                                <p>If Any Delay Happens By Customer Then There Will Be An Extra Charge Add With The Service
                                    Price</p>
                            </li>
                            <li>
                                <p>After Delivering The Service, The Customer Must Cross Check The Service Before The
                                    Service Person Leaves The Place After That No Complaint Will Be Accepted</p>
                            </li>
                            <li>
                                <p>Make Sure To Keep The Expensive Belongings In A Safe Place</p>
                            </li>
                            <li>
                                <p>Customer Need To Provide Fresh Water And Electricity To Support The Service Person</p>
                            </li>
                            <li>
                                <p>If The Work Area Increases Then Extra Price Will Be Added</p>
                            </li>
                            <li>
                                <p>Make Sure No Other Work Is Going On When The Cleaning Service Is Being Delivered.</p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            </div>
        </section>
        <!--Why Choose Us-->
        <section id="services" class="landing_service_section">
            <div class="container">
                <header class="section-header">
                    <div class="col-12 section-intro text-center">

                        <h2>Why Choose Service Hand</h2>
                        <div class="divider"></div>
                    </div>
                </header>
                <div class="row mx-0">
                    <div class="col-lg-3 col-sm-6 mb-5" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card service-card ">
                            <div class="service-img">
                                <img src="assets/images//servicepic/24-7support.jpg" class="img-fluid">
                            </div>

                            <div class="card-footer">
                                <h3 class="text-center">24/7 Support</h3>
                                <span>We provide the 24/7 customer support.</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 mb-5" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card service-card">
                            <div class="service-img">
                                <img src="assets/images//servicepic/secure.jpg" class="img-fluid">
                            </div>

                            <div class="card-footer">
                                <h3 class="text-center">Secured</h3>
                                <span>Your data is secured in our cloud.</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 mb-5" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card service-card">
                            <div class="service-img">
                                <img src="assets/images//servicepic/warranty.jpg" class="img-fluid">
                            </div>

                            <div class="card-footer">
                                <h3 class="text-center">Service Warranty</h3>
                                <span>You get a 7 days warranty. No question asked.</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 mb-5" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card service-card">
                            <div class="service-img">
                                <img src="assets/images//servicepic/booking.jpg" class="img-fluid">
                            </div>

                            <div class="card-footer">
                                <h3>Easy To Booking</h3>
                                <span>Book any service instantly using website.</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FAQ-->
        <section id="faq" class="faq">
            <div class="container" data-aos="zoom-in" data-aos-duration="1500">
                <header class="section-header">
                    <div class="col-12 section-intro text-center">
                        <h2>Frequently asked question</h2>
                        <div class="divider"></div>
                    </div>
                </header>
                <div class="row">
                    <div class="d-flex flux-row">
                        <div class="star col-1 ">

                        </div>
                        <div class="col-11">
                            <h4>How does Service Hand work?</h4>
                            <p>Service Hand is an online platform for cleaning and handyman services. We connect our users
                                with verified
                                freelance cleaners and handymen. You can make a booking for a one-off cleaning or other job
                                or schedule a
                                regular cleaning in three easy steps: Fillup requirement and make a booking, Confirm an
                                appointment, Pay
                                once the job is done</p>
                        </div>
                    </div>
                    <div class="d-flex flux-row">
                        <div class="star col-1 ">
                        </div>
                        <div class="col-11">
                            <h4>How is Service Hand is different from a cleaning company?</h4>
                            <p>Service Hand is not a cleaning company. We are an online marketplace matching customers with
                                freelance
                                service providers based on requirements and location. You don’t need to wait weeks, days or
                                even hours to
                                get your important jobs done. You book a service online, get your job done on-demand!</p>
                        </div>
                    </div>
                    <div class="d-flex flux-row">
                        <div class="star col-1 ">
                        </div>
                        <div class="col-11">
                            <h4>How can I register?</h4>
                            <p>You can sign up using our Service Hand website .</p>
                        </div>
                    </div>
                    <div class="d-flex flux-row">
                        <div class="star col-1 ">
                        </div>
                        <div class="col-11">
                            <h4>Who are the cleaners?</h4>
                            <p>The cleaners are all verified and trained by Service Hand. They are either freelancers or
                                employees of
                                our service partners.</p>
                        </div>
                    </div>

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
        <section class="footer_wrapper mb-md-0">
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
                <p>Developed by Thought Xplosours Bangladesh</p>
            </div>
        </section>
        <script src="assets/js/bootstrap.bundle.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="assets/js/main.js"></script>

    </body>

</php>