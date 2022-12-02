<?php
include("conn.php");
include("f.php.php");
?>
<form action="" method="post">
<input type="text" name="fullName" value="">
<select name="courseName">
    <option value="">Select Course</option>
    <?php 
    $query ="SELECT courseName FROM courses";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['courseName'];
    ?>
    <?php
    //selected option
    if(!empty($courseName) && $courseName== $option){
    // selected option
    ?>
    <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
    <?php 
continue;
   }?>
    <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
   <?php

    }}
    ?>
</select>
<br>

<input type="submit" name="submit">
</form>