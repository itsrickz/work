<?php

$host="localhost"; 
$username="root";
$password=""; 
$db_name="hobbyhub"; 


$connect=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($connect,"$db_name")or die("cannot select DB");

?>