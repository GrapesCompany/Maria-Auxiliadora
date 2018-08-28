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
         <input type="text" id="cedulaa" class="form-control" placeholder="Cédula" required="required" disabled autofocus="autofocus">
         <label for="cedulaa">Cédula</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="nombrea" class="form-control" placeholder="Nombre" disabled required="required">
         <label for="nombrea">Nombre</label>
       </div>
     </div>
   </div>         
 </div>
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="apellidoa" class="form-control" placeholder="Apellido" disabled required="required" autofocus="autofocus">
         <label for="apellidoa">Apellido</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="date" id="fec_naca" class="form-control" placeholder="Fecha de Nacimiento" disabled required="required">
         <label for="fec_naca">Fecha de Nacimiento</label>
       </div>
     </div>
   </div>         
 </div>
 
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
       <input type="text" id="direcciona" class="form-control" placeholder="Dirección" disabled required="required">
       <label for="direcciona">Dirección</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
       <input type="text" id="telefonoa" class="form-control" placeholder="Telefono" disabled required="required" autofocus="autofocus">
       <label for="telefonoa">Teléfono</label>
       </div>
     </div>
   </div>         
 </div>
 
 <div class="form-group">
   <div class="form-row">
   <div class="col-md-6">
       <div class="form-label-group">
         <input type="email" id="correoea" class="form-control" placeholder="Correo electrónico" disabled required="required">
         <label for="correoea">Correo electrónico</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="password" id="contrasenaa" class="form-control" placeholder="Contraseña" disabled required="required">
         <label for="contrasenaa">Contraseña</label>
       </div>
     </div>
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