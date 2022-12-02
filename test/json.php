<?php
$hostName = "localhost";
$userName = "root";
$password = "admin";
$databaseName = "image_db";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
$people_json = file_get_contents('data.json');
// print_r($people_json);die(hello);
 
$decoded_json = json_decode($people_json, true);
// echo "<pre>";
// print_r($decoded_json);

 foreach($decoded_json as $row)
 {
  
    
 }

 
?>