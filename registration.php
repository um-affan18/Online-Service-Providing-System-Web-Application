<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap 5 CDN Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/registration.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <form action="register-inc.php" method="POST" class="row g-3">
                    <div class="header text-center">
                        <img style="width: 30%" src="assets/images/TX-SERVICE-HAND-LOGO1.png">
                        <h2>Sign UP</h2>
                    </div>
                    <div class="social-container">
                        <a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://google.com/"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fas fa-mobile-alt"></i></a>
                    </div>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error alert alert-danger text-center"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>                   
                    <div class="col-12">
                        <label for="inputName" class="form-label">User Type</label>
                        <select name="roles" class="form-select  mb-3" aria-label="Default select example pe-3">
                        <option selected value="admin">Admin</option>
                        <option value="customer">Customer</option>
                        <option value="worker">Worker</option>
                    </select>
                    </div>
                    <div class="col-12">
                        <label for="inputName" class="form-label">Full Name</label>
                        <input type="text" name="fullname" class="form-control" placeholder="First name" aria-label="Full name">
                    </div>
                    <div class="col-md-6">
                        <label for="inputContactNumber" class="form-label">Contact Number</label>
                        <input pattern=".{11}" title="11 characters" type="number" name="contactnumber" class="form-control" placeholder="Contact Number">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" name="useremail" placeholder="Email Address" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Confirm Password</label>
                        <input type="password" name="confirmpassword" placeholder="Password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Street Address">
                    </div>
                    <div class="col-md-8">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" name="city" placeholder="city" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" name="zip" class="form-control" id="inputZip">
                    </div>

                    <div class="col-12 registration text-center">
                        <div class="form-goup">
                            <a href="login.php">Already have account</a>
                            <button type="register_btn" name="register_btn" class="col-12 mt-2 btn btn-primary">Reistration Now</button>
                        </div>

                    </div>

                </form>
            </div>
        </div>
</body>

</html>