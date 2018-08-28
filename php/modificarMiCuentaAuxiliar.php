
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


$cedulaAuxiliar=$auxiliar[0]['cedulaA'];


    mysqli_query( $conexion, "UPDATE  `auxiliar` SET `NOMBRE_AUX`='$nombre',`APELLIDO_AUX`='$apellido', `TELEFONO_AUX`='$telefono',
    `FECHA_NAC_AUX`='$fech_nac',`CORREO_AUX`='$correo',`DIRECCION_AUX`='$direccion' where `CEDULA_AUX`='$cedulaAuxiliar'" ) or die("Problemas en el select.  ".mysqli_error($conexion));

    cerrar($conexion);
    
    echo "Se ha modificado correctamente la contraseña.  ";
  
 
          ?>