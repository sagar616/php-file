<?php 
if(isset($_POST['submit'])){

  $fullName = $_POST['fullName'];
  $courseName = $_POST['courseName'];

     if(!empty($fullName) && !empty($courseName)){
      $query = "INSERT INTO students (fullName, courseName) VALUES('$fullName', '$courseName')";
      $result = $conn->query($query);
     
      if($result){
        echo "Student detail is inserted successfully";
      }  
    }
  }

?>