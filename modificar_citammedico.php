<?php
$pep = '<div class="container">

<div class="card mb-3">
           <div class="card-header">
             <i class="fas fa-clipboard-list"></i>
             Información de Cita Médica Pendiente</div><br>
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

<hr> 

<div class="form-group">
  <div class="form-row">
  <div class="col-md-6">
  <div class="form-row">
  <div class="col-md-3">
  <div class="form-label-group">   
  <p></p>
  <p>Tratamiento:</p>
  </div>
 </div>
  <div class="col-md-9">
  <div class="form-label-group">  
    <input type="text" id="tratamiento" class="form-control" placeholder="Especificación" step="any" required="required" size="40">
    <label for="tratamiento">Especificación</label>
  </div>
</div> 


<div class="form-group">
<div class="form-row">
<div class="col-md-6"> <br><br> 
</div></div></div>


<div class="col-md-3">
<div class="form-label-group">   
<p></p>
 <p>Medicamento:</p>
</div>
</div>
<div class="col-md-9">
<div class="form-label-group">
  <input type="text" id="medicamento" class="form-control" placeholder="Especificación" step="any" required="required">
  <label for="medicamento">Especificación</label>
</div>
</div> 


<div class="form-group">
<div class="form-row">
<div class="col-md-6"> <br><br> 
</div></div></div>

     
  </div>
  </div>
    <div class="col-md-6">
      <div class="form-label-group">
      <textarea type="text" id="diagnostico" class="form-control" placeholder="Detalle de diagnóstico" rows="5"></textarea>
      <label for="diagnostico"></label>
      </div>
    </div>
 
  </div>         
</div>


<div class="form-group">
<div class="form-row text-center">
<br> <br>
<div class="col-md-12"> <button class="btn col-md-2 btn-ttc inline-block" href="#">Finalizar</button>
</div></div></div>


</form>
</div>

<div class="card-footer small text-muted">Actualizando información...</div>
</div>

</div>';
echo $pep;
?>