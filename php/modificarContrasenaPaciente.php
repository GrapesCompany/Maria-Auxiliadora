
<?php


include '../conexion.php';
session_start();
if(isset($_SESSION['userPaciente'])){
  $paciente=$_SESSION['userPaciente'];
}else
{
  header("Location: ../index2.php");
}


$ccactual=$_POST['ccactual'];
$ccnueva=$_POST['ccnueva'];
$ccverinueva=$_POST['ccverinueva'];

$cedulaPaciente=$paciente[0]['cedulaP'];
$conrasenaPaciente=$paciente[0]['contrasenaP'];


if($conrasenaPaciente!=$ccactual)
{
    echo "La contraseña actual no es correcta";
}else
{


        $conexion=conectar();


         
         mysqli_query( $conexion, "UPDATE  `paciente` SET `CONTRASENA_PAC`='$ccverinueva' where `CEDULA_PAC`='$cedulaPaciente'" ) or die("Problemas en el select.  ".mysqli_error($conexion));

         cerrar($conexion);
         
         echo "Se ha modificado correctamente la contraseña.  ";
         unset($_SESSION['userPaciente']);

      header('Location: ../index2.php');
 
}
 ?>