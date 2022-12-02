<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
$hostName = "localhost";
$userName = "root";
$password = "admin";
$databaseName = "image_db";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
$query = "select * from 'directory_country_region'";

$result = musqli_query($conn, $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select>
        <?php while($row = musqli_fetch_array($result)):;?>
        <option ><?php echo $row[1];?></option>

    </select>
    <!-- <div class="fem">
        <div class="row">
            <label>coutry: </label>
            <select name="country" id="coutry_list"></select>
            <option value="">select country</option>
        </div>
        <div class="row">
            <label>satate: </label>
            <select name="state" id="state_list"></select>
            <option value="">select state</option>
        </div> -->
    </div>
</body>
</html>