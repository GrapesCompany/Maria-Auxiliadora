<?php

session_start();
include '../conexion.php';
$conexion = conectar(); 

$idIn = $_POST['idC'];
$pesoIn = $_POST['peso'];
$alturaIn = $_POST['altura'];
$presionIn = $_POST['presion'];
$motivo_citaIn = $_POST['motivo_cita'];

$FinalizacionCitaAuxiliar = mysqli_query($conexion, "UPDATE `cita` 
                                                    SET `MOTIVO_CITA` = '$motivo_citaIn', 
                                                    `PESO_CITA` = '$pesoIn', 
                                                    `ALTURA_CITA` = '$alturaIn', 
                                                    `PRESION` = '$presionIn' 
                                                    WHERE `cita`.`ID_CITA` = $idIn")
or die("Problemas en el select" . mysqli_error($conexion));

echo 'La CITA MEDICA ha sido actualizada satisfactoriamente';
?>