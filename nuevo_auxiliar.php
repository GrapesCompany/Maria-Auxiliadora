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
         <input type="date" id="fec_nac" class="form-control" placeholder="Fecha de Nacimiento" required="required">
         <label for="fec_nac">Fecha de Nacimiento</label>
       </div>
     </div>
   </div>         
 </div>
 
   <div class="form-group">
   <div class="form-label-group">
     <input type="text" id="direccion" class="form-control" placeholder="Dirección" required="required">
     <label for="direccion">Dirección</label>
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
         <input type="text" id="estado" class="form-control" placeholder="Edad" required="required">
         <label for="edad">Edad</label>
       </div>
     </div>
   </div>         
 </div>
 
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="required">
         <label for="inputPassword">Contraseña</label>
       </div>
     </div>
   </div>
 </div>
  
 <button class="btn btn-block col-md-2 btn-ttc" href="login.html">Registrar</button>
 
 </form>
 </div>
 <br>
 <div class="card-footer small text-muted">Agregando auxiliar...</div>
 </div>
 
 </div>';
echo $pep;
?>