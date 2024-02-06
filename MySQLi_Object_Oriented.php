<?php
#broken code and repair
$servername = "localhost";
$username = "username";
$password = "password";

#$database="myDB";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  $conn->close();
}
echo "Connected successfully";


// Check connection
/* if (mysqli_connect_error()) {
     die("Database connection failed: " . mysqli_connect_error());
   }
*/

$conn->close();
?>