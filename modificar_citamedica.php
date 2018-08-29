<?php
 $pep ='<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-clipboard-list"></i>
              Modificar Cita Médica</div><br>
            <div class="container">
            <form> <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="date" id="fecha_cita" class="form-control" placeholder="Fecha" required="required" disabled autofocus="autofocus">
         <label for="fecha_cita">Fecha</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="hora_cita" class="form-control" placeholder="Hora" disabled required="required">
         <label for="hora_cita">Hora</label>
       </div>
     </div>
   </div>         
 </div>
 <div class="form-group">
   <div class="form-row">
   <div class="col-md-6">
   <div class="form-row">
   <div class="col-md-6">
   <div class="form-label-group">  
     <input type="number" id="peso" class="form-control" placeholder="Peso" step="any" disabled required="required" size="40">
     <label for="peso">Peso</label>
   </div>
 </div> 
 <div class="col-md-6">
 <div class="form-label-group">   
 <i> Kg (Kilogramos) </i>
 </div>
</div>

<div class="form-group">
<div class="form-row">
<div class="col-md-6"> <br><br> 
</div></div></div>

 <div class="col-md-6">
 <div class="form-label-group">
   <input type="number" id="altura" class="form-control" placeholder="Altura" step="any" disabled required="required">
   <label for="altura">Altura</label>
 </div>
</div> 
<div class="col-md-6">
 <div class="form-label-group">   
  <i> m (metros) </i>
 </div>
</div> 

<div class="form-group">
<div class="form-row">
<div class="col-md-6"> <br><br> 
</div></div></div>

<div class="col-md-6">
<div class="form-label-group">  
  <input type="number" id="presion" class="form-control" placeholder="Presión" step="any" disabled required="required" size="40">
  <label for="presion">Presión</label>
</div>
</div> 
<div class="col-md-6">
<div class="form-label-group">   
<i> mmHg (Milímetro de mercurio) </i>
</div>
</div>
     
   </div>
   </div>
     <div class="col-md-6">
       <div class="form-label-group">
       <textarea type="text" id="motivo_cita" class="form-control" disabled placeholder="Motivo" rows="7"></textarea>
       <label for="motivo_cita"></label>
       </div>
     </div>
  
   </div>         
 </div>

 <button class="btn col-md-2 btn-ttc inline-block" href="#" onclick="habilitarcamposcmedica()">Modificar</button>
 <button class="btn col-md-2 btn-ttc inline-block" href="#">Guardar</button>
 
 </form>
 </div>
 <br>
 <div class="card-footer small text-muted">Actualizando datos de la cita médica...</div>
 </div>
 
 </div>';
echo $pep;
?>