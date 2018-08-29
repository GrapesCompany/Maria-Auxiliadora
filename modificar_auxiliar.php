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
         <input type="text" id="cedulaa" onkeyup="this.value=soloNumeros(this.value)" minlength="10" maxlength="10" class="form-control" placeholder="Cédula" required="required" disabled autofocus="autofocus" value="'; echo $cedulaAuxiliar; echo'">
         <label for="cedulaa">Cédula</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="nombrea" onkeyup="this.value=soloLetras(this.value)"  class="form-control" placeholder="Nombre" disabled required="required" value="'; echo $nombreAuxiliar; echo'">
         <label for="nombrea">Nombre</label>
       </div>
     </div>
   </div>         
 </div>
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="apellidoa" onkeyup="this.value=soloLetras(this.value)"  class="form-control" placeholder="Apellido" disabled required="required" autofocus="autofocus" value="'; echo $apellidoAuxiliar; echo'">
         <label for="apellidoa">Apellido</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="date" id="fec_naca" class="form-control" placeholder="Fecha de Nacimiento" disabled required="required" value="'; echo $fechaAuxiliar; echo'">
         <label for="fec_naca">Fecha de Nacimiento</label>
       </div>
     </div>
   </div>         
 </div>
 
 
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group"> 
       <input type="text" id="direcciona" class="form-control" placeholder="Dirección" disabled required="required" value="'; echo $direccionAuxiliar; echo'">
       <label for="direcciona">Dirección</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
       <input type="text" id="telefonoa" onkeyup="this.value=soloNumeros(this.value)" maxlength="10"  class="form-control" placeholder="Telefono" disabled required="required" autofocus="autofocus" value="'; echo $telefonoAuxiliar; echo'">
       <label for="telefonoa">Teléfono</label>
       </div>
     </div>
   
   </div>         
 </div>
 
 <div class="form-group">
   <div class="form-row">
   <div class="col-md-6">
       <div class="form-label-group">
         <input type="email" id="correoea" class="form-control" placeholder="Correo electrónico" disabled required="required" value="'; echo $correoAuxiliar; echo'">
         <label for="correoea">Correo electrónico</label>
       </div>
     </div>
     
   </div>
 </div>
  
 <button class="btn col-md-2 btn-ttc inline-block" onclick="habilitarcampos()" href="#">Modificar</button>
 <button class="btn col-md-2 btn-ttc inline-block" onclick="modificarAuxiliar()" href="login.html">Guardar</button>
 
 </form>
 </div>
 <br>
 <div class="card-footer small text-muted">Modificando auxiliar...</div>
 </div>
 
 </div>';

?>