
<?php

echo "hola";
include '../conexion.php';


$cedulaHist=$_POST['cedulaHist'];
$nombreHist=$_POST['nombreHist'];
$apellidoHist=$_POST['apellidoHist'];
$fech_nacHist=$_POST['fech_nacHist'];
$telefonoHist= $_POST['telefonoHist'];
$direccionHist=$_POST['direccionHist'];
$provinciaHist=$_POST['provinciaHist'];
$sexoHist=$_POST['sexoHist'];
$ecivilHist=$_POST['ecivilHist'];
$cantonHist=$_POST['cantonHist'];
$profesionHist=$_POST['profesionHist'];
$contrasenaHist=$_POST['contrasenaHist'];
$responsableHist=$_POST['responsableHist'];
$observacionesHist=$_POST['observacionesHist'];
$contrasenaHist=$_POST['contrasenaHist'];
$correoHist=$_POST['correoHist'];

// hsitoria clinica

$conexion=conectar();


$sql = "SELECT `CEDULA_PAC` FROM `paciente` WHERE `CEDULA_PAC`='$cedulaHist'" ;
$result = mysqli_query($conexion,$sql) or die("Problemas al verificar usuarios en el sistema.  ");
   
if($result)
{
 echo "El Usuario que desea registrar ya existe en la base de datos.  ";
}else{

  mysqli_query( $conexion, "insert into paciente(CEDULA_PAC, 
         NOMBRE_PAC, 
         APELLIDO_PAC,
         TELEFONO_PAC, 
         FECHA_NAC_PAC,  
         PROVINCIA_PAC,
         CANTON_PAC, 
         PROFESION, 
         ESTADOCIVIL,
         SEXO, 
         CONTRASENA_PAC, 
         ESTADO_PAC, 
         CORREO_PAC, 
         DIRECCION_PAC  ) values
           ('$cedulaHist','$nombreHist','$apellidoHist','$telefonoHist', '$fech_nacHist','$provinciaHist','$cantonHist','$profesionHist','$ecivilHist','$sexoHist','$contrasenaHist','0','$correoHist','$direccionHist')" ) or die("Problemas en el select".mysqli_error($conexion));


           mysqli_query( $conexion, "insert into historiaclinica(
            CEDULA_PAC,
            CEDULA_AUX,
            HC_FECHA_CREACION, 
            RESPONSABLE, 
            OBSERVACIONES
            ) values
             ('$cedulaHist','1711779825','','$responsableHist', '$observacionesHist')" ) or die("Problemas en el select.  ".mysqli_error($conexion));
          

         cerrar($conexion);

         echo "La historia clinica se ha creado correctamente.  ";
}


     
         
         
         
          ?>
             




