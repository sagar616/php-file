<?php
//delete.php

include('conn.php');

if(isset($_POST["image_id"]))
{
 $file_path = 'files/' . $_POST["image_name"];
 if(unlink($file_path))
 {
  $query = "DELETE FROM tbl_image WHERE image_id = '".$_POST["image_id"]."'";
  $statement = $connect->prepare($query);
  $statement->execute();
 }
}

?>