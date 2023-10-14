<?php

include('dbconnect.php');

$sevicename = $_POST['sevicename'];
$amount = $_POST['amount'];
$pickdate = $_POST['pickdate'];
$comment = $_POST['comment'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$contactnumber = $_POST['contactnumber'];
$address = $_POST['address'];
$city = $_POST['city'];
$zip = $_POST['zip'];


if (empty($_POST['pickdate']) || strlen(trim($_POST['pickdate']))==0){
    header("Location: service-booking.php?error=Date is required!.&error2=$sevicename&erroramount=$amount");
    exit();
}

else if (empty($_POST['fullname']) || strlen(trim($_POST['fullname']))==0){
    header("Location: service-booking.php?error=Name is required!.&error2=$sevicename&erroramount=$amount");
    exit();
}

else if (empty($_POST['contactnumber']) || strlen(trim($_POST['contactnumber']))==0){
    header("Location: service-booking.php?error=Contact Number is required!.&error2=$sevicename&erroramount=$amount");
    exit();
}
else if (empty($_POST['email']) || strlen(trim($_POST['email']))==0){
    header("Location: service-booking.php?error=Email Address is required!.&error2=$sevicename&erroramount=$amount");
    exit();
}

else if (empty($_POST['address']) || strlen(trim($_POST['address']))==0){
    header("Location: service-booking.php?error=Address is required!.&error2=$sevicename&erroramount=$amount");
    exit();
}
else if (empty($_POST['city']) || strlen(trim($_POST['city']))==0){
    header("Location: service-booking.php?error=City is required!.");
    exit();
}
else if(empty($_POST['zip']) || strlen(trim($_POST['zip']))==0){
    header("Location: service-booking.php?error=Zip Number is required!.&error2=$sevicename&erroramount=$amount");
    exit();
}

    $sql = "INSERT INTO orders (sevicename,amount, fullname, email,contactnumber,address,city,zip, comment, pickdate) VALUES ('$sevicename','$amount','$fullname','$email','$contactnumber','$address','$city','$zip','$comment','$pickdate')";
    //$sql = "INSERT INTO orders (sevicename) VALUES ('$sevicename)";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location: service-booking.php?success= Service Booking Successfully!!.&error2=$sevicename&erroramount=$amount");
	        exit();
    } else {
        header("Location: service-booking.php?error=Service Booking Failed!!&error2=$sevicename&erroramount=$amount");
	        exit();
    }
