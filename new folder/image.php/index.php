<?php
echo hello;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multi image uplod
    </title>
</head>
<body>
    <form method= "post"
        action= "upload.php"
        enctype= "multipart/form-data">

        <input type="file" name="images[]" multiple>
        <button type="submit" name="upload">Upload</button>

    </form>
    
</body>
</html>