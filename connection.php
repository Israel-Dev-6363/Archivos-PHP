<?php
function connection() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "crudi";
    
    $connect = mysqli_connect($host, $user, $pass, $db);
    
    if(!$connect) {
        die("Error de conexión: " . mysqli_connect_error());
    }
    
    return $connect;
}
?>