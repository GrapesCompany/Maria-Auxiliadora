<?php
$pep = '<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-calendar-plus"></i>
              Buscar cita médica pendiente</div><br>
            <div class="container">
            <form> 
            <div class="form-group">
   <div class="form-row">
   <p>Ingrese fecha:</p> <br>

     <div class="col-md-6">
     <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
     <div class="input-group">
       <input type="date" class="form-control" size="40" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon1">
       <div class="input-group-append">
         <button class="btn btn-primary colorsecb" title="Buscar cita médica" onclick="showCitaMedicaPaciente(this.value)" type="button">
           <i class="fas fa-search"></i>
         </button> 
           
       </div>
     </div>
   </form>
     </div>      
 </div>
   </div>         
 
   
  
 </form>
 </div>
 <br>
 <div class="card-footer small text-muted">Buscando cita médica...</div>
 </div>
 
 </div>
 
 
 
 ';
echo $pep;
?>