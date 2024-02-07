
<?php
#MySQLi Object-Oriented
$servername = "localhost";
$username = "root";
$password = "0634114004";
 
// Connection 
$conn = new mysqli($servername, 
           $username, $password);
 
// For checking if connection is
// successful or not
if ($conn->connect_error) {
  die("Connection failed: "
      . $conn->connect_error);
}
echo "Connected successfully";
?>