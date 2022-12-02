<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>multiple file delete</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script>
    <style>
        .imageedit{
            height: 100px;
     padding: 100 55 100 50px;
        }
    </style>

</head>
<body>
	
<?php if(!empty($statusMsg)){ ?>
<div class="alert alert-success"><?php echo $statusMsg; ?></div>
<?php } ?>

<!-- Users data list -->
<form name="bulk_action_form" method="post" id = "sub" onSubmit="return delete_confirm();"/>
    <table class="bordered">
        <thead>
        <tr>
            <th><input type="checkbox" id="select_all" value=""/></th>        
            <th>id</th>
            <th>file_name</th>
            <th>mobile_number</th>
			<th>image</th>
            
        </tr>
        </thead>
        <?php
        include_once 'data.php';
        
        $query = $conn->query("SELECT * FROM gallery_images ORDER BY id DESC");

        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
        ?>
		
        <tr>
            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id']; ?>"/></td>        
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['file_name']; ?></td>
            <td><?php echo $row['mob_num']; ?></td>
			<?php
			// echo $row["file_name"];
			// echo"<br>";die(hello);
			?>
			<td><img src="/test/image/<?php echo $row["file_name"] ?>" alt="abc" class="imageedit"></td>
        </tr>
        <?php } }else{ ?>
            <tr><td colspan="5">No records found.</td></tr>
        <?php } ?>
    </table>
    <input type="submit" class="btn btn-danger" id="ondelete" name="bulk_delete_submit" value="DELETE"/>
</form>
</body>
</html>
<script>
    $(document).ready(function(){
  $("#ondelete").click(function(){
    
    var c = ($(":checkbox:checked").length);
    alert("You have selected " + c + " files");
  });
});
		function delete_confirm(){
    if($('.checkbox:checked').length > 0){
        var result = confirm("Are you sure to delete selected files");
        if(result){
            return true;
        }else{
            return false;
        }
    }else{
        alert('Select at least 1 record to delete.');
        return false;
    }
    // history.go(0);
    
}
$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
	
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
// $(document).ready(function(){
//   $("#sub").click(function(){
//     alert("hello");
   
//   });
// });
// 
	</script>
    