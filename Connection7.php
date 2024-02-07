
<?php
 #Connection to MySQL using PDO
$servername = "localhost";
$username = "root";
$password = "0634114004";
 
try {
      $conn = new PDO(
        "mysql:host=$servername;dbname=mydb", 
        $username, $password);
   
      // Set the PDO error mode 
      // to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, 
                  PDO::ERRMODE_EXCEPTION);
   
      echo "Connected successfully";
} catch(PDOException $e) {
      echo "Connection failed: "
        . $e->getMessage();
}
?>