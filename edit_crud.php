<?php 
include("conexion.php");

$con=connection();

$id = $_POST['ID'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "UPDATE tb_persona SET Nombre = '$name', Apellido = '$lastname', Usuario = '$username', Contraseña = '$password', Email = '$email' WHERE id = '$id'";
$query = mysqli_query($con,$sql);

if($query){
    header("location: index.php");
}
?>