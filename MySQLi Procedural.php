<?php
$servername = "localhost";
$username = "root";
$password = "0634114004";

// $database="myDB";

// Create connection

$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  mysqli_close($conn);
}
echo "Connected successfully";

mysqli_close($conn);
?>