<?php
$servername = "localhost";
$username = "root";
$password = "";
$Dbname="amazon";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$Dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>