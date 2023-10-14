<?php 
 $con = mysqli_connect("localhost","root","","txservicehand"); 
 if($con){
        echo "Connection successful";
 }
 else{
   die("Unable to connect");
 }
?>