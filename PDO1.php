<?php
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','0634114004');
define('DB_NAME','myDB');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
echo "Connected successfully";
$dbh = null;
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
echo "Connected failed";
$dbh = null;
}
?>