<?php
 $pep ='<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-address-book"></i>
              Registro de un Nuevo Paciente</div><br>
            <div class="container">
            <form> <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="cedula" class="form-control" placeholder="Cédula" required="required" autofocus="autofocus">
         <label for="cedula">Cédula</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="nombre" class="form-control" placeholder="Nombre" required="required">
         <label for="nombre">Nombre</label>
       </div>
     </div>
   </div>         
 </div>
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="apellido" class="form-control" placeholder="Apellido" required="required" autofocus="autofocus">
         <label for="apellido">Apellido</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="date" id="fec_nac" class="form-control" placeholder="Fecha de Nacimiento" required="required">
         <label for="fec_nac">Fecha de Nacimiento</label>
       </div>
     </div>
   </div>         
 </div>
 
   
 
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="telefono" class="form-control" placeholder="Telefono" required="required" autofocus="autofocus">
         <label for="telefono">Teléfono</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="edad" class="form-control" placeholder="Edad" required="required">
         <label for="edad">Edad</label>
       </div>
     </div>
   </div>         
 </div>

 <div class="form-group">
 <div class="form-row">
   <div class="col-md-6">
     <div class="form-label-group">
       <input type="text" id="provincia" class="form-control" placeholder="Provincia" required="required" autofocus="autofocus">
       <label for="provincia">Provincia</label>
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-label-group">
       <input type="text" id="canton" class="form-control" placeholder="Cantón" required="required">
       <label for="canton">Cantón</label>
     </div>
   </div>
 </div>         
</div>

<div class="form-group">
<div class="form-row">
  <div class="col-md-6">
    <div class="form-label-group">
      <input type="text" id="ecivil" class="form-control" placeholder="Estado Civil" required="required" autofocus="autofocus">
      <label for="ecivil">Estado Civil</label>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-label-group">
      <input type="text" id="sexo" class="form-control" placeholder="Sexo" required="required">
      <label for="sexo">Sexo</label>
    </div>
  </div>
</div>         
</div>
 
<div class="form-group">
<div class="form-row">
  <div class="col-md-6">
    <div class="form-label-group">
      <input type="text" id="profesion" class="form-control" placeholder="Profesión" required="required" autofocus="autofocus">
      <label for="profesion">Profesión</label>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-label-group">
      <input type="password" id="contrasena" class="form-control" placeholder="Contraseña" required="required">
      <label for="contrasena">Contraseña</label>
    </div>
  </div>
</div>         
</div>
  
 <button class="btn btn-block col-md-2 btn-ttc" href="login.html">Registrar</button>
 
 </form>
 </div>
 <br>
 <div class="card-footer small text-muted">Agregando paciente...</div>
 </div>
 
 </div>';
echo $pep;
?>