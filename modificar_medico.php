<?php
 $pep ='<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-address-book"></i>
              Modificar Datos de un Médico</div><br>
            <div class="container">
            <form  > <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text"  name="cedula" id="cedula" class="form-control" disabled placeholder="Cédula" required="required" autofocus="autofocus">
         <label for="cedula">Cédula</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" name="nombre" id="nombre" class="form-control" disabled placeholder="Nombre" required="required">
         <label for="nombre">Nombre</label>
       </div>
     </div>
   </div>         
 </div>
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" name="apellido" id="apellido" class="form-control" disabled placeholder="Apellido" required="required" autofocus="autofocus">
         <label for="apellido">Apellido</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="date" id="fech_nac" name="fech_nac"  class="form-control" disabled placeholder="Fecha de Nacimiento" required="required">
         <label for="fech_nac">Fecha de Nacimiento</label>
       </div>
     </div>
   </div>         
 </div>

 <div class="form-group">
 <div class="form-row">
   <div class="col-md-6">
     <div class="form-label-group">
       <input type="text" id="direccion" name="direccion" class="form-control" disabled placeholder="Dirección" required="required" autofocus="autofocus">
       <label for="direccion">Dirección</label>
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-label-group">
       <input type="email" id="correo" name="correo" class="form-control" disabled placeholder="Correo electrónico" required="required">
       <label for="correo">Correo electrónico</label>
     </div>
   </div>
 </div>         
</div>

 <div class="form-group">
   <div class="form-row">
   <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="telefono" class="form-control" placeholder="Teléfono" disabled required="required">
         <label for="telefono">Teléfono</label>
       </div>
   </div>   
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="especialidad" class="form-control" placeholder="Especialidad" disabled required="required" autofocus="autofocus">
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
<button class="btn col-md-2 btn-ttc inline-block" href="login.html">Guardar</button>
</div>
<br>
<div class="card-footer small text-muted">Guardando cambios...</div>
</div>

</div>';
echo $pep;
?>