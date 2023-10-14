<!DOCTYPE php>
<php lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard-- TX Service Hand</title>
    <link rel="icon" type="image/x-icon" href="assets/images/servicepic/title-logo.png">
    <!--Bootstrap 5 CDN Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--Custom Css link-->
    <link rel="stylesheet" href="style.css">
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
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
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
                  <li><a class="dropdown-item" href="#">Service Order</a></li>
                  
                  <li><a class="dropdown-item" href="#">Help & Supports</a></li>
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
            <div class="col-lg-5 col-md-6">
              <h2 data-aos="fade-right" data-aos-duration="1500">Good Service choices are good investments.</h2>
              <p data-aos="fade-left" data-aos-duration="1500">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.</p>
              <div class="mt-4">
                <a href="service-booking.php">
                  <butoon class="main-btn" data-aos="zoom-in" data-aos-duration="1500">Booking Now<i class="fas fa-angle-right ps-3"></i></butoon>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!--Top Card Section-->
    <section id="top-card" class="top_Card_features">

      <div class="container1">
        <div class="row">
          <div class="col-6 col-lg-2" data-aos="zoom-in-right" data-aos-duration="1500">
            <a class="card-btn" href="cleaning_service.php">
              <div class="card features-box">
                <div class="text-center">
                  <div class="features-icon-border">
                    <div class="features-icon">
                      <img src="assets/images/Icons/cleaning-svgrepo-com.svg">
                    </div>
                  </div>
                  <div class="features-text">
                    <h4>Cleaning</h4>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-6 col-lg-2" data-aos="zoom-in" data-aos-duration="1500">
            <a class="card-btn" href="car-care.php">
              <div class="card features-box">
                <div class="text-center">
                  <div class="features-icon-border">
                    <div class="features-icon">
                      <img src="assets/images/Icons/car-repair-svgrepo-com.svg">
                    </div>
                  </div>
                  <div class="features-text">
                    <h4>Car Care</h4>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-6 col-lg-2" data-aos="zoom-in" data-aos-duration="1500">
            <a class="card-btn" href="trip-travels.php">
              <div class="card features-box">
                <div class="text-center">
                  <div class="features-icon-border">
                    <div class="features-icon">
                      <img src="assets/images/Icons/travel-svgrepo-com.svg">
                    </div>
                  </div>
                  <div class="features-text">
                    <h4>Trip & Travel</h4>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-6 col-lg-2" data-aos="zoom-in" data-aos-duration="1500">
            <a class="card-btn" href="paint-service.php">
              <div class="card features-box">
                <div class="text-center">
                  <div class="features-icon-border">
                    <div class="features-icon">
                      <img src="assets/images/Icons/painting.svg">
                    </div>
                  </div>
                  <div class="features-text">
                    <h4>Painting</h4>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-6 col-lg-2" data-aos="zoom-in" data-aos-duration="1500">
            <a class="card-btn" href="plumbing-sanitary.php">
              <div class="card features-box">
                <div class="text-center">
                  <div class="features-icon-border">
                    <div class="features-icon">
                      <img src="assets/images/Icons/plumber-svgrepo-com.svg">
                    </div>
                  </div>
                  <div class="features-text">
                    <h4>Plumbing</h4>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-6 col-lg-2" data-aos="zoom-in-left" data-aos-duration="1500">
            <a class="card-btn" href="our_service.php">
              <div class="card features-box">
                <div class="text-center">
                  <div class="features-icon-border">
                    <div class="features-icon">
                      <img src="assets/images/Icons/menu-svgrepo-com.svg">
                    </div>
                  </div>
                  <div class="features-text">
                    <h4>All Services</h4>
                  </div>
                </div>
              </div>
            </a>
          </div>


        </div>
      </div>


    </section>

    <!-- ======= Landing Service Section ======= -->
    <section id="services" class="landing_service_section">

      <div class="container">
        <div class="row">

          <div class="col-12 section-intro text-center">

            <h2>Our Services</h2>
            <div class="divider"></div>
          </div>
        </div>
        <header class="section-header">
          <div class="d-flex justify-content-between">
            <p>For Your Home</p>
            <a href="our_service.php">
              <p class="view-all">View All<i class="fa-solid fa-right-to-bracket px-1"></i></p>
            </a>
          </div>
        </header>

        <div class="row mx-0">
          <div class="col-lg-3 col-sm-6 mb-5" data-aos="fade-up" data-aos-duration="1500">
            <div class="card service-card">
              <div class="service-img">
                <img src="assets/images//servicepic/AC-repair.jpg" class="img-fluid">
              </div>
              <a class="card-btn" href="ac-service.php">
                <div class="card-footer">
                  <h3>AC Servicing</h3>
                  <span>Start From 600Tk</span>
                </div>
              </a>
            </div>
          </div>


          <div class="col-lg-3 col-sm-6 mb-5" data-aos="fade-up" data-aos-duration="1500">
            <div class="card service-card">
              <div class="service-img">
                <img src="assets/images//servicepic/Painting.jpg" class="img-fluid">
              </div>
              <a class="card-btn" href="paint-service.php">
                <div class="card-footer">
                  <h3>Painting Service</h3>
                  <span>Start From 800Tk</span>
                </div>
              </a>
            </div>
          </div>


          <div class="col-lg-3 col-sm-6 mb-5" data-aos="fade-up" data-aos-duration="1500">
            <div class="card service-card">
              <div class="service-img">
                <img src="assets/images//servicepic/home-service.jpg" class="img-fluid">
              </div>
              <a class="card-btn" href="home-deep-cleaning.php">
                <div class="card-footer">
                  <h3>Home Cleaning</h3>
                  <span>Start From 1000Tk</span>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 mb-5" data-aos="fade-up" data-aos-duration="1500">
            <div class="card service-card">
              <div class="service-img">
                <img src="assets/images//servicepic/plumbing.jpg" class="img-fluid">
              </div>
              <a class="card-btn" href="plumbing-sanitary.php">
                <div class="card-footer">
                  <h3>Plumbing & Sanitary</h3>
                  <span>Start From 500Tk</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <header class="section-header">
          <div class="d-flex justify-content-between">
            <p>Tranding Service</p>

          </div>
        </header>
        <div class="row mx-0">
          <div class="col-lg-3 col-sm-6 mb-5" data-aos="fade-up" data-aos-duration="1500">
            <div class="card service-card ">
              <div class="service-img">
                <img src="assets/images//servicepic/house-shifting-services.jpg" class="img-fluid">
              </div>
              <a class="card-btn" href="house-shifting.php">
                <div class="card-footer">
                  <h3>House Shifting</h3>
                  <span>Start From 1500Tk</span>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 mb-5" data-aos="fade-up" data-aos-duration="1500">
            <div class="card service-card">
              <div class="service-img">
                <img src="assets/images//servicepic/refrigerator-services.jpg" class="img-fluid">
              </div>
              <a class="card-btn" href="refrigator-service.php">
                <div class="card-footer">
                  <h3>Refrigerator Services</h3>
                  <span>Start From 1500Tk</span>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 mb-5" data-aos="fade-up" data-aos-duration="1500">
            <div class="card service-card">
              <div class="service-img">
                <img src="assets/images//servicepic/electrical-service.jpg" class="img-fluid">
              </div>
              <a class="card-btn" href="electrical-service.php">
                <div class="card-footer">
                  <h3>Electrical Service</h3>
                  <span>Start From 1500Tk</span>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 mb-5" data-aos="fade-up" data-aos-duration="1500">
            <div class="card service-card">
              <div class="service-img">
                <img src="assets/images//servicepic/home-service.jpg" class="img-fluid">
              </div>
              <a class="card-btn" href="home-deep-cleaning.php">
                <div class="card-footer">
                  <h3>Home Service</h3>
                  <span>Start From 1500Tk</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!--Counter Section-->
    <section id="counter">
      <section class="counter-section">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-4 mb-lg-0 mb-md-0 mb-5">
              <h2>
                <span id="count1"></span>+
              </h2>
              <p>SERVICE PROVIDERS</p>
            </div>

            <div class="col-md-4 mb-lg-0 mb-md-0 mb-5">
              <h2>
                <span id="count2"></span>+
              </h2>
              <p>ORDER SERVIED</p>
            </div>
            <div class="col-md-4 mb-lg-0 mb-md-0 mb-5">
              <h2>
                <span id="count3"></span>+
              </h2>
              <p>5 STAR REVIEW</p>
            </div>

          </div>

        </div>
      </section>
    </section>
    <!--Testimonial Section-->
    <section id="testimonial" class="testimonial_section">
      <div class="container">
        <header class="section-header">
          <div class="col-12 section-intro text-center">
            <h2>Our Happy Customer</h2>
            <div class="divider"></div>
          </div>
        </header>
        <div class="row justify-content-center">
          <div class="col-xl-8 col-md-10">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>

              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="d-sm-flex row">
                    <div class="profile-box col-sm-5">
                      <img src="assets/images/Shakil.jpg" class="img-fluid">
                    </div>
                    <div class="card col-sm-7">
                      <div class="desc-box">
                        <p>Not only was customer support very fast, but the design is very
                          professional. Will definitely be looking for new products in the future from this author.</p>
                      </div>
                      <div class="my-4">
                        <h4>" Md. Shakil "</h4>
                        <p class="m-0">Happy Customers</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="d-sm-flex row">
                    <div class="profile-box col-sm-5">
                      <img src="assets/images/Shaiful.jpg" class="img-fluid">
                    </div>
                    <div class="card col-sm-7">
                      <div class="desc-box">
                        <p>Not only was customer support very fast, but the design is very
                          professional. Will definitely be looking for new products in the future from this authorWill
                          definitely be looking for new products in the future from this author.</p>
                      </div>
                      <div class="my-4">
                        <h4>" Md. Shaiful Islam "</h4>
                        <p class="m-0">Happy Customers</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="d-sm-flex row">
                    <div class="profile-box col-sm-5">
                      <img src="assets/images/Emon.jpg" class="img-fluid">
                    </div>
                    <div class="card col-sm-7">
                      <div class="desc-box">
                        <p>Not only was customer support very fast, but the design is very
                          professional. Will definitely be looking for new products in the future from this author.</p>
                      </div>
                      <div class="my-4">
                        <h4>" Md. Emon Hossain "</h4>
                        <p class="m-0">Happy Customers</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="d-sm-flex row">
                    <div class="profile-box col-sm-5">
                      <img src="assets/images/Picture1.jpg" class="img-fluid">
                    </div>
                    <div class="card col-sm-7">
                      <div class="desc-box">
                        <p>Not only was customer support very fast, but the design is very
                          professional. Will definitely be looking for new products in the future from this author.</p>
                      </div>
                      <div class="my-4">
                        <h4>" Umayer Mohammad Affan "</h4>
                        <p class="m-0">Happy Customers</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="d-sm-flex row">
                    <div class="profile-box col-sm-5">
                      <img src="assets/images/Muniya.jpg" class="img-fluid">
                    </div>
                    <div class="card col-sm-7">
                      <div class="desc-box">
                        <p>Not only was customer support very fast, but the design is very
                          professional. Will definitely be looking for new products in the future from this author.</p>
                      </div>
                      <div class="my-4">
                        <h4>" Afroza Sultana Muniya "</h4>
                        <p class="m-0">Happy Customers</p>
                      </div>
                    </div>
                  </div>
                </div>


                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
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
              <p>Service Hand is an online platform for cleaning and handyman services. We connect our users with verified
                freelance cleaners and handymen. You can make a booking for a one-off cleaning or other job or schedule a
                regular cleaning in three easy steps: Fillup requirement and make a booking, Confirm an appointment, Pay
                once the job is done</p>
            </div>
          </div>
          <div class="d-flex flux-row">
            <div class="star col-1 ">
            </div>
            <div class="col-11">
              <h4>How is Service Hand is different from a cleaning company?</h4>
              <p>Service Hand is not a cleaning company. We are an online marketplace matching customers with freelance
                service providers based on requirements and location. You don’t need to wait weeks, days or even hours to
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
              <p>The cleaners are all verified and trained by Service Hand. They are either freelancers or employees of
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
            <h3 data-aos="fade-right" data-aos-duration="1500">Can’t find your desired service? Let us know 24/7 in 16056.
            </h3>
            <div class="mt-4">
              <a href="our_service.php">
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
    <script src="assets/js/counter.js"></script>

  </body>

</php>