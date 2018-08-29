
<?php

include '../conexion.php';

$conexion=conectar();
$cedulaDelete = $_POST['enviar'];



mysqli_query($conexion,"UPDATE `auxiliar` 
SET `ESTADO_AUX` = '1' 
WHERE `auxiliar`.`CEDULA_AUX` = '$cedulaDelete'");

echo "Se ha eliminado correctamente al doctor";
    cerrar($conexion);
    ?>