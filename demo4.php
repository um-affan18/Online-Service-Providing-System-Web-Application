<?php

include('dbconnect.php');
$username = $_POST['fullname'];
$contactnumber = $_POST['contactnumber'];
$useremail = $_POST['useremail'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$address = $_POST['address'];
$city = $_POST['city'];
$zip = $_POST['zip'];

//http://localhost/txservicehand/registration.php

if (empty($_POST['fullname']) || strlen(trim($_POST['fullname']))==0){
    header("Location: registration.php?error=User Name is required!.");
    exit();
}
else if (empty($_POST['contactnumber']) || strlen(trim($_POST['contactnumber']))==0){
    header("Location: registration.php?error=Contact Number is required!.");
    exit();
}
else if (empty($_POST['contactnumber']) || strlen(trim($_POST['contactnumber']))<11){
    header("Location: registration.php?error=11 characters Contact Number is required!.");
    exit();
}
else if (empty($_POST['useremail']) || strlen(trim($_POST['useremail']))==0){
    header("Location: registration.php?error=User Email is required!.");
    exit();
}
else if (empty($_POST['password']) || strlen(trim($_POST['password']))==0){
    header("Location: registration.php?error=Password is required!.");
    exit();
}
else if (empty($_POST['address']) || strlen(trim($_POST['address']))==0){
    header("Location: registration.php?error=Address is required!.");
    exit();
}
else if (empty($_POST['city']) || strlen(trim($_POST['city']))==0){
    header("Location: registration.php?error=City is required!.");
    exit();
}
else if(empty($_POST['zip']) || strlen(trim($_POST['zip']))==0){
    header("Location: registration.php?error=Zip Number is required!.");
    exit();
}


if ($password != $confirmpassword) {
    header("Location: registration.php?error=Password does not match!!!..");
    exit();
}
//Checking existing user NID
$sql = "SELECT * FROM users WHERE contactnumber='$contactnumber'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0){
    header("Location: registration.php?error=Contact Number already exists in our database!!");
	        exit();
    
}

$sql2 = "SELECT * FROM users WHERE useremail='$useremail'";
$result3 = mysqli_query($con, $sql2);
if(mysqli_num_rows($result3)>0){
    header("Location: registration.php?error=Email address already exists in our database!!");
	        exit();
    
}


else {
   
    $sql = "INSERT INTO users (fullname,contactnumber, useremail,password,confirmpassword,address,city,zip) VALUES ('$username','$contactnumber','$useremail','$password','$confirmpassword','$address','$city','$zip')";
   
    $result2 = mysqli_query($con, $sql);
    if ($result2) {
        header("Location: login.php?success=Registration Successfull!!");
	        exit();
    } else {
        header("Location: login.php?error=Registration Failed!!");
	        exit();
    }
}
