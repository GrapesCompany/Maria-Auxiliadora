
<?php



include '../conexion.php';

$ccactual=$_POST['ccactual'];
$ccnueva=$_POST['ccnueva'];
$ccverinueva=$_POST['ccverinueva'];




        $conexion=conectar();


         
         mysqli_query( $conexion, "UPDATE  `auxiliar` SET `CONTRASENA_AUX`='$ccverinueva' where `CEDULA_AUX`='060111111'" ) or die("Problemas en el select.  ".mysqli_error($conexion));

         cerrar($conexion);
         
         echo "Se ha modificado correctamente la contraseña.  ";
         
          ?>