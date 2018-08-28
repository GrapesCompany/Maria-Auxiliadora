
<?php

echo "hola";

include '../conexion.php';

$ccactual=$_POST['ccactual'];
$ccnueva=$_POST['ccnueva'];
$ccverinueva=$_POST['ccverinueva'];



echo "hola";

        $conexion=conectar();


         
         mysqli_query( $conexion, "UPDATE  `auxiliar` SET `CONTRASENA_AUX`='$ccverinueva' where `CEDULA_AUX`='060111111'" ) or die("Problemas en el select".mysqli_error($conexion));

         cerrar($conexion);
         
         
          ?>