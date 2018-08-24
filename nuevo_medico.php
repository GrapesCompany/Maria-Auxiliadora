<?php
 $pep ='<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-address-book"></i>
              Registro de un Nuevo Médico</div><br>
            <div class="container">
            <form  action="php/ingresarMedico.php" method="POST"> <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text"  name="cedula" class="form-control" placeholder="Cédula" required="required" autofocus="autofocus">
         <label for="cedula">Cédula</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" name="nombre" class="form-control" placeholder="Nombre" required="required">
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
         <input type="text" id="telefono" class="form-control" placeholder="Teléfono" required="required">
         <label for="telefono">Teléfono</label>
       </div>
     </div>
   </div>         
 </div>
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="especialidad" class="form-control" placeholder="Especialidad" required="required" autofocus="autofocus">
         <label for="especialidad">Especialidad</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="estado" class="form-control" placeholder="Estado" required="required">
         <label for="estado">Estado</label>
       </div>
     </div>
   </div>         
 </div>
<!--  <div class="form-group">
   <div class="form-label-group">
     <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required">
     <label for="inputEmail">Email address</label>
   </div>
 </div> -->
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
<div class="card-footer small text-muted">Agregando médico...</div>
</div>

</div>';
echo $pep;
?>