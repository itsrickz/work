<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hobbyhub";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$title=$_POST['title'];
$category=$_POST['category'];
$subcategory=$_POST['subcategory'];
$location=$_POST['location'];
$description=$_POST['description'];
$cost=$_POST['cost'];
$email=$_SESSION['email'];

// To protect MySQL injection
$title = stripslashes($title);
$category = stripslashes($category);
$subcategory=stripslashes($subcategory);
$location = stripslashes($location);
$description = stripslashes($description);
$cost=stripslashes($cost);
$email=stripslashes($email);
$title = mysqli_real_escape_string($conn,$title);
$category = mysqli_real_escape_string($conn,$category);
$subcategory=mysqli_real_escape_string($conn,$subcategory);
$location = mysqli_real_escape_string($conn,$location);
$description = mysqli_real_escape_string($conn,$description);
$cost=mysqli_real_escape_string($conn,$cost);
$email=mysqli_real_escape_string($conn,$email);



// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO services (title, email, category, subcategory, location, description, cost ,image, completedorders, pendingorders ,servicestatus)
VALUES ('$title', '$email', '$category', '$subcategory' , '$location' , '$description' , '$cost' , 'a' ,'0' ,'0' ,'0')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header("Location:myservices.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>