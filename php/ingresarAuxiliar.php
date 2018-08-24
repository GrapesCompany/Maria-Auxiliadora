
<?php

echo "hola";

include '../conexion.php';
$cedula=$_POST['cedulaAux'];
$nombre=$_POST['nombreAux'];
$apellido=$_POST['apellidoAux'];
$direccion=$_POST['direccionAux'];


$telefono=$_POST['telefonoAux'];
$fech_nac=$_POST['fech_nacAux'];
$correo=$_POST['correoAux'];
$inputPassword=$_POST['inputPasswordAux'];


    echo "hola tefo", $cedula;
        $conexion=conectar();
         
         mysqli_query( $conexion, "INSERT INTO `auxiliar` (
           `CEDULA_AUX`, 
           `NOMBRE_AUX`, 
           `APELLIDO_AUX`, 
           `DIRECCION_AUX`, 
           `TELEFONO_AUX`, 
           `FECH_NAC_AUX`, 
           `CONTRASENA_AUX`, 
           `ESTADO_AUX`, 
           `CORREO_AUX`) values
           ('$cedula' , '$nombre' , '$apellido' , '$direccion', '$telefono','$fech_nac','$inputPassword','0','$correo')" ) or die("Problemas en el select".mysqli_error($conexion));

echo "hola tefo", $cedula;
echo "hola tefo", $cedula;
echo "hola tefo", $cedula;
         cerrar($conexion);
         
          ?>
             




