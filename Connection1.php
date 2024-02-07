<?php
# Check connection #broken code 
$servername = "localhost";
$username = "root";
$password = "0634114004";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


// Check connection
/*
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
  }
  */
?>