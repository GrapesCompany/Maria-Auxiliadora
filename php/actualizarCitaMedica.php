<?php
session_start();
include '../conexion.php';
$medico=$_SESSION['userMedico'];
$cedMed = $medico[0]['cedulaM'];
$conexion = conectar(); 

//ME FALTA SOLO LA CONSULTA PAPA

$idCita=$_POST['idCita1'];
$tratamiento=$_POST['tratamientoMCM'];
$medicamento=$_POST['medicamentoMCM'];
$diagnostico=$_POST['diagnosticoMCM'];

$FinalizacionCitaMedica = mysqli_query($conexion, "UPDATE `cita` SET 
                                    `DETALLE_DIAGNOSTICO_CITA` = '$diagnostico', 
                                    `TRATAMIENTO_CITA` = '$tratamiento', 
                                    `MEDICAMENTO_CITA` = '$medicamento', 
                                    `ESTADO_CITA` = '1' 
                                    WHERE `cita`.`ID_CITA` = $idCita")
or die("Problemas en el select" . mysqli_error($conexion));

echo 'La CITA MEDICA ha sido actualizada satisfactoriamente';
?>