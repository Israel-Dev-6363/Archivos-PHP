<?php
include("connection.php");

$con = connection();

$id = null;
$nombre = $_POST['name'];
$apellido = $_POST['lastname'];
$usuario = $_POST['username'];
$contrasenia = $_POST['password'];
$correo = $_POST['email'];

$sql = "INSERT INTO tb_personas (nombre, apellido, usuario, contrasenia, correo) 
        VALUES ('$nombre', '$apellido', '$usuario', '$contrasenia', '$correo')";
$query = mysqli_query($con, $sql);

if($query){
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($con);
}
?>