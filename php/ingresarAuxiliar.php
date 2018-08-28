
<?php



include '../conexion.php';
$cedula=$_POST['cedulaAux'];
$nombre=$_POST['nombreAux'];
$apellido=$_POST['apellidoAux'];
$direccion=$_POST['direccionAux'];


$telefono=$_POST['telefonoAux'];
$fech_nac=$_POST['fech_nacAux'];
$correo=$_POST['correoAux'];
$inputPassword=$_POST['inputPasswordAux'];


  
        $conexion=conectar();
        $sql = "SELECT `CEDULA_AUX` FROM `auxiliar` WHERE `CEDULA_AUX`='$cedula'" ;
      $result = mysqli_query($conexion,$sql) or die("Problemas al Reservar cita verifique que sea un usuario del sistema.  ");
         
    if(mysqli_fetch_array($result))
    {
       echo "El Auxiliar que desea registrar ya existe en la base de datos.  ";
    }else{
         
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
           ('$cedula' , '$nombre' , '$apellido' , '$direccion', '$telefono','$fech_nac','$inputPassword','0','$correo')" ) or die("Problemas en el select.  ".mysqli_error($conexion));


         cerrar($conexion);
         echo "El Auxiliar se ha registrado correctamente.  ";
        }
          ?>
             




