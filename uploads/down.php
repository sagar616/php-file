<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dynamic Dropdown List Country State City in PHP MySQL using Ajax - Tutsmake.COM</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- Styles -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
html, body {
background-color: #fff;
color: #636b6f;
font-family: 'Nunito', sans-serif;
font-weight: 200;
height: 100vh;
margin: 0;
}
.full-height {
height: 100vh;
}
.flex-center {
align-items: center;
display: flex;
justify-content: center;
}
.position-ref {
position: relative;
}
.top-right {
position: absolute;
right: 10px;
top: 18px;
}
.content {
text-align: center;
}
.title {
font-size: 84px;
}
.links > a {
color: #636b6f;
padding: 0 25px;
font-size: 13px;
font-weight: 600;
letter-spacing: .1rem;
text-decoration: none;
text-transform: uppercase;
}
.m-b-md {
margin-bottom: 30px;
}
</style>
</head>
<body>
<div class="card-body">
<form>
<div class="form-group">
<label for="country">Country</label>
<select class="form-control" id="country-dropdown">
<option value="">Select Country</option>
<?php
require_once "conn.php";
$result = mysqli_query($conn,"SELECT * FROM msp_tfa_country_codes");
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["code"];?>"><?php echo $row["name"];?></option>
<?php
}
?>
</select>
</div>
<div class="form-group">
<label for="state">State</label>
<select class="form-control" id="state-dropdown">
</select>
</div>         
</div> 
<script>
$(document).ready(function() {
$('#country-dropdown').on('change', function() {
var newv = this.value;
console.log(newv);
$.ajax({
url: "drop.php",
type: "POST",
data: {
newv:newv
},
cache: false,
success: function(result){
$("#state-dropdown").html(result); 
}
});
});    
});
</script>
</body>
</html>