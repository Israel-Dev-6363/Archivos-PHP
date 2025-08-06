<?php
include("conexion.php");

$con=connection();

$id = $_GET['id'];

$sql = "SELECT * FROM tb_persona WHERE ID = '$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card mb-4">
        <div class="card-header">
            <h4>Agregar Usuario</h4>
           </div>
          <div class="card-body">
            <form action="edit_crud.php" method="post" class="row g-3">

            <input type = "hidden" name = "ID" value ="<?=$row['ID']?>"/>

                <div class="col-md-3">
                    <input type="text" name = "name" class="form-control" placeholder="Nombre"value ="<?=$row['Nombre']?>">
                </div>
                <div class="col-md-3">
                    <input type="text" name="lastname" class="form-control" placeholder="Apellido"value ="<?=$row['Apellido']?>">
                </div>
                <div class="col-md-3">
                    <input type="text" name="username" class="form-control" placeholder="Usuario"value ="<?=$row['Usuario']?>">
                </div>
                <div class="col-md-3">
                    <input type="text" name="password" class="form-control" placeholder="Contraseña"value ="<?=$row['Contraseña']?>">
                </div>
                <div class="col-md-3">
                    <input type="text" name="email" class="form-control" placeholder="Correo"value ="<?=$row['Email']?>">
                </div>
                <div class="col-6">
                    <input type="submit" value="Actualizar" class="btn btn-primary w-100">
                </div>
            </form>
        </div>
    </div>
</body>
 </html>