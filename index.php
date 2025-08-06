<?php  
include("conexion.php");

$con = connection();
$sql = "SELECT * FROM tb_persona";
$query = mysqli_query($con, $sql);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card mb-4">
        <div class="card-header">
            <h4>Agregar Usuario</h4>
        </div>
        <div class="card-body">
            <form action="insertar_crud.php" method="post" class="row g-3">
                <div class="col-md-3">
                    <input type="text" name="name" class="form-control" placeholder="Nombre">
                </div>
                <div class="col-md-3">
                    <input type="text" name="lastname" class="form-control" placeholder="Apellido">
                </div>
                <div class="col-md-3">
                    <input type="text" name="username" class="form-control" placeholder="Usuario">
                </div>
                <div class="col-md-3">
                    <input type="text" name="password" class="form-control" placeholder="Contraseña">
                </div>
                <div class="col-md-3">
                    <input type="text" name="email" class="form-control" placeholder="Correo">
                </div>
                <div class="col-6">
                    <input type="submit" value="Agregar Usuario" class="btn btn-primary w-100">
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Usuarios de la Tabla</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?= $row['ID'] ?></td>
                        <td><?= $row['Nombre'] ?></td>
                        <td><?= $row['Apellido'] ?></td>
                        <td><?= $row['Usuario'] ?></td>
                        <td><?= $row['Contraseña'] ?></td>
                        <td><?= $row['Email'] ?></td>

<td> <a href = "update.php?id=<?=$row['ID']?>" class ="btn btn-sm btn-warning">Editar</a></td>

<td> <a href = "delete.php?id=<?=$row['ID']?>" class ="btn btn-sm btn-danger" >Eliminar</a></td>

                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>