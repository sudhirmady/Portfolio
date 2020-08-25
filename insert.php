<?php

include 'bootstrap.php';

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

if (!empty($name) || !empty($email) || !empty($mobile) || !empty($message)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "register form";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From portfolio Where email = ? Limit 1";
     $INSERT = "INSERT Into portfolio (name, email, mobile, message) values(?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssis",$name, $email, $mobile, $message);
      $stmt->execute();
      echo "<div class='alert alert-success'>New record inserted sucessfully </div>";

     } else {
      echo "<div class='alert alert-danger'>Someone already register using this email </div>";
     }
 
     $stmt->close();
     $conn->close();


     
    }
} else {
 echo "All field are required";
 die();
}
     $stmt->close();
     $conn->close();
 
?>