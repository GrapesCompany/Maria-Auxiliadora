<?php
 $pep ='<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-address-book"></i>
              Registro de un Nuevo Médico</div><br>
            <div class="container">
            <form  > <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text"  name="cedula" id="cedula" onkeyup="this.value=soloNumeros(this.value)" minlength="10" maxlength="10" class="form-control" placeholder="Cédula" required="required" autofocus="autofocus">
         <label for="cedula">Cédula</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" name="nombre" id="nombre" onkeyup="this.value=soloLetras(this.value)" class="form-control" placeholder="Nombre" required="required">
         <label for="nombre">Nombre</label>
       </div>
     </div>
   </div>         
 </div>
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" name="apellido" id="apellido" onkeyup="this.value=soloLetras(this.value)" class="form-control" placeholder="Apellido" required="required" autofocus="autofocus">
         <label for="apellido">Apellido</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="date" id="fech_nac" name="fech_nac"  class="form-control" placeholder="Fecha de Nacimiento" required="required">
         <label for="fech_nac">Fecha de Nacimiento</label>
       </div>
     </div>
   </div>         
 </div>

 <div class="form-group">
 <div class="form-row">
   <div class="col-md-6">
     <div class="form-label-group">
       <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Dirección" required="required" autofocus="autofocus">
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
         <input type="text" id="telefono" onkeyup="this.value=soloNumeros(this.value)" maxlength="10" class="form-control" placeholder="Teléfono" required="required">
         <label for="telefono">Teléfono</label>
       </div>
   </div>   
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="especialidad" onkeyup="this.value=soloLetras(this.value)" class="form-control" placeholder="Especialidad" required="required" autofocus="autofocus">
         <label for="especialidad">Especialidad</label>
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
</form>
<button class="btn btn-block col-md-2 btn-ttc" onclick="guardarDoctor()" href="login.html">Registrar</button>
</div>
<br>
<div class="card-footer small text-muted">Agregando médico...</div>
</div>

</div>';
echo $pep;

//<input type="submit" class="btn btn-block col-md-2 btn-ttc" onclick="guardarDoctor()" value="Registrar">
?>