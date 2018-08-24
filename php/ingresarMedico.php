
<?php

echo "hola";

include '../conexion.php';
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$especialidad=$_POST['especialidad'];
$inputPassword=$_POST['inputPassword'];
$fech_nac=$_POST['fech_nac'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
    echo "hola tefo", $cedula;
        $conexion=conectar();
         
         mysqli_query( $conexion, "insert into medico(CEDULA_MED, 
         NOMBRE_MED, 
         APELLIDO_MED, 
         TELEFONO_MED, 
         ESPECIALIDAD, 
         ESTADO_MED,
         CONTRASENA_MED, 
         FECHA_NAC_MED, 
         DIRECCION_MED, 
         CORREO_MED ) values
           ('$cedula','$nombre','$apellido',' $telefono','$especialidad','0',' $inputPassword','$fech_nac','$direccion','$correo')" ) or die("Problemas en el select".mysqli_error($conexion));

         cerrar($conexion);
         
          ?>
             




