<?php
session_start();
include '../conexion.php';

$conexion = conectar();
$username = $_POST['username'];
$password = $_POST['password'];
$tipoP = $_GET['tipoP'];
$cargo = $_POST['optradio'];

if ($tipoP == 'paciente' && $username != "" && $username != null && $password != "" && $password != null) {
    $existenciausuario = mysqli_query($conexion, "SELECT * FROM paciente WHERE paciente.`CEDULA_PAC`='$username' AND  paciente.`CONTRASENA_PAC`='$password' AND  paciente.`ESTADO_PAC`='0'") or die("Problemas en el select" . mysqli_error($conexion));

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
        $_SESSION['userPaciente']=$arreglo_paciente;
        echo "eres paciente";
        header('Location: ../../adminpaciente.php');
    } else {
        header('Location: ../../index.php?error=Datos Incorrectos');
    }
} else {
    if ($tipoP == 'administrador' && $cargo == 'medico' && $username != "" && $username != null && $password != "" && $password != null) {
        $existenciausuario = mysqli_query($conexion, "SELECT * FROM medico WHERE medico.`CEDULA_MED`='$username' AND  medico.`CONTRASENA_MED`='$password' AND  medico.`ESTADO_MED`='0'") or die("Problemas en el select" . mysqli_error($conexion));

        while ($f = mysqli_fetch_array($existenciausuario)) {
            $arreglo_medico[] = array('cedulaM' => $f['CEDULA_MED'],
                'nombreM' => $f['NOMBRE_MED'],
                'apellidoM' => $f['APELLIDO_MED'],
                'telefonoM' => $f['TELEFONO_MED'],
                'especialidadM' => $f['ESPECIALIDAD'],
                'contrasenaM' => $f['CONTRASENA_MED'],
                'estadoM' => $f['ESTADO_MED'],
                'fechNacM' => $f['FECHA_NAC_MED'],
                'direccionM' => $f['DIRECCION_MED'],
                'correoM' => $f['CORREO_MED']);
        }

        if ($arreglo_medico != null) {
            $_SESSION['userMedico']=$arreglo_medico;
            echo "eres medico";
            header('Location: ../../adminmedico.php');
        } else {
            header('Location: ../../index2.php?error=Datos Incorrectos');
        }

    } else {
        if ($tipoP == 'administrador' && $cargo == 'auxiliar' && $username != "" && $username != null && $password != "" && $password != null) {
            $existenciausuario = mysqli_query($conexion, "SELECT * FROM auxiliar WHERE auxiliar.`CEDULA_AUX`='$username' AND  auxiliar.`CONTRASENA_AUX`='$password' AND  auxiliar.`ESTADO_AUX`='0'") or die("Problemas en el select" . mysqli_error($conexion));

            while ($f = mysqli_fetch_array($existenciausuario)) {
                $arreglo_auxiliar[] = array('cedulaA' => $f['CEDULA_AUX'],
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
                $_SESSION['userAuxiliar']=$arreglo_auxiliar;
                echo "eres auxiliar";
                header('Location: ../../adminauxiliar.php');
            } else {
                header('Location: ../../index2.php?error=Datos Incorrectos');
            }

        } else {
            if($tipoP == 'administrador' && $cargo == 'administrador' && $username != "" && $username != null && $password != "" && $password != null){
                $existenciausuario = mysqli_query($conexion, "SELECT * FROM admin WHERE admin.`USUARIO`='$username' AND  admin.`CONTRASENA`='$password'") or die("Problemas en el select" . mysqli_error($conexion));

                while ($f = mysqli_fetch_array($existenciausuario)) {
                    $arreglo_administrador[] = array('usuarioA' => $f['USUARIO'],
                        'contrasenaA' => $f['CONTRASENA']);
                }
    
                if ($arreglo_administrador != null) {
                    $_SESSION['userAdministrador']=$arreglo_administrador;
                    echo "eres administrador";
                    header('Location: ../../admin.php');
                } else {
                    header('Location: ../../index2.php?error=Datos Incorrectos');
                }
            }else{
                if ($tipoP == 'administrador') {
                    header('Location: ../../index2.php?error=Datos Incorrectos');
                } else {
                    header('Location: ../../index.php?error=Datos Incorrectos');
                }
            }

        }
    }
}

cerrar($conexion);

?>