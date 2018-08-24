<?php
function conectar()
{
    $conexion = mysqli_connect("localhost", "root", "", "db_consultorio") or die("No se ha podido establecer la conexión");
    mysqli_select_db($conexion, "db_consultorio") or die("Problemas en la selección de la base de datos");
    return $conexion;
}

function cerrar($conexion)
{
    mysqli_close($conexion);
}
