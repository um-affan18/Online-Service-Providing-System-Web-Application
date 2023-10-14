<?php
require_once "config.php";


$useremail = $password = $confirm_password = "";
$useremail_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    //Check if useremail is empty
    if (empty(trim($_POST["useremail"]))) {
        $useremail_err = "Username Cannot be blank";
    } else {
        $sql = "SELECT id FROM users WHERE useremail = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_useremail);


            $param_useremail = trim($_POST['useremail']);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $useremail_err = "This user name is alreadytaken.";
                } else {
                    $useremail = trim($_POST['useremail']);
                }
            } else {
                echo "Something went wrong";
            }
        }
    }
    mysqli_stmt_close($stmt);


//check password
if (empty(trim($_POST['password']))) {
    $password_err = "Password Cannot be blank";
} elseif (strlen(trim($_POST['password'])) < 5) {
    $password_err = "Password cannot be less than 5 charactrs";
} else {
    $password = trim($_POST['password']);
}

// check confirm password
if (trim($_POST['password']) != trim($_POST['confirm_password'])) {
    $password_err = "Passwords dosen't match";
}

// If there were no errors, go ahead and insert into the database
if (empty($useremail_err) && empty($password_err) && empty($confirm_password_err)) {
    $sql = "INSERT INTO users (useremail, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $param_useremail, $param_password);

        //set these parameters
        $param_useremail = $useremail;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        //Try to execue the query
        if (mysqli_stmt_execute($stmt)) {
            header("loaction: login.php");
        } else {
            echo "Something went wrong... Cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}
?>
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
                <form action="" method="post" class="row g-3">

                    <div class="header text-center">
                        <img style="width: 30%" src="assets/images/TX-SERVICE-HAND-LOGO1.png">
                        <h2>Sign UP</h2>
                    </div>
                    <div class="social-container">
                        <a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://google.com/"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fas fa-mobile-alt"></i></a>
                    </div>
                    <a class="btn btn-primary" href="login.php" role="button">Already have Account?</a>
                    <div class="col-12">
                        <label for="inputName" class="form-label">Full Name</label>
                        <input type="text" name="fullname" class="form-control" placeholder="First name" aria-label="Full name">
                    </div>
                    <div class="col-md-6">
                        <label for="inputContactNumber" class="form-label">Contact Number</label>
                        <input type="number" name="contactnumber" class="form-control" placeholder="Contact Number">
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
                        <input type="password" name="confirm_password" placeholder="Password" class="form-control" id="inputPassword4">
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
                        
                        <a class="col-12 btn btn-primary" href="login.php" role="button">Sign UP</a>
                    </div>

                </form>
            </div>
        </div>
</body>

</html>