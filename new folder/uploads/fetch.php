<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


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

$sql = "select * from city";
if($result == mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
            echo $row['name'];
        }
    }
}

