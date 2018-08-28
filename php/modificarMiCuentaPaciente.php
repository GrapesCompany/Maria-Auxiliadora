
<?php


include '../conexion.php';
session_start();
if(isset($_SESSION['userPaciente'])){
  $medico=$_SESSION['userPaciente'];
}else
{
  header("Location: ../index2.php");
}



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
$correoHist=$_POST['correoHist'];





$_SESSION['userPaciente'][0]['nombreP']=$nombreHist;
$_SESSION['userPaciente'][0]['apellidoP']=$apellidoHist;
$_SESSION['userPaciente'][0]['telefonoP']=$telefonoHist;
$_SESSION['userPaciente'][0]['fechaNacP']=$fech_nacHist;
$_SESSION['userPaciente'][0]['provinciaP']=$provinciaHist;
$_SESSION['userPaciente'][0]['cantonP']=$cantonHist;
$_SESSION['userPaciente'][0]['profesionP']=$provinciaHist;
$_SESSION['userPaciente'][0]['estadoCivilP']=$ecivilHist;
$_SESSION['userPaciente'][0]['sexoP']=$sexoHist;
$_SESSION['userPaciente'][0]['correoP']=$correoHist;
$_SESSION['userPaciente'][0]['direccionP']=$direccionHist;






$cedulaPaciente=$medico[0]['cedulaP'];

        $conexion=conectar();

    
 
         
         mysqli_query( $conexion, "UPDATE  `paciente` SET `NOMBRE_PAC`='$nombreHist',`APELLIDO_PAC`='$apellidoHist', `TELEFONO_PAC`='$telefonoHist',
         `FECHA_NAC_PAC`='$fech_nacHist',`PROVINCIA_PAC`='$provinciaHist',`CANTON_PAC`='$cantonHist',`PROFESION`='$profesionHist',`ESTADOCIVIL`='$ecivilHist',
         `SEXO`='$sexoHist',`CORREO_PAC`='$correoHist',`DIRECCION_PAC`='$direccionHist' where `CEDULA_PAC`='$cedulaPaciente'" ) or die("Problemas en el select.  ".mysqli_error($conexion));

         cerrar($conexion);
         
         echo "Se ha modificado correctamente El Usuario.  ";
        

    
 

 ?>