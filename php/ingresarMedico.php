
<?php


include '../conexion.php';
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$especialidad=$_POST['especialidad'];
$inputPassword=$_POST['inputPassword'];
$fech_nac=$_POST['fech_nac'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];


        $conexion=conectar();

        
      $sql = "SELECT `CEDULA_MED` FROM `medico` WHERE `CEDULA_MED`='$cedula'" ;
      $result = mysqli_query($conexion,$sql) or die("Problemas al Reservar cita verifique que sea un usuario del sistema  ");
         
    if(mysqli_fetch_array($result))
    {
       echo "El Medico que desea registrar ya existe en la base de datos.  ";
    }else{


         mysqli_query( $conexion, "insert into medico(CEDULA_MED, 
         NOMBRE_MED, 
         APELLIDO_MED, 
         TELEFONO_MED, 
         ESPECIALIDAD, 
         ESTADO_MED,
         CONTRASENA_MED, 
         FECHA_NAC_MED, 
         DIRECCION_MED, 
         CORREO_MED ) values
           ('$cedula','$nombre','$apellido',' $telefono','$especialidad','0',' $inputPassword','$fech_nac','$direccion','$correo')" ) or die("   Problemas en el select: ".mysqli_error($conexion));

         cerrar($conexion);
         echo "La historia clinica se ha creado correctamente.";

        }
          ?>
             




