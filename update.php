<?php
$con = mysqli_connect("localhost","root","","crud");

$id=$_GET['id'];

$s=mysqli_query($con,"select * from resgister where id=$id");
$row = mysqli_fetch_assoc($s);
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
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $row['name']?>">
    </div><br><br>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="text" class="form-control" id="age" placeholder="Enter Age" name="age" value="<?php echo $row['age']?>">
    </div><br><br>
   
 <div class="form-group">
      <label for="address">Address:</label>
     <textarea rows="4" cols="50" name="address" ><?php echo $row['address']?>
</textarea>

    </div><br><br>

 <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone" value="<?php echo $row['phone']?>">
    </div><br><br>

<div class="form-group">
      <label for="email">E-mail:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row['email']?>">
    </div><br><br>


    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
<?php
if(isset($_POST['submit'])=="submit"){
$name=$_POST['name'];
$age=$_POST['age'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$up=mysqli_query($con,"update  resgister set name='".$name."',age='".$age."',address='".$address."',phone='".$phone."',email='".$email."'");

if($up){

header('Location: index.php');

}

}

?>