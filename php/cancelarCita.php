
<?php

include '../conexion.php';

$conexion=conectar();
$idCitaIn = $_POST['enviar'];

mysqli_query($conexion,"UPDATE `cita` 
                        SET `ESTADO_CITA` = '2' 
                        WHERE `cita`.`ID_CITA` = $idCitaIn");

echo "La cita ha sido cancelada correctamente";
    cerrar($conexion);

?>