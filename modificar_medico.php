<?php
session_start();
if(isset($_SESSION['userMedico'])){
  $medico=$_SESSION['userMedico'];
}else
{
  header("Location: ../index2.php");
}


$cedulaMedico=$medico[0]['cedulaM'];
$nombreMedico=$medico[0]['nombreM'];
$apellidoMedico=$medico[0]['apellidoM'];
$telefonoMedico=$medico[0]['telefonoM'];
$especialidadMedico=$medico[0]['especialidadM'];
$estadoMedico=$medico[0]['estadoM'];
$contrasenaMedico=$medico[0]['contrasenaM'];
$fechaMedico=$medico[0]['fechNacM'];
$direccionMedico=$medico[0]['direccionM'];
$correoMedico=$medico[0]['correoM'];

 echo '<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-address-book"></i>
              Modificar Datos del Médico</div><br>
            <div class="container">
            <form  > <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" disabled name="cedula" id="cedula" onkeyup="this.value=soloNumeros(this.value)" minlength="10" maxlength="10" class="form-control" disabled placeholder="Cédula" required="required" autofocus="autofocus" value="'; echo $cedulaMedico; echo'">
         <label for="cedula">Cédula</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" name="nombre" id="nombre" onkeyup="this.value=soloLetras(this.value)" class="form-control" disabled placeholder="Nombre" required="required" value="'; echo $nombreMedico; echo'">
         <label for="nombre">Nombre</label>
       </div>
     </div>
   </div>         
 </div>
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" name="apellido" id="apellido" onkeyup="this.value=soloLetras(this.value)" class="form-control" disabled placeholder="Apellido" required="required" autofocus="autofocus" value="'; echo $apellidoMedico; echo'">
         <label for="apellido">Apellido</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="date" id="fech_nac" name="fech_nac"  class="form-control" disabled placeholder="Fecha de Nacimiento" required="required" value="'; echo $fechaMedico; echo'">
         <label for="fech_nac">Fecha de Nacimiento</label>
       </div>
     </div>
   </div>         
 </div>

 <div class="form-group">
 <div class="form-row">
   <div class="col-md-6">
     <div class="form-label-group">
       <input type="text" id="direccion" name="direccion" class="form-control" disabled placeholder="Dirección" required="required" autofocus="autofocus" value="'; echo $direccionMedico; echo'">
       <label for="direccion">Dirección</label>
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-label-group">
       <input type="email" id="correo" name="correo" class="form-control" disabled placeholder="Correo electrónico" required="required" value="'; echo $correoMedico; echo'">
       <label for="correo">Correo electrónico</label>
     </div>
   </div>
 </div>         
</div>

 <div class="form-group">
   <div class="form-row">
   <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="telefono" onkeyup="this.value=soloNumeros(this.value)" maxlength="10" class="form-control" placeholder="Teléfono" disabled required="required" value="'; echo $telefonoMedico; echo'">
         <label for="telefono">Teléfono</label>
       </div>
   </div>   
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="especialidad" onkeyup="this.value=soloLetras(this.value)" class="form-control" placeholder="Especialidad" disabled required="required" autofocus="autofocus" value="'; echo $especialidadMedico; echo'">
         <label for="especialidad">Especialidad</label>
       </div>
     </div>           
 </div> 
 </div>

 <div class="form-group">
 <div class="form-row">
          
</div> 
</div>
</form>
 
<button class="btn col-md-2 btn-ttc inline-block" onclick="habilitarcamposmedico()" href="#">Modificar</button>
<button class="btn col-md-2 btn-ttc inline-block" onclick="modificarMedico()" href="login.html">Guardar</button>
</div>
<br>
<div class="card-footer small text-muted">Guardando cambios...</div>
</div>

</div>';

?>