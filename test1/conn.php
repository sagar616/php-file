<?php
$hostName = "localhost";
$userName = "root";
$password = "admin";
$databaseName = "image_db";
 $connect = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>