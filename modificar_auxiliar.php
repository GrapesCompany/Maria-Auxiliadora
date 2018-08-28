<?php
session_start();
if(isset($_SESSION['userAuxiliar'])){
  $auxiliar=$_SESSION['userAuxiliar'];
}else
{
  header("Location: ../index2.php");
}



$cedulaAuxiliar=$auxiliar[0]['cedulaA'];
$nombreAuxiliar=$auxiliar[0]['nombreA'];
$apellidoAuxiliar=$auxiliar[0]['apellidoA'];
$contrasenaAuxiliar=$auxiliar[0]['contrasenaA'];
$direccionAuxiliar=$auxiliar[0]['direccionA'];
$telefonoAuxiliar=$auxiliar[0]['telefonoA'];
$fechaAuxiliar=$auxiliar[0]['fechaNacA'];
$correoAuxiliar=$auxiliar[0]['correoA'];


echo '<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-address-book"></i>
              Modificar Auxiliar</div><br>
            <div class="container">
            <form> <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="cedula" class="form-control" placeholder="Cédula" required="required" disabled autofocus="autofocus" value="'; echo $cedulaAuxiliar; echo'">
         <label for="cedula">Cédula</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="nombre" class="form-control" placeholder="Nombre" disabled required="required" value="'; echo $nombreAuxiliar; echo'">
         <label for="nombre">Nombre</label>
       </div>
     </div>
   </div>         
 </div>
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="apellido" class="form-control" placeholder="Apellido" disabled required="required" autofocus="autofocus" value="'; echo $apellidoAuxiliar; echo'">
         <label for="apellido">Apellido</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="date" id="fec_nac" class="form-control" placeholder="Fecha de Nacimiento" disabled required="required" value="'; echo $fechaAuxiliar; echo'">
         <label for="fec_nac">Fecha de Nacimiento</label>
       </div>
     </div>
   </div>         
 </div>
 
   <div class="form-group">
   <div class="form-label-group">
     <input type="text" id="direccion" class="form-control" placeholder="Dirección" disabled required="required" value="'; echo $direccionAuxiliar; echo'">
     <label for="direccion">Dirección</label>
   </div>
 </div> 
 
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="telefono" class="form-control" placeholder="Telefono" disabled required="required" autofocus="autofocus" value="'; echo $telefonoAuxiliar; echo'">
         <label for="telefono">Teléfono</label>
       </div>
     </div>
   
   </div>         
 </div>
 
 <div class="form-group">
   <div class="form-row">
   
   </div>
 </div>
  
 <button class="btn col-md-2 btn-ttc inline-block" onclick="habilitarcampos()" href="#">Modificar</button>
 <button class="btn col-md-2 btn-ttc inline-block" href="login.html">Guardar</button>
 
 </form>
 </div>
 <br>
 <div class="card-footer small text-muted">Modificando auxiliar...</div>
 </div>
 
 </div>';

?>