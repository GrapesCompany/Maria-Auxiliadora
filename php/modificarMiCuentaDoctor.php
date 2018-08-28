
<?php


include '../conexion.php';

session_start();
if(isset($_SESSION['userMedico'])){
  $medico=$_SESSION['userMedico'];
}else
{
  header("Location: ../index2.php");
}


$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$especialidad=$_POST['especialidad'];

$fech_nac=$_POST['fech_nac'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];

$cedulaMedico=$medico[0]['cedulaM'];



$_SESSION['userMedico'][0]['nombreM']=$nombre;
$_SESSION['userMedico'][0]['apellidoM']=$apellido;
$_SESSION['userMedico'][0]['telefonoM']=$telefono;
$_SESSION['userMedico'][0]['fechNacM']=$fech_nac;
$_SESSION['userMedico'][0]['especialidadM']=$especialidad;
$_SESSION['userMedico'][0]['direccionM']=$direccion;
$_SESSION['userMedico'][0]['correoM']=$correo;







$conexion=conectar();

    
 
         
         mysqli_query( $conexion, "UPDATE  `medico` SET `NOMBRE_MED`='$nombre',`APELLIDO_MED`='$apellido', `TELEFONO_MED`='$telefono',
         `FECHA_NAC_MED`='$fech_nac',`ESPECIALIDAD`='$especialidad',`CORREO_MED`='$correo',`DIRECCION_MED`='$direccion' where `CEDULA_MED`='$cedulaMedico'" ) or die("Problemas en el select.  ".mysqli_error($conexion));

         cerrar($conexion);
         
         echo "Se ha modificado correctamente El Usuario.  ";


?>