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

    <title>Login Maria Auxiliadora</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/estilos.css" rel="stylesheet">


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
                <img src="https://s15.postimg.cc/3n4ejdm0r/portada.gif" id="icon" alt="User Icon" />
            </div>  

            <form name="nform" action="login.php" method="post">
                <input type="text" id="login" class="fadeIn second" name="username" placeholder="Usuario">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
                <input type="button" class="fadeIn fourth" value="Entrar" onClick="enviar('http://localhost/Maria-Auxiliadora/index2.php')">
            </form>
             
            <div id="formFooter">
                <a class="underlineHover" href="./error.php">¿Olvidaste la contraseña?</a>
                        
            </div>

        </div>
    </div>

</body>

</html>