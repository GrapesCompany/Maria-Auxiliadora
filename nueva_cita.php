<?php
$pep = '<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-calendar-plus"></i>
              Registro de una Nueva Cita Médica</div><br>
            <div class="container">
            <form> <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="date" id="fecha" class="form-control" placeholder="Fecha" required="required" autofocus="autofocus">
         <label for="fecha">Fecha</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="time" id="hora" class="form-control" placeholder="Hora" required="required">
         <label for="hora">Hora</label>
       </div>
     </div>
   </div>         
 </div>
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
       <textarea type="text" id="motivo" class="form-control" placeholder="Motivo" rows="3"></textarea>
       <label for="motivo"></label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
       <textarea type="text" id="ddiagnostico" class="form-control" placeholder="Detalle de diagnóstico" rows="3"></textarea>
       <label for="ddiagnostico"></label>
       </div>
     </div>
   </div>         
 </div>
 
   
 
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="tratamiento" class="form-control" placeholder="tratamiento" required="required" autofocus="autofocus">
         <label for="tratamiento">Tratamiento</label>
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="medicamento" class="form-control" placeholder="medicamento" required="required" autofocus="autofocus">
         <label for="medicamento">Medicamento</label>
       </div>
     </div>
   </div>         
 </div>

 <div class="form-group">
 <div class="form-row">
   <div class="col-md-6">
     <div class="form-label-group">
     <input type="number" id="profesion" class="form-control" placeholder="Altura" step="any" required="required" autofocus="autofocus">
     <label for="profesion">Altura (metros)</label>
     </div>
   </div>
   <div class="col-md-6">
     <div class="form-label-group">
       <input type="number" id="canton" class="form-control" step="any" placeholder="Peso" required="required">
       <label for="canton">Peso (Kilogramos)</label>
     </div>
   </div>
 </div>         
</div>
  
 <button class="btn btn-block col-md-2 btn-ttc" href="login.html">Reservar</button>
 
 </form>
 </div>
 <br>
 <div class="card-footer small text-muted">Agregando nueva Cita Médica...</div>
 </div>
 
 </div>';
echo $pep;
?>