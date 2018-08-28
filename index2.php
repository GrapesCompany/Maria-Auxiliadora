 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login MA Administración</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/estilosadmin.css" rel="stylesheet">


    <!-- Custom styles -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>


<script language="javascript" type="text/javascript">
function enviar(pagina){
document.nform.action = pagina;
document.nform.submit();
}
</script>

</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div>
            <p class="dise">Administración</p>
                <p class="disead">Dispensario Maria Auxiliadora</p>
            </div>
            <div class="fadeIn first">
                <img src="https://s15.postimg.cc/3n4ejdm0r/portada.gif" id="icon" alt="Maria Auxiliadora" />
            </div>  

            <form name="nform" action="./login/verificar.php/?tipoP=administrador" method="post">
                <input type="text" id="login" class="fadeIn second" name="username" placeholder="Usuario" require>
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña" require>  
                <div class="radio">
                <label class="checkbox-inline fadeIn third"><input type="radio" name="optradio"  id="optradio" value="administrador" checked>Administrador</label>
                &nbsp;&nbsp;&nbsp;
                <label class="checkbox-inline fadeIn third"><input type="radio" name="optradio" id="optradio" value="medico">Médico</label>
                &nbsp;&nbsp;&nbsp;           
                <label class="checkbox-inline fadeIn third"><input type="radio" name="optradio" id="optradio" value="auxiliar">Auxiliar</label>
                </div>
                <input type="submit" class="fadeIn fourth colorbutton" value="Entrar">
            </form>
           
             
            <div id="formFooter">
            <?php
                if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                     Datos no válidos
                </div>
                 <?php } 
                 if(isset($_GET['salir'])){?>
                <div class="alert alert-info" role="alert">
                     Gracias por usar nuestros servicios
                </div>
                 <?php }
                 if(isset($_GET['denegado'])){?>
                    <div class="alert alert-danger" role="alert">
                         Acceso denegado
                    </div> <?php } ?>
                <a class="underlineHover" href="./index.php">Entrar como usuario</a>
                          
            </div>

        </div>
    </div>

</body>

</html>