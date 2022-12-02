<?php
include("data.php");
include("index.php");

if(isset($_POST['bulk_delete_submit']))
{  
  if(!empty($_POST['checked_id']))
  {
    $idStr=implode(',',$_POST['checked_id']);
    foreach($_POST['checked_id'] as $id=>$val)
    {
    }
    $count = $id+1;

    // echo "SELECT * FROM gallery_images WHERE id IN ($idStr)";die;
    $query = $conn->query("SELECT * FROM gallery_images WHERE id IN ($idStr)");
    
    $rowcount = $query->num_rows;
    while($row = $query->fetch_assoc())
    {
      unlink("/var/www/html/test/image/".$row['file_name']);
    }
    $delete = $conn->query("DELETE FROM gallery_images WHERE id IN ($idStr)");
    if($delete)
    {
      $statusMsg = "selected file have been deleted successfully";
    }
    else
    {
      $statusMsg = "try again";
    }
  }
  else
  {
    $statusMsg = "select atleast one file";
  }
}

header("url:http://localhost/test/action.php");