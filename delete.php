<?php  
include("conexion.php");

$con = connection();

$id = $_GET['id'];

$sql = "DELETE FROM tb_persona WHERE id='$id' ";

$elim = mysqli_query($con, $sql);

if($elim){
    header("location: index.php");
}
?>