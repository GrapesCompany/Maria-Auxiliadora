
<?php



include '../conexion.php';
session_start();
if(isset($_SESSION['userAuxiliar'])){
  $auxiliar=$_SESSION['userAuxiliar'];
}else
{
  header("Location: /index2.php");
}

$ccactual=$_POST['ccactual'];
$ccnueva=$_POST['ccnueva'];
$ccverinueva=$_POST['ccverinueva'];
$cedulaAuxiliar=$auxiliar[0]['cedulaA'];
$contrasenaAuxiliar=$auxiliar[0]['contrasenaA'];

if($contrasenaAuxiliar!=$ccactual)
{
    echo "La contraseña actual no es correcta";
}else
{
    $conexion=conectar();


         
    mysqli_query( $conexion, "UPDATE  `auxiliar` SET `CONTRASENA_AUX`='$ccverinueva' where `CEDULA_AUX`='$cedulaAuxiliar'" ) or die("Problemas en el select.  ".mysqli_error($conexion));

    cerrar($conexion);
    
    echo "Se ha modificado correctamente la contraseña.  ";
  unset($_SESSION['userAuxiliar']);

    header('Location: ../index2.php');

}

 
          ?>