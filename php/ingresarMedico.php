
<?php

include '../conexion.php';
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$
    echo "hola tefo", $cedula;
        $conexion=conectar();
         
         mysqli_query( $conexion, "insert into medico(CEDULA_MED,NOMBRE_MED,APELLIDO_MED,TELEFONO_MED,ESPECIALIDAD,ESTADO_MED,CONTRASENA_MED) values
           ('$cedula','$nombre','$apellido',' $this->direccion','  $this->telefono',' $this->clave',' $this->imagen')" ) or die("Problemas en el select".mysqli_error($conexion));
 
             return $u;
         
    
     
 

?>