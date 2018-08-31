<?php

include '../conexion.php';

$conexion=conectar();
$cedulaDelete = $_POST['enviar'];

mysqli_query($conexion,"UPDATE `medico` 
                        SET `ESTADO_MED` = '1' 
                        WHERE `medico`.`CEDULA_MED` = '$cedulaDelete'");

echo "Se ha eliminado correctamente al auxiliar";
    cerrar($conexion);
    ?>