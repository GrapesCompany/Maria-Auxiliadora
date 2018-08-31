<?php

session_start();
include '../conexion.php';
$conexion = conectar(); 

$idIn = $_POST['idC'];
$observacionesIn = $_POST['observaciones'];
$responsableIn = $_POST['responsable'];

$FinalizacionCitaAuxiliar = mysqli_query($conexion, "UPDATE `historiaclinica` 
                                                        SET 
                                                        `RESPONSABLE` = '$responsableIn', 
                                                        `OBSERVACIONES` = '$observacionesIn' 
                                                        WHERE `historiaclinica`.`ID_HC` = $idIn")
                                                        or die("Problemas en el select" . mysqli_error($conexion));

echo 'La HISTORIA CLINICA ha sido actualizada satisfactoriamente';
?>