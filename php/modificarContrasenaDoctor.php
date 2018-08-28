
<?php


include '../conexion.php';
session_start();
if(isset($_SESSION['userMedico'])){
  $medico=$_SESSION['userMedico'];
}else
{
  header("Location: /index2.php");
}


$ccactual=$_POST['ccactual'];
$ccnueva=$_POST['ccnueva'];
$ccverinueva=$_POST['ccverinueva'];

$cedulaMedico=$medico[0]['cedulaM'];
$conrasenaMedico=$medico[0]['cedulaM'];


if($conrasenaMedico!=$ccactual)
{
    echo "La contraseña actual no es correcta";
}else
{


        $conexion=conectar();


         
         mysqli_query( $conexion, "UPDATE  `medico` SET `CONTRASENA_MED`='$ccverinueva' where `CEDULA_MED`='$cedulaMedico'" ) or die("Problemas en el select.  ".mysqli_error($conexion));

         cerrar($conexion);
         
         echo "Se ha modificado correctamente la contraseña.  ";
         unset($_SESSION['userMedico']);

      header('Location: ../index2.php');
 
}
          ?>