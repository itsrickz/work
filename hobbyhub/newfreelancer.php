<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hobbyhub";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=$_POST['pass'];
// To protect MySQL injection
$email = stripslashes($email);
$pass = stripslashes($pass);
$phone=stripslashes($phone);
$email = mysqli_real_escape_string($conn,$email);
$pass = mysqli_real_escape_string($conn,$pass);
$phone = mysqli_real_escape_string($conn,$phone);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (email, phoneno, password ,usertype)
VALUES ('$email', '$phone', '$pass','0')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>