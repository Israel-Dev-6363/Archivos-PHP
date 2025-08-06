<?php 
include("conexion.php");

$con=connection();

$id = null;
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$passwrod=$_POST['password'];
$email=$_POST['email'];

$sql = "INSERT INTO tb_persona VALUES ('$id','$name','$lastname','$username','$passwrod','$email')";
$query = mysqli_query($con,$sql);

if($query){
    header("location: index.php");
}
?>