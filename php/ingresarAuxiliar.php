
<?php

echo "hola";

include '../conexion.php';
$cedula=$_POST['cedulaAux'];
$nombre=$_POST['nombreAux'];
$apellido=$_POST['apellidoAux'];
$direccion=$_POST['direccionAux'];


$telefono=$_POST['telefono'];
$fech_nac=$_POST['direccionAux'];
$correo=$_POST['correoAux'];
$contrasena=$_POST['contrasenaAux'];


    echo "hola tefo", $cedula;
        $conexion=conectar();
         
         mysqli_query( $conexion, "insert into auxiliar(CEDULA_AUX 
         NOMBRE_AUX 
         APELLIDO_AUX 
         DIRECCION_AUX 
         TELEFONO_AUX 
         FECH_NAC_AUX 
         CONTRASENA_AUX 
         ESTADO_AUX 
         CORREO_AUX) values
           ('$cedula','$nombre','$apellido','$direccion' $telefono','$fech_nac','$correo',$especialidad','0',' $inputPassword')" ) or die("Problemas en el select".mysqli_error($conexion));

         cerrar($conexion);
         
          ?>
             




