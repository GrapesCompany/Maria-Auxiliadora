
<?php

echo "hola";

include '../conexion.php';
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$especialidad=$_POST['especialidad'];
$inputPassword=$_POST['inputPassword'];


    echo "hola tefo", $cedula;
        $conexion=conectar();
         
         mysqli_query( $conexion, "insert into auxiliar(CEDULA_AUX 
         CEDULA_PAC, 
         ID_HC,
         NOMBRE_AUX,
         APELLIDO_AUX, 
         DIRECCION_AUX,
         TELEFONO_AUX, 
         FECH_NAC_AUX, 
         EDAD_AUX, 
         ESTADO_AUX, 
         CONTRASENA_AUX ) values
           ('$cedula','$nombre','$apellido',' $telefono','$especialidad','0',' $inputPassword')" ) or die("Problemas en el select".mysqli_error($conexion));

         cerrar($conexion);
         
          ?>
             




