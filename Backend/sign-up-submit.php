<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "instrument_store";

// Create connection
$conn = mysqli_connect($serverName, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}

$FName=$_POST['fName'];
$LName=$_POST['lName'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$pass=$_POST['pass1'];

$sql = "INSERT INTO user_data (FName, LName,address,mobile,email,pass)
VALUES ('$FName', '$LName', '$address','$mobile','$email','$pass')";

if (mysqli_query($conn,$sql) === TRUE) {
  header("Location: ../client/login.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>  