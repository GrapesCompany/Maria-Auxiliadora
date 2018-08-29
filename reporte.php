<?php
 $pep =' 
 <div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-notes-medical"></i>
              Reporte de las atenciones médicas</div><br>
            <div class="container">
  <form> <div class="form-group">
   <div class="form-row">
   <div class="col-md-4">
   <div class="form-label-group">
   <label for="medico">Médico:</label> <br><br>
   <select id="medico" name="medico" class="form-control" placeholder="Médico" required="required" autofocus="autofocus">
   <option value="1">Juanito</option>
   <option value="2">Pepito</option>
   <option value="3">Jhonatan</option>   
   </select>
 </div>
   </div>
   <div class="col-md-4">
   <div class="form-label-group">
   <label for="mes">Mes:</label> <br><br>
   <select id="mes" name="mes" class="form-control" placeholder="Mes" required="required" autofocus="autofocus">
   <option value="1">Enero</option>
   <option value="2">Febrero</option>
   <option value="3">Marzo</option>  
   <option value="4">Abril</option>  
   <option value="5">Mayo</option>  
   <option value="6">Junio</option>  
   <option value="7">Julio</option>   
   <option value="8">Agosto</option>  
   <option value="9">Septiembre</option>  
   <option value="10">Octubre</option>  
   <option value="11">Noviembre</option>  
   <option value="12">Diciembre</option>  
   </select>
 </div>
   </div>
   <div class="col-md-4"><p></p>
   <label>Año</label>:
   <div class="form-label-group altmes">   
   <input type="text" id="anio" name="anio"  class="form-control" placeholder="Año" required="required">
   <label for="anio" class="altmes">Año</label>
 </div>
   </div>
   
   </form>
    
    
   <button class="btn btn-block col-md-2 btn-ttc" href="#">Buscar</button>
   </div>
   <br>
   
   </div>
   
   </div>';
echo $pep;
?>