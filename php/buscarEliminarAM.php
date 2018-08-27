<?php
include '../conexion.php';
$conexion = conectar();     //pasar la conexion de inicio al principio de cada funcion y borrar la funcion global de conexion
$strBuscar = '17'; //quitar cuando ya se implemente

buscarAuxiliares($strBuscar);
buscarMedicos($strBuscar);
cerrar($conexion);      //pasar la conexion de cerrar al final de cada funcion

function buscarAuxiliares($_strBuscar) //metodo para buscar auxiliares
{
    global $conexion;

    $ct = 0; //variable para el while
    $_auxiliares; //declaracion del vector para almacenar los datos de la consulta
    $findAuxiliares = mysqli_query($conexion, "SELECT *  FROM `auxiliar`WHERE `CEDULA_AUX` LIKE '%$_strBuscar%'
                                                    OR `NOMBRE_AUX` LIKE '%$_strBuscar%'
                                                    OR `APELLIDO_AUX` LIKE '%$_strBuscar%'
                                                    OR `DIRECCION_AUX` LIKE '%$_strBuscar%'
                                                    OR `TELEFONO_AUX` LIKE '%$_strBuscar%' AND `ESTADO_AUX` = '0'")
    or die("Problemas en el select" . mysqli_error($conexion));

    while ($row = (mysqli_fetch_array($findAuxiliares))) { //ciclo while para almacenar todos los datos que vienen de la base
        $_auxiliares[$ct] = array(
            'cedulaA' => $row['CEDULA_AUX'],
            'nombreA' => $row['NOMBRE_AUX'],
            'apellidoA' => $row['APELLIDO_AUX'],
            'direccionA' => $row['DIRECCION_AUX'],
            'telefonoA' => $row['TELEFONO_AUX'],
            'fecNacA' => $row['FECH_NAC_AUX'],
            'contrasenaA' => $row['CONTRASENA_AUX'],
            'estadoA' => $row['ESTADO_AUX'],
            'correoA' => $row['CORREO_AUX']);
        $ct++; //aumento del contador para guardar en el vector
    }
    $ct = 0;

    if (isset($_auxiliares)) { //condicional if para ver si el vector esta lleno
        $_SESSION['auxiliares'] = $_auxiliares; //almacenando el vector en una sesion para utilizarlo en otra pagina
        $auxiliares = $_SESSION['auxiliares']; //forma para recuperar los valores de la sesion
        echo "*********************************AUXILIARES";
        echo "<br>";
        for ($i = 0; $i < count($auxiliares); $i++) { //for para imprimir los valores del vector recuperado de la sesion, conunt es para la dimension del vector
            echo 'cedula', $auxiliares[$i]['cedulaA'];
            echo "<br>";
            echo 'nombre', $auxiliares[$i]['nombreA'];
            echo "<br>";
            echo 'apellido', $auxiliares[$i]['apellidoA'];
            echo "<br>";
            echo 'direccion', $auxiliares[$i]['direccionA'];
            echo "<br>";
            echo 'telefono', $auxiliares[$i]['telefonoA'];
            echo "<br>";
            echo 'fecha nacimiento', $auxiliares[$i]['fecNacA'];
            echo "<br>";
            echo 'contrasena', $auxiliares[$i]['contrasenaA'];
            echo "<br>";
            echo 'estado', $auxiliares[$i]['estadoA'];
            echo "<br>";
            echo 'correo', $auxiliares[$i]['correoA'];
            echo "<br>";
            echo '------------------------------------------------------------';
            echo "<br>";
        }
    }

}

function buscarMedicos($_strBuscar) //metodo para buscar auxiliares
{
    global $conexion;

    $ct = 0; //variable para el while
    $_medicos; //declaracion del vector para almacenar los datos de la consulta

    $findMedicos = mysqli_query($conexion, "SELECT *  FROM `medico` WHERE `CEDULA_MED` LIKE '%$_strBuscar%'
                                                        OR `NOMBRE_MED` LIKE '%$_strBuscar%'
                                                        OR `APELLIDO_MED` LIKE '%$_strBuscar%'
                                                        OR `TELEFONO_MED` LIKE '%$_strBuscar%'
                                                        OR `ESPECIALIDAD` LIKE '%$_strBuscar%' AND `ESTADO_MED` = 0
                                                        OR `DIRECCION_MED` LIKE '%$_strBuscar%'
                                                        OR `CORREO_MED` LIKE '%$_strBuscar%'")
    or die("Problemas en el select" . mysqli_error($conexion));

    while ($row = (mysqli_fetch_array($findMedicos))) { //ciclo while para almacenar todos los datos que vienen de la base
        $_medicos[$ct] = array(
            'cedulaM' => $row['CEDULA_MED'],
            'nombreM' => $row['NOMBRE_MED'],
            'apellidoM' => $row['APELLIDO_MED'],
            'telefonoM' => $row['TELEFONO_MED'],
            'especialidadM' => $row['ESPECIALIDAD'],
            'contrasenaM' => $row['CONTRASENA_MED'],
            'estadoM' => $row['ESTADO_MED'],
            'fechNacM' => $row['FECHA_NAC_MED'],
            'direccionM' => $row['DIRECCION_MED'],
            'correoM' => $row['CORREO_MED']);
        $ct++; //aumento del contador para guardar en el vector
    }
    $ct = 0;

    if (isset($_medicos)) { //condicional if para ver si el vector esta lleno
        $_SESSION['medicos'] = $_medicos; //almacenando el vector en una sesion para utilizarlo en otra pagina
        $medicos = $_SESSION['medicos']; //forma para recuperar los valores de la sesion
        echo "*********************************MEDICOS";
        echo "<br>";
        for ($i = 0; $i < count($medicos); $i++) { //for para imprimir los valores del vector recuperado de la sesion, conunt es para la dimension del vector
            echo 'cedula', $medicos[$i]['cedulaM'];
            echo "<br>";
            echo 'nombre', $medicos[$i]['nombreM'];
            echo "<br>";
            echo 'apellido', $medicos[$i]['apellidoM'];
            echo "<br>";
            echo 'telefono', $medicos[$i]['telefonoM'];
            echo "<br>";
            echo 'especialidad', $medicos[$i]['especialidadM'];
            echo "<br>";
            echo 'contrasena', $medicos[$i]['contrasenaM'];
            echo "<br>";
            echo 'estado', $medicos[$i]['estadoM'];
            echo "<br>";
            echo 'fechNac', $medicos[$i]['fechNacM'];
            echo "<br>";
            echo 'direccion', $medicos[$i]['direccionM'];
            echo "<br>";
            echo 'correo', $medicos[$i]['correoM'];
            echo "<br>";
            echo '------------------------------------------------------------';
            echo "<br>";
        }
    }

}

function eliminarAuxiliar($_strBuscar)
{
    global $conexion;

    mysqli_query($conexion, "UPDATE `auxiliar`
                            SET `ESTADO_AUX` = '1'
                            WHERE `auxiliar`.`CEDULA_AUX` = '$_strBuscar'")
    or die("Problemas en el select" . mysqli_error($conexion));

    echo 'El auxiliar ha sido eliminado correctamente';
}

function eliminarMedico($_strBuscar)
{
    global $conexion;

    mysqli_query($conexion, "UPDATE `medico`
                            SET `ESTADO_MED` = '1'
                            WHERE `medico`.`CEDULA_MED` = '$_strBuscar'")
    or die("Problemas en el select" . mysqli_error($conexion));

    echo 'El medioc ha sido eliminado correctamente';
}

?>