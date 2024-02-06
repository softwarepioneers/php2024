<?php
$servername = "localhost";
$username = "root";
$password = "0634114004";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  $conn = null;
} 
catch(PDOException $e) 
{
  echo "Connection failed: " . $e->getMessage();
  $conn = null;
}
?>