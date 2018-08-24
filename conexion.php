<?php
function conectar()
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "db_consultorio";
    $conexion = mysqli_connect($server, $username, $password, $db) or die("No se ha podido establecer la conexión");

    mysqli_select_db($conexion, $db) or die("Problemas en la selección de la base de datos");
    return $conexion;
}

function cerrar($conexion)
{
    mysqli_close($conexion);
}

?>