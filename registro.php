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

    <title>Registro</title>

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
              <h3> Regístrate </h3>
            </div>
         
            <form name="nform" action="login.php" method="post">
            
            <div class="container">
            <div class="row">
            <div class="col-sm-12">
            <input type="text" id="cedula" class="fadeIn second" name="cedula" placeholder="Cédula">
            </div>
            </div>
            
            <div class="row">
            <div class="col-sm-6 quitarpad2">
            <input type="text" id="nombre" class="fadeIn second" name="nombre" placeholder="Nombre">
            </div>
            <div class="col-sm-6 quitarpad">
            <input type="text" id="apellido" class="fadeIn second" name="apellido" placeholder="Apellido">
            </div> 

             <div class="col-sm-6 quitarpad2">
            <p class="aligcen fadeIn second">Fecha de Nacimiento</p>
            </div>
            <div class="col-sm-6 quitarpad">
            <input type="date" id="fec_nac" class="fadeIn second" name="fec_nac">
            </div>

            </div>

             <div class="row">
              
             <div class="col-sm-12">    
             <input type="email" id="correo_e" class="fadeIn second" name="correo_e" placeholder="Correo Electrónico" required>
             
                
             
            </div>
            </div>

             <div class="row">
            <div class="col-sm-6 quitarpad2">            
            <select name="especialidad" class="fadeIn second selections">
            <option value="1">Médico General</option>
            <option value="2">Fisioterapeuta</option>
            <option value="3">Odontólogo</option>
            </select>
        
            </div>
            <div class="col-sm-6 quitarpad">
            <input type="text" id="telefono" class="fadeIn second" name="telefono" placeholder="Teléfono">
            </div> 
            </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 quitarpad2">
            <input type="text" id="usuario" class="fadeIn third" name="usuario" placeholder="Usuario">            </div>
            <div class="col-sm-6 quitarpad">
            <input type="password" id="contrasenia" class="fadeIn third" name="contrasenia" placeholder="Contraseña">            </div> 
            
            </div>
           
             
            <input type="button" class="fadeIn fourth" value="Registrar" onClick="enviar('/login.php')">

</div>
             
             
                
            </form>
      
           <!--  <div id="formFooter">
                <a class="underlineHover" href="#">¿Olvidaste la contraseña?</a>
            </div>
            

             -->

        </div>
    </div>

</body>

</html>