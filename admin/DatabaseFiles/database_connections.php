
<?php

session_start();
$databaseHost = 'localhost';
$databaseName = 'wwwrepao_repa';
$databaseUsername = 'wwwrepao_root';
$databasePassword = 'musab03432016';


try {
    // http://php.net/manual/en/pdo.connections.php
   // Create connection
  $con = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
// Check connection
  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  } 
    //for error showing
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
} catch(Exception $e) 
{
  echo $e->getMessage();
}
error_reporting(E_ALL);
ini_set('display_errors', 1);



?>