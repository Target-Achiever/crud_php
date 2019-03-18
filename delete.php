<?php
$con = mysqli_connect("localhost","root","","crud");

if($_GET['id']){
$id=$_GET['id'];
$del=mysqli_query($con,"delete from resgister where id=$id");
if($del){
header('Location: index.php');
}
}



?>