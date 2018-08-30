<?php
$pep = '<div class="container">

<div class="card mb-3">
           <div class="card-header text-center">
             <i class="fas fa-address-card"></i>
             Detalle de Historia Clínica del Paciente</div><br>
           <div class="container">
           <form> <div class="form-group">
           <h3>Datos Personales:</h3><hr>
  <div class="form-row">
  
  <div class="col-md-2">
  <div class="form-label-group">            
     <label>Cédula:</label>
  </div>
</div>
    <div class="col-md-2">
      <div class="form-label-group">            
        <input type="text" id="cedula" name="cedula" class="form-control" placeholder="1717171717" required="required" disabled autofocus="autofocus">
        <label for="nombre">1717171717</label>
      </div>
    </div>
    <div class="col-md-2">
    <div class="form-label-group">            
       <label>Nombre:</label>
    </div>
  </div>
    <div class="col-md-2">
      <div class="form-label-group">
        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" disabled required="required">
        <label for="nombre">Nombre</label>
      </div>
    </div>
    <div class="col-md-2">
    <div class="form-label-group">            
       <label>Apellido:</label>
    </div>
  </div>
    <div class="col-md-2">
    <div class="form-label-group">
    <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" disabled required="required" autofocus="autofocus">
    <label for="apellido">Apellido</label>
    </div>
  </div>
  </div>         
</div>
<div class="form-group">
  <div class="form-row">
  <div class="col-md-2">
  <div class="form-label-group">            
     <label>Fecha de Nacimiento:</label>
  </div>
</div>
    <div class="col-md-2">
      <div class="form-label-group">
      <input type="date" id="fech_nac"  name="fech_nac" class="form-control" placeholder="Fecha de Nacimiento" disabled required="required">
      <label for="fech_nac">Fecha de Nacimiento</label>
      </div>
    </div>
    <div class="col-md-2">
    <div class="form-label-group">            
       <label>Teléfono:</label>
    </div>
  </div>    
    <div class="col-md-2">
      <div class="form-label-group">
      <input type="text" id="telefono"  name="telefono" class="form-control" placeholder="Telefono" disabled required="required" autofocus="autofocus">
      <label for="telefono">Teléfono</label>
      </div>
    </div>
    <div class="col-md-2">
    <div class="form-label-group">            
       <label>Provincia:</label>
    </div>
  </div> 
    <div class="col-md-2">
    <div class="form-label-group">
    <input type="text" id="provincia" name="provincia" class="form-control" placeholder="Provincia" disabled required="required" autofocus="autofocus">
    <label for="provincia">Provincia</label>
    </div>
  </div>
  </div>         
</div>

  

<div class="form-group">
  <div class="form-row">
  <div class="col-md-2">
    <div class="form-label-group">            
       <label>Cantón:</label>
    </div>
  </div> 
    <div class="col-md-2">
      <div class="form-label-group">
      <input type="text" id="canton" name="canton" class="form-control" placeholder="Cantón" disabled required="required">
      <label for="canton">Cantón</label>
      </div>
    </div>
    <div class="col-md-2">
    <div class="form-label-group">            
       <label>Dirección:</label>
    </div>
  </div> 
    <div class="col-md-2">
      <div class="form-label-group">
      <input type="text" id="direccion"  name="direccion" placeholder="Dirección" class="form-control" disabled required="required">
      <label for="direccion">Dirección</label>
      </div>
    </div>
    <div class="col-md-2">
    <div class="form-label-group">            
       <label>Profesión:</label>
    </div>
  </div>
    <div class="col-md-2">
    <div class="form-label-group">
    <input type="text" id="profesion"  name="profesion" class="form-control" placeholder="Profesión" disabled required="required" autofocus="autofocus">
    <label for="profesion">Profesión</label>
    </div>
  </div>
  </div>         
</div>

<div class="form-group">
<div class="form-row">
<div class="col-md-2">
    <div class="form-label-group">            
       <label>Estado Civil:</label>
    </div>
  </div>
  <div class="col-md-2">
  <div class="form-label-group">
  <select id="ecivil" name="ecivil" class="form-control" placeholder="Estado Civil" required="required" disabled autofocus="autofocus">
  <label for="ecivil">Estado Civil</label>
  <option value="soltero">Soltero</option>
  <option value="casado">Casado</option>
  <option value="union_libre">Unión libre</option>
  <option value="divorciado">Divorciado</option>
  <option value="viudo">Viudo</option>
  </select>
</div>
  </div>
  <div class="col-md-2">
    <div class="form-label-group">            
       <label>Sexo:</label>
    </div>
  </div>
  <div class="col-md-2">
  <div class="form-label-group">
  <select id="sexo"  name="sexo" class="form-control" placeholder="Sexo" disabled required="required">
  <label for="sexo">Sexo</label>
  <option value="femenino">Femenino</option>
  <option value="masculino">Masculino</option>
  </select>
</div>
  </div>
  <div class="col-md-2">
  <div class="form-label-group">            
     <label>Correo electrónico:</label>
  </div>
</div>
  <div class="col-md-2">
  <div class="form-label-group">
  <input type="mail" id="correo" name="correo" class="form-control" placeholder="Correo electrónico" disabled required="required">
  <label for="correo">Correo electrónico</label>
</div>
  </div>
</div>         
</div>

<div class="form-group">
<div class="form-row">
<div class="col-md-2">
  <div class="form-label-group">            
     <label>Contraseña:</label>
  </div>
</div>
 <div class="col-md-2">
   <div class="form-label-group">
   <input type="password" id="contrasena" name="contrasena" class="form-control" disabled placeholder="Contraseña" required="required">
   <label for="contrasena">Contraseña</label>
   </div>
 </div> 
</div>         
</div>

<br> 
<h3>Historia Clínica:</h3>
<hr>
            
           <div class="container">
           <form>
           <div class="form-group">
  <div class="form-row"> 
  <div class="col-md-2">
  <div class="form-label-group">            
     <label>Responsable:</label>
  </div>
</div>    
    <div class="col-md-4">
      <div class="form-label-group">
        <input type="text" id="responsable" name="responsable" class="form-control" placeholder="Responsable" disabled required="required" autofocus="autofocus">
        <label for="responsable">Responsable</label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-label-group">        
        <textarea type="text" id="observaciones" name="observaciones" class="form-control" placeholder="Observaciones" disabled rows="3"></textarea>
      <label for="observaciones"></label>
      </div>
    </div>
  </div> 
  </div>
  </div>        
 
<br>
<h3>Citas Médicas:</h3>
<hr>
<br>

<div class="container">
<table class="table">
   <thead>
     <tr>
       <th scope="col">#</th>
       <th scope="col">Fecha cita</th>
       <th scope="col">Detalle cita</th>
       <th scope="col">Tratamiento</th>
       <th scope="col">Medicamento</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <th scope="row">1</th>
       <td>29/08/2018</td>
       <td>Recostar</td>
       <td>Ejercicio mañanero</td>
       <td>Tomarse penicilina</td>
      </tr>
     
   </tbody>
 </table>
 </div>
</form>

<div class="text-center">
<button class="btn col-md-2 btn-ttc inline-block text-center" href="#" onclick="habilitarcamposhclinica()">Finalizar</button>
</div>

</div>
<br>
<div class="card-footer small text-muted">Actualizando historia clínica...</div>
</div>

</div>';
echo $pep;
?>