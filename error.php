<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Olvidaste Contraseña</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/pro.css" rel="stylesheet">


    <!-- Custom styles -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>


<script language="javascript" type="text/javascript">
function enviar(pagina){
document.nform.action = pagina;
document.nform.submit();}
</script>

</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div>
            <p class="dise">
               Dispensario María Auxiliadora
                </p>
            </div>
            <div class="fadeIn first">
            <h3> Credenciales Incorrectas </h3>
                        </div>  

            <form name="nform" action="login.php" method="post">
                <p> Direccion de Correo Electronico</p>
                <input type="email" id="correo_e" class="fadeIn third" name="correo_e" placeholder="Correo Electrónico" requiered>
                <input type="button" class="fadeIn fourth" value="Enviar" onClick="enviar('/administracion.php')">
            </form>
             
            <div id="formFooter">
                <a class="underlineHover" href="./login.php">Entrar</a>
                          
            </div>

        </div>
    </div>

</body>

</html>