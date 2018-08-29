
<?php



include '../conexion.php';
session_start();
if(isset($_SESSION['userAuxiliar'])){
  $auxiliar=$_SESSION['userAuxiliar'];
}else
{
  header("Location: ../index2.php");
}


$nombre=$_POST['nombreAux'];
$apellido=$_POST['apellidoAux'];
$direccion=$_POST['direccionAux'];
$telefono=$_POST['telefonoAux'];
$fech_nac=$_POST['fech_nacAux'];
$correo=$_POST['correoAux'];



$_SESSION['userAuxiliar'][0]['nombreA']=$nombre;
$_SESSION['userAuxiliar'][0]['apellidoA']=$apellido;
$_SESSION['userAuxiliar'][0]['direccionA']=$direccion;
$_SESSION['userAuxiliar'][0]['telefonoA']=$telefono;
$_SESSION['userAuxiliar'][0]['fechaNacA']=$fech_nac;
$_SESSION['userAuxiliar'][0]['correoA']=$correo;







$cedulaAuxiliar=$auxiliar[0]['cedulaA'];

$conexion=conectar();
    mysqli_query( $conexion, "UPDATE  `auxiliar` SET `NOMBRE_AUX`='$nombre',`APELLIDO_AUX`='$apellido', `TELEFONO_AUX`='$telefono',
    `FECH_NAC_AUX`='$fech_nac',`CORREO_AUX`='$correo',`DIRECCION_AUX`='$direccion' where `CEDULA_AUX`='$cedulaAuxiliar'" ) or die("Problemas en el select.  ".mysqli_error($conexion));
     
     echo "Se ha modificado correctamente al Usuario.  ";
    cerrar($conexion);
    
   
  
 
          ?>