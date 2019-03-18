
<?php
$con = mysqli_connect("localhost","root","","crud");

if(isset($_POST['submit'])=="submit"){
$name=$_POST['name'];
$age=$_POST['age'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$ins=mysqli_query($con,"INSERT INTO  resgister (name, age, address,phone,email)
VALUES ('".$name."', '".$age."', '".$address."','".$phone."','".$email."')");

if($ins){

header('Location: index.php');

}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <form class="form-inline" action="" method="post">
   
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" onblur="nameval()">
    </div>
    <div id="name_error">   </div>
    <br><br>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="number" class="form-control" id="age" placeholder="Enter Age" name="age">
    </div><br><br>
   
 <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
    </div><br><br>

 <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone" onblur="mobile()">
    </div>
      <div id="phone_error">   </div>
    <br><br>

<div class="form-group">
      <label for="email">E-mail:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" onblur="emailfun()">
    </div>
  <div id="email_error">   </div>
    <br><br>


    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
<script>

  // name valdation
  function nameval(){
  var n=document.getElementById("name").value;

var result = /^[a-zA-Z ]+$/.test(n);
if(result){
document.getElementById('name_error').innerHTML="";
return true;

}else{

document.getElementById("name").focus();
document.getElementById("name").value="";
document.getElementById('name_error').innerHTML="Enter Only Character";
return false;
}


  }


// age validation

function mobile(){
var no=document.getElementById("phone").value;
if(no.length!=10){
document.getElementById("phone").focus();
document.getElementById("phone").value="";
document.getElementById('phone_error').innerHTML="Enter 10 Number";
return false;

}else{
document.getElementById('phone_error').innerHTML="";
return true;

}
}

function emailfun(){
var emaill=document.getElementById("email").value;

 var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

if(reg.test(emaill)){

document.getElementById('email_error').innerHTML="";
return true;


}else{

document.getElementById("email").focus();
document.getElementById("email").value="";
document.getElementById('email_error').innerHTML="Enter valid Email-ID";
return false;

}
}


</script>