<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service Hand</title>
    <!--Bootstrap 5 CDN Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--Custom Css link-->
    <link rel="stylesheet" href="assets/css/our_service.css">
    <link ref="stylesheet" href="assets/fonts/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!--Nav Bar-->
    <header class="menu-wrapper">
        <nav class="navbar navbar-expand-lg navigation-wrap" data-aos="fade-down">
            <div class="container">
                <a class="navbar-brand" href="index.php"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-stream navbar-toggler-icon"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item dropdown dropdown-mega position-static">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                Services
                            </a>
                            <div class="dropdown-menu shadow">
                                <div class="mega-content px-md-4">
                                    <div class="container-fluid">
                                        <div class="row">

                                            <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                <h5>AC Servicing</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">AC Cooling Problem</a>
                                                    <a class="list-group-item" href="#">AC Installation &
                                                        Uninstallation</a>
                                                    <a class="list-group-item" href="#">AC Jet Wash</a>
                                                    <a class="list-group-item" href="#">AC Aster Service</a>
                                                    <a class="list-group-item" href="#">AC Water Drop Solution</a>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                <h5>Cleaning Service</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">Home Deap Cleaning</a>
                                                    <a class="list-group-item" href="#">Floor Deep Clean</a>
                                                    <a class="list-group-item" href="#">Common Space Clean</a>
                                                    <a class="list-group-item" href="#">Furniture Cleaning</a>
                                                    <a class="list-group-item" href="#">Kitchen Cleaning</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                <h5>Plumbing & Sanitary Service</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">Water Meter Service</a>
                                                    <a class="list-group-item" href="#">Water Tap Service</a>
                                                    <a class="list-group-item" href="#">Sink Repair</a>
                                                    <a class="list-group-item" href="#">Plumbing Check Up</a>

                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                                <h5>Car Servicing</h5>
                                                <div class="list-group">
                                                    <a class="list-group-item" href="#">Car Wash & Polish</a>
                                                    <a class="list-group-item" href="#">Car Repair</a>
                                                    <a class="list-group-item" href="#">Car Painting & Decoration</a>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#support">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#faq">FAQ</a>
                        </li>
                        <li><a class="login-btn" href="login.php"><button class="main-btn"><i
                                        class="fa-solid fa-right-to-bracket px-1"></i>Login</button></a></li>
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
                        <h1 class="text-white" data-aos="zoom-in" data-aos-duration="1500">Our Service Category
                        </h1>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- ======= Service Section ======= -->
    <section class="our_services">
        <div class="container">
            <div class="row">
                <div class="col-3 service-list" data-aos="fade-right" data-aos-duration="1500">
                    <h3>All Service List</h3>

                    <div class="sidenav">
                        <ul>
                            <li class="nav-link1 active" aria-current="page"><a href="#cleaning">Cleaning Service</a>
                            </li>
                            <li class="nav-link1"><a href="#shifting">Shifting Service</a></li>
                            <li class="nav-link1"><a href="#refrigerator-repair">Refrigerator Repair</a></li>
                            <li class="nav-link1"><a href="#plumbing-service">Plumbing & Sanitary Services</a></li>
                            <li class="nav-link1"><a href="#painting-service">Painting Service</a></li>
                            <li class="nav-link1"><a href="#car-rental-service">Car Rental</a></li>
                            <li class="nav-link1"><a href="#car-care-service">Car Care Service</a></li>
                            <li class="nav-link1"><a href="#ac-repair">AC Repair</a></li>
                            <li class="nav-link1"><a href="#electronics-gadgets-repair">Electronics & Gadgets Repair</a>
                            </li>
                            <li class="nav-link1"><a href="#trip-travel-service">Trip & Travels</a></li>
                        </ul>
                    </div>

                </div>

                <div class="col-9 service-details">
                    <section id="cleaning">
                        <div class="container">
                            <div class="row">
                                <header class="section-header">
                                    <div class="d-flex justify-content-between">
                                        <div class="title col-8">
                                            <p>Cleaning Service</p>
                                        </div>
                                        <div class="col-4"><a href="login.php">
                                                <p class="view-all text-end">View All<i
                                                        class="fa-solid fa-right-to-bracket px-1"></i>
                                                </p>
                                            </a></div>
                                    </div>
                                </header>
                                <div class="col-lg-4 col-sm-6 mb-5" data-aos="fade-up" data-aos-duration="1500">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/home-service.jpg" class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Home Deep Cleaning</h3>
                                                <span>Start From 1200Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 mb-5" data-aos="fade-up" data-aos-duration="1500">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/Furniture-clean.jpg" class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Furniture Cleaning</h3>
                                                <span>Start From 800Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 mb-5" data-aos="fade-up" data-aos-duration="1500">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/kitchen-clean.jpg" class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Kitchen Cleaning</h3>
                                                <span>Start From 900Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="shifting">
                        <div class="container">
                            <div class="row" data-aos="fade-up" data-aos-duration="1500">
                                <header class="section-header">
                                    <div class="d-flex justify-content-between">
                                        <div class="title col-8">
                                            <p>Shifting Service</p>
                                        </div>
                                        <div class="col-4"><a href="login.php">
                                            <p class="view-all text-end">View All<i
                                                    class="fa-solid fa-right-to-bracket px-1"></i>
                                            </p>
                                        </a></div>
                                    </div>
                                </header>
                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/house-shifting-services.jpg"
                                                class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>House Shifting</h3>
                                                <span>Start From 2000Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/office-shifting.jpg" class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Office Shfiting</h3>
                                                <span>Start From 2500Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section id="refrigerator-repair">
                        <div class="container">
                            <div class="row" data-aos="fade-up" data-aos-duration="1500">
                                <header class="section-header">
                                    <div class="d-flex justify-content-between">
                                        <div class="title col-8">
                                            <p>Refrigerator Repair</p>
                                        </div>
                                        <div class="col-4"><a href="login.php">
                                            <p class="view-all text-end">View All<i
                                                    class="fa-solid fa-right-to-bracket px-1"></i>
                                            </p>
                                        </a></div>
                                    </div>
                                </header>
                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/refrigerator-services.jpg"
                                                class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Refrigerator Service</h3>
                                                <span>Start From 800Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/fridge-gas-refill.jpg"
                                                class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Fridge Gas Refill</h3>
                                                <span>Start From 500Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/refrigerator-cleaning.jpg"
                                                class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Refrigerator Cleaning</h3>
                                                <span>Start From 600Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="plumbing-service">
                        <div class="container">
                            <div class="row" data-aos="fade-up" data-aos-duration="1500">
                                <header class="section-header">
                                    <div class="d-flex justify-content-between">
                                        <div class="title col-8">
                                            <p>Plumbing & Sanitary Services</p>
                                        </div>
                                        <div class="col-4"><a href="login.php">
                                            <p class="view-all text-end">View All<i
                                                    class="fa-solid fa-right-to-bracket px-1"></i>
                                            </p>
                                        </a></div>
                                    </div>
                                </header>
                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/water-meter-servicing.jpg"
                                                class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Water Meter Servicing</h3>
                                                <span>Start From 800Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/Sink-repair.jpg" class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Sink Repair</h3>
                                                <span>Start From 500Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/Water-tap-servicing.jpg"
                                                class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Water Tap Servicing</h3>
                                                <span>Start From 700Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="painting-service">
                        <div class="container">
                            <div class="row" data-aos="fade-up" data-aos-duration="1500">
                                <header class="section-header">
                                    <div class="d-flex justify-content-between">
                                        <div class="title col-8">
                                            <p>Painting Services</p>
                                        </div>
                                        <div class="col-4"><a href="login.php">
                                            <p class="view-all text-end">View All<i
                                                    class="fa-solid fa-right-to-bracket px-1"></i>
                                            </p>
                                        </a></div>
                                    </div>
                                </header>
                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/interior-paint.jpg" class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Interior Paint</h3>
                                                <span>Start From 1200Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/wood-furniture-paint.jpg"
                                                class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Wood & Furniture Paint</h3>
                                                <span>Start From 500Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/Painting.jpg" class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Exterior Paint</h3>
                                                <span>Start From 700Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="car-rental-service">
                        <div class="container">
                            <div class="row" data-aos="fade-up" data-aos-duration="1500">
                                <header class="section-header">
                                    <div class="d-flex justify-content-between">
                                        <div class="title col-8">
                                            <p>Car Rental Services</p>
                                        </div>
                                        <div class="col-4"><a href="login.php">
                                            <p class="view-all text-end">View All<i
                                                    class="fa-solid fa-right-to-bracket px-1"></i>
                                            </p>
                                        </a></div>
                                    </div>
                                </header>
                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/insidecity-carrental.jpg"
                                                class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Inside City</h3>
                                                <span>Start From 300Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/outsidecity-carrental.jpg"
                                                class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Outside City</h3>
                                                <span>Start From 900Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="car-care-service">
                        <div class="container">
                            <div class="row" data-aos="fade-up" data-aos-duration="1500">
                                <header class="section-header">
                                    <div class="d-flex justify-content-between">
                                        <div class="title col-8">
                                            <p>Car Care Services</p>
                                        </div>
                                        <div class="col-4"><a href="login.php">
                                            <p class="view-all text-end">View All<i
                                                    class="fa-solid fa-right-to-bracket px-1"></i>
                                            </p>
                                        </a></div>
                                    </div>
                                </header>
                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/car-service.jpg" class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Car Servicing</h3>
                                                <span>Start From 2000Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/car-wash.jpg" class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Car Wash</h3>
                                                <span>Start From 500Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="ac-repair">
                        <div class="container">
                            <div class="row" data-aos="fade-up" data-aos-duration="1500">
                                <header class="section-header">
                                    <div class="d-flex justify-content-between">
                                        <div class="title col-8">
                                            <p>AC Repair</p>
                                        </div>
                                        <div class="col-4"><a href="login.php">
                                            <p class="view-all text-end">View All<i
                                                    class="fa-solid fa-right-to-bracket px-1"></i>
                                            </p>
                                        </a></div>
                                    </div>
                                </header>
                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/Ac-Repairing.jpg" class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>AC Service</h3>
                                                <span>Start From 1500Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/ac-jet-wash.jpg" class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>AC Jet Wash</h3>
                                                <span>Start From 1200Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/ac-installation-uninstallation.jpg"
                                                class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>AC Installation & Uninstallation</h3>
                                                <span>Start From 2200Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="electronics-gadgets-repair">
                        <div class="container">
                            <div class="row" data-aos="fade-up" data-aos-duration="1500">
                                <header class="section-header">
                                    <div class="d-flex justify-content-between">

                                        <div class="title col-8">
                                            <p>Electronics & Gadgets Repair</p>
                                        </div>
                                        <div class="col-4"><a href="login.php">
                                            <p class="view-all text-end">View All<i
                                                    class="fa-solid fa-right-to-bracket px-1"></i>
                                            </p>
                                        </a></div>
                                    </div>
                                </header>
                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/computer-service.jpg" class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Computer Service</h3>
                                                <span>Start From 500Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/cctv-service.jpg" class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>CCTV Camera Service</h3>
                                                <span>Start From 600Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/tv-service.jpg" class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>TV Repair Services</h3>
                                                <span>Start From 900Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="trip-travel-service">
                        <div class="container">
                            <div class="row" data-aos="fade-up" data-aos-duration="1500">
                                <header class="section-header">
                                    <div class="d-flex justify-content-between">

                                        <div class="title col-8">
                                            <p>Trip & Travels Services</p>
                                        </div>
                                        <div class="col-4"><a href="login.php">
                                            <p class="view-all text-end">View All<i
                                                    class="fa-solid fa-right-to-bracket px-1"></i>
                                            </p>
                                        </a></div>
                                    </div>
                                </header>
                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/tourist-carrental.jpg"
                                                class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Tourist Car Service</h3>
                                                <span>Start From 1300Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/outsidecity-travel.jpg"
                                                class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Outside City travel</h3>
                                                <span>Start From 3500Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb-5">
                                    <div class="card service-card">
                                        <div class="service-img">
                                            <img src="assets/images//servicepic/inside-city-travel.jpg"
                                                class="img-fluid">
                                        </div>
                                        <a class="card-btn" href="login.php">
                                            <div class="card-footer">
                                                <h3>Inside City Travel</h3>
                                                <span>Start From 1200Tk</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

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
                    <h5>CUSTOMER SUPPORT</h5>
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