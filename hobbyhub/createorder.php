<?php 
session_start();
$serviceid=$_GET['serviceid'];
$femail=$_GET['femail'];
$instruction=$_POST['instruction'];
$paid=0;


include("connection.php");
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$cemail=$_SESSION['email'];
$ordercreated=0;
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "INSERT INTO orders (customeremail, freelanceremail, 	serviceid, paid, status, instruction)
  VALUES ('$cemail', '$femail', '$serviceid', '$paid' , '$ordercreated' , '$instruction')";
  
  if (mysqli_query($conn, $sql)) {
    echo "Your order has been successfully created";
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>