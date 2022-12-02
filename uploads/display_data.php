<?php
include("db.php");
include("conn.php");
?>
<?php 
    $query ="SELECT * FROM directory_country_region ";
    $result = $conn->query($query);
    if($results->num_rows1> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
   
?>

<select name="country_id" >
   <option>Select Country</option>
  <?php 
  foreach ($options as $option) {
  ?>
    <option ><?php echo $option['country_id']; ?> </option>
    
    <?php 
    }
    
  ?>
  die;
  <?php
   $query1 ="SELECT * FROM msp_tfa_country_codes ";
   $result1 = $conn->query($query1);
   if($result1->num_rows1> 0){
     $options1= mysqli_fetch_all($result1, MYSQLI_ASSOC);
   }
   ?>