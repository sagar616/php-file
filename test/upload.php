<?php 
    include ("data.php"); 
    if(isset($_POST['submit']))
    {  
        $uploadsDir = "/var/www/html/test/image/";
        $allowedFileType = array('jpg','png','jpeg');
        if (!empty(array_filter($_FILES['fileUpload']['name']))) {

            $arr_name = $_FILES['fileUpload']['name'];
            foreach($_FILES['fileUpload']['name'] as $id=>$val){
                $d = rand(1000, 100000);
                $mb = rand(1000000000, 9999999999);
                // echo $mb;
                $filename_without_ext = substr($arr_name[$id], 0, strrpos($arr_name[$id], "."));
                $ext = substr($arr_name[$id], strrpos($arr_name[$id], '.', -1), strlen($arr_name[$id]));
                $rename = $d.$ext;
                (move_uploaded_file($_FILES['fileUpload']['tmp_name'][$id],'/var/www/html/test/image/'.$rename));


                $fileName        = $_FILES['fileUpload']['name'][$id];
                $tempLocation    = $_FILES['fileUpload']['tmp_name'][$id];
                $targetFilePath  = $uploadsDir . $fileName;
                $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                // $d = date('d-m-y h:i:s');
                $date = $d.'.'.$fileType;
                $filename_without_ext = substr($fileName, 0, strrpos($fileName, "."));
                // $rename = $date;
                if(in_array($fileType, $allowedFileType)){
                    
                   $sqlVal = "('".$fileName."')";
                
                } else {
                    $response = array(
                        "status" => "alert-danger",
                        "message" => "Only .jpg, .jpeg and .png file formats allowed."
                    );
                }
                if(!empty($sqlVal)) { 
                                         
                    $insert = $conn->query("INSERT INTO gallery_images 
                    (file_name, mob_num) VALUES ('$rename','$mb')");
                    // $inser = $conn->query("INSERT INTO gallery_images 
                    // (mob_num) VALUES ('$mb')");
                    if($insert) {
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Files successfully uploaded."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Files coudn't be uploaded due to database error."
                        );
                    }
                }
            }
        } else {
            $response = array(
                "status" => "alert-danger",
                "message" => "Please select a file to upload."
            );
        } 
        // echo $inser;
                    // echo "hello";       
    } 
?>