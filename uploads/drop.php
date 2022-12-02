<?php
require_once "conn.php";
$a = $_POST["newv"];
// echo $a;
// echo "SELECT * FROM directory_country_region where country_id =$a";
// die;
$result = mysqli_query($conn,"SELECT * FROM directory_country_region where country_id ='$a'");
// print_r($result);die;
?>
<option value="">Select State</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option><?php echo $row["default_name"];?></option>
<?php
}die;
?>