
<?php

echo "hola";

include '../conexion.php';

$cedula=$_POST['cedulaReserva'];
$medico=$_POST['medicoReserva'];
$fech_consul=$_POST['fech_consulReserva'];
$horario=$_POST['horario_medReserva'];


echo "hola";

        $conexion=conectar();

        
        $sql = "SELECT `ID_HC` FROM `historiaclinica` WHERE `CEDULA_PAC`='$cedula'" ;
        $result = mysqli_query($conexion,$sql);

        while ($f = mysqli_fetch_array($result)){
            $valorGuardar = $f[0];
        }
         
         mysqli_query( $conexion, "INSERT INTO `cita` (
           `CEDULA_MED`,
           `CEDULA_PAC`, 
           `ID_HC`, 
           `HORA_CITA`,
           `FECHA_CITA`,
           `ESTADO_CITA`) values
           ('$medico','$cedula','$valorGuardar','$horario','$fech_consul','0')" ) or die("Problemas en el select".mysqli_error($conexion));

         cerrar($conexion);
         
         
          ?>
             




