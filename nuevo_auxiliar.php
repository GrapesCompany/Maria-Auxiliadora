<?php

 $pep ='<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-address-book"></i>
              Registro de un Nuevo Auxiliar</div><br>
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
         <input type="date" id="fech_nac" name="fech_nac" class="form-control" placeholder="Fecha de Nacimiento" required="required">
         <label for="fech_nac">Fecha de Nacimiento</label>
       </div>
     </div>
   </div>         
 </div>
 
 <div class="form-group">
 <div class="form-row">
   <div class="col-md-6">
     <div class="form-label-group">
       <input type="text" id="direccion"  name="direccion"class="form-control" placeholder="Dirección" required="required" autofocus="autofocus">
       <label for="direccion">Dirección</label>
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-label-group">
       <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo electrónico" required="required">
       <label for="correo">Correo electrónico</label>
     </div>
   </div>
 </div>         
</div> 
 
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono" required="required" autofocus="autofocus">
         <label for="telefono">Teléfono</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Contraseña" required="required">
         <label for="inputPassword">Contraseña</label>
       </div>
     </div>
   </div>         
 </div>
 
  

 
 </form>
 <button onclick="guardarAux()" class="btn btn-block col-md-2 btn-ttc" href="login.html">Registrar</button>
 </div>
 <br>
 <div class="card-footer small text-muted">Agregando auxiliar...</div>
 </div>
 
 </div>';
echo $pep;
?>