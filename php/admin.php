
<?php



include '../conexion.php';
 try{
$ccactual=$_POST['ccactual'];
$ccnueva=$_POST['ccnueva'];
$ccverinueva=$_POST['ccverinueva'];





        $conexion=conectar();


         
         mysqli_query( $conexion, "UPDATE  `admin` SET `CONTRASENA`='$ccverinueva'" ) or die("Problemas en el select.  ".mysqli_error($conexion));

         cerrar($conexion);
         
         echo "Se ha cambiado correctamente de contraseña .  ";
         
        }catch(Exception $e)
        {
           echo "Existe un error.  "+$e;
        }
          ?>
             




