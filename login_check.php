<?php 

session_start();
include('dbconnect.php');

$useremail = $_POST['useremail'];
$password = $_POST['password'];
$roles = $_POST['roles'];


$sql = "Select * from `users` where roles='$roles' and useremail='$useremail' and password='$password'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result)>0){
      
    $data = mysqli_fetch_array($result); 
    $_SESSION['roles']=$data['roles'];
    $_SESSION['useremail']=$data['useremail'];
    $_SESSION['password']=$data['password'];
    
   
    header("Location: dashboard.php");
    exit();  

}else{
    
    header("Location: login.php?error=Invalid user!.");
            exit();
    exit();
}

?>