<?php

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "instrument_store";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
} 

$email = $_POST['email'];  
$password = $_POST['pass'];  
  
    // //to prevent from mysqli injection  
    // $username = stripcslashes($username);  
    // $password = stripcslashes($password);  
    // $username = mysqli_real_escape_string($con, $username);  
    // $password = mysqli_real_escape_string($con, $password);  
  
    $sql = "select * from user_data where email = '$email' and pass = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        header("Location: ../client/sucess.html");  
    }  
    else{  
        header("Location: ../client/fail.html");  
    } 

?>