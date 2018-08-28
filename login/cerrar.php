<?php

session_start();

$tipo = $_GET['tipo'];

switch ($tipo) {
    case 'administrador':unset($_SESSION['userAdministrador']);
        header("Location: ../../index2.php?salir=exito");
        break;
    case 'auxiliar':unset($_SESSION['userAuxiliar']);
        header("Location: ../../index2.php?salir=exito");
        break;
    case 'medico':unset($_SESSION['userMedico']);
        header("Location: ../../index2.php?salir=exito");
        break;
    case 'paciente':unset($_SESSION['userPaciente']);
        header("Location: ../../index.php?salir=exito");
        break;
    default:unset($_SESSION['userAdministrador']);
            unset($_SESSION['userAuxiliar']);
            unset($_SESSION['userMedico']);
            unset($_SESSION['userPaciente']);
            header("Location: ../../index.php?salir=exito");
}

?>
