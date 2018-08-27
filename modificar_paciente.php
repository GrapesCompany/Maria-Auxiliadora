<?php
$pep = '<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-address-book"></i>
              Modificar Datos de un Paciente</div><br>
            <div class="container">
            <form> <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="cedula" name="cedula" class="form-control" placeholder="Cédula" required="required" autofocus="autofocus">
         <label for="cedula">Cédula</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required="required">
         <label for="nombre">Nombre</label>
       </div>
     </div>
   </div>         
 </div>
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" required="required" autofocus="autofocus">
         <label for="apellido">Apellido</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="date" id="fech_nac"  name="fech_nac" class="form-control" placeholder="Fecha de Nacimiento" required="required">
         <label for="fech_nac">Fecha de Nacimiento</label>
       </div>
     </div>
   </div>         
 </div>
 
   
 
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="telefono"  name="telefono" class="form-control" placeholder="Telefono" required="required" autofocus="autofocus">
         <label for="telefono">Teléfono</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="TEXT" id="direccion"  name="direccion" class="form-control" required="required">
         <label for="direccion">Direccion</label>
       </div>
     </div>
   </div>         
 </div>

 <div class="form-group">
 <div class="form-row">
   <div class="col-md-6">
     <div class="form-label-group">
       <input type="text" id="provincia" name="provincia" class="form-control" placeholder="Provincia" required="required" autofocus="autofocus">
       <label for="provincia">Provincia</label>
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-label-group">
       <input type="text" id="canton" name="canton" class="form-control" placeholder="Cantón" required="required">
       <label for="canton">Cantón</label>
     </div>
   </div>
 </div>         
</div>

<div class="form-group">
<div class="form-row">
  <div class="col-md-6">
    <div class="form-label-group">
      <select id="ecivil" name="ecivil" class="form-control" placeholder="Estado Civil" required="required" autofocus="autofocus">
      <label for="ecivil">Estado Civil</label>
      <option value="soltero">Soltero</option>
      <option value="casado">Casado</option>
      <option value="union_libre">Unión libre</option>
      <option value="divorciado">Divorciado</option>
      <option value="viudo">Viudo</option>
      </select>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-label-group">
      <select id="sexo"  name="sexo" class="form-control" placeholder="Sexo" required="required">
      <label for="sexo">Sexo</label>
      <option value="femenino">Femenino</option>
      <option value="masculino">Masculino</option>
      </select>
    </div>
  </div>
</div>         
</div>
 
<div class="form-group">
<div class="form-row">
  <div class="col-md-6">
    <div class="form-label-group">
      <input type="text" id="profesion"  name="profesion" class="form-control" placeholder="Profesión" required="required" autofocus="autofocus">
      <label for="profesion">Profesión</label>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-label-group">
      <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="Contraseña" required="required">
      <label for="contrasena">Contraseña</label>
    </div>
  </div>
  
  <div class="col-md-12">
<div class="form-label-group">
  <input type="mail" id="correo" name="correo" class="form-control" placeholder="Correo" required="required">
  <label for="correo">Correo</label>
</div>
</div>


</div>  
       
</div>



<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-clipboard-list"></i>
              Historia Clinica</div><br>
            <div class="container">
            <form> <div class="form-group">
   <div class="form-row">     
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="responsable" name="responsable" class="form-control" placeholder="Responsable" required="required" autofocus="autofocus">
         <label for="responsable">Responsable</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">        
         <textarea type="text" id="observaciones" name="observaciones" class="form-control" placeholder="Observaciones" rows="3"></textarea>
       <label for="observaciones"></label>
       </div>
     </div>
   </div> 
   </div>
   </div>        
 </div>


  
 
 </form>
 <button  onclick="guardarHistoriaClinicaPasiente()" class="btn btn-block col-md-2 btn-ttc" href="login.html">Registrar</button>
 
 </div>
 <br>
 <div class="card-footer small text-muted">Agregando paciente...</div>
 </div>
 
 </div>';
echo $pep;
?>