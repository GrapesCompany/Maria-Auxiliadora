
<?php

echo "hola";

include '../conexion.php';

$ccactual=$_POST['ccactual'];
$ccnueva=$_POST['ccnueva'];
$ccverinueva=$_POST['ccverinueva'];



echo "hola";

        $conexion=conectar();


         
         mysqli_query( $conexion, "UPDATE  `medico` SET `CONTRASENA_MED`='$ccverinueva' where `CEDULA_MED`='1719181941'" ) or die("Problemas en el select".mysqli_error($conexion));

         cerrar($conexion);
         
         
          ?>