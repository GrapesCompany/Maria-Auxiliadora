<?php
session_start();
include '../conexion.php';

$conexion = conectar();
$username = $_POST['username'];
$password = $_POST['password'];
$tipoP = $_GET['tipoP'];
$cargo = $_POST['cargo'];

if ($tipoP == 'paciente' && $username != "" && $username != null && $password != "" && $password != null) {
    $existenciausuario = mysqli_query($conexion, "SELECT * FROM paciente WHERE paciente.`CEDULA_PAC`='$username' AND  paciente.`CONTRASENA_PAC`='$password' AND  paciente.`ESTADO_PAC`='1'") or die("Problemas en el select" . mysqli_error($conexion));

    while ($f = mysqli_fetch_array($existenciausuario)) {
        $arreglo_paciente[] = array('cedulaP' => $f['CEDULA_PAC'],
            'nombreP' => $f['NOMBRE_PAC'],
            'apellidoP' => $f['APELLIDO_PAC'],
            'telefonoP' => $f['TELEFONO_PAC'],
            'fechaNacP' => $f['FECHA_NAC_PAC'],
            'edadP' => $f['EDAD_PAC'],
            'provinciaP' => $f['PROVINCIA_PAC'],
            'cantonP' => $f['CANTON_PAC'],
            'profesionP' => $f['PROFESION'],
            'estadoCivilP' => $f['ESTADOCIVIL'],
            'sexoP' => $f['SEXO'],
            'estadoP' => $f['ESTADO_PAC'],
            'contrasenaP' => $f['CONTRASENA_PAC']);
    }
    if ($arreglo_paciente != null) {
        echo "eres paciente";
        header('Location: ../../admin.php');
    } else {
        header('Location: ../../index.php?error=Datos Incorrectos');
    }
} else {
    if ($tipoP == 'administrador' && $cargo == 'medico' && $username != "" && $username != null && $password != "" && $password != null) {
        $existenciausuario = mysqli_query($conexion, "SELECT * FROM medico WHERE medico.`CEDULA_MED`='$username' AND  medico.`CONTRASENA_MED`='$password' AND  medico.`ESTADO_MED`='1'") or die("Problemas en el select" . mysqli_error($conexion));

        while ($f = mysqli_fetch_array($existenciausuario)) {
            $arreglo_medico[] = array('cedulaM' => $f['CEDULA_MED'],
                'nombreM' => $f['NOMBRE_MED'],
                'apellidoM' => $f['APELLIDO_MED'],
                'telefonoM' => $f['TELEFONO_MED'],
                'especialidadM' => $f['ESPECIALIDAD'],
                'estadoM' => $f['ESTADO_MED'],
                'contrasenaM' => $f['CONTRASENA_MED']);
        }

        if ($arreglo_medico != null) {
            echo "eres medico";
            header('Location: ../../admin.php');
        } else {
            header('Location: ../../index2.php?error=Datos Incorrectos');
        }

    } else {
        if ($tipoP == 'administrador' && $cargo == 'auxiliar' && $username != "" && $username != null && $password != "" && $password != null) {
            $existenciausuario = mysqli_query($conexion, "SELECT * FROM auxiliar WHERE auxiliar.`CEDULA_AUX`='$username' AND  auxiliar.`CONTRASENA_AUX`='$password' AND  auxiliar.`ESTADO_AUX`='1'") or die("Problemas en el select" . mysqli_error($conexion));

            while ($f = mysqli_fetch_array($existenciausuario)) {
                $arreglo_auxiliar[] = array('cedulaM' => $f['CEDULA_AUX'],
                    'nombreA' => $f['NOMBRE_AUX'],
                    'apellidoA' => $f['APELLIDO_AUX'],
                    'direccionA' => $f['DIRECCION_AUX'],
                    'telefonoA' => $f['TELEFONO_AUX'],
                    'fechaNacA' => $f['FECH_NAC_AUX'],
                    'edadA' => $f['EDAD_AUX'],
                    'estadoA' => $f['ESTADO_AUX'],
                    'contrasenaA' => $f['CONTRASENA_AUX']);
            }

            if ($arreglo_auxiliar != null) {
                echo "eres auxiliar";
                header('Location: ../../admin.php');
            } else {
                header('Location: ../../index2.php?error=Datos Incorrectos');
            }

        } else {
            if ($tipoP == 'administrador') {
                header('Location: ../../index2.php?error=Datos Incorrectos');
            } else {
                header('Location: ../../index.php?error=Datos Incorrectos');
            }

        }
    }
}

cerrar($conexion);

?>