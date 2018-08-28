<?php
 $pep ='<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-address-book"></i>
              Modificar Auxiliar</div><br>
            <div class="container">
            <form> <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="cedula" class="form-control" placeholder="Cédula" required="required" disabled autofocus="autofocus">
         <label for="cedula">Cédula</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="nombre" class="form-control" placeholder="Nombre" disabled required="required">
         <label for="nombre">Nombre</label>
       </div>
     </div>
   </div>         
 </div>
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="apellido" class="form-control" placeholder="Apellido" disabled required="required" autofocus="autofocus">
         <label for="apellido">Apellido</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="date" id="fec_nac" class="form-control" placeholder="Fecha de Nacimiento" disabled required="required">
         <label for="fec_nac">Fecha de Nacimiento</label>
       </div>
     </div>
   </div>         
 </div>
 
   <div class="form-group">
   <div class="form-label-group">
     <input type="text" id="direccion" class="form-control" placeholder="Dirección" disabled required="required">
     <label for="direccion">Dirección</label>
   </div>
 </div> 
 
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="telefono" class="form-control" placeholder="Telefono" disabled required="required" autofocus="autofocus">
         <label for="telefono">Teléfono</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="edad" class="form-control" placeholder="Edad" disabled required="required">
         <label for="edad">Edad</label>
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
echo $pep;
?>