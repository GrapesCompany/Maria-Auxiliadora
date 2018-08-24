<?php
$pep = '<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-calendar-plus"></i>
              Buscar cita médica pendiente</div><br>
            <div class="container">
            <form> <div class="form-group">
   <div class="form-row">
     <div class="col-md-12">
     <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
     <div class="input-group">
       <input type="text" class="form-control" size="40" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon1">
       <div class="input-group-append">
         <button class="btn btn-primary colorsecb" title="Buscar Paciente" type="button">
           <i class="fas fa-user-md"></i>
         </button>            
       </div>
     </div>
   </form>
     </div>
      
   </div>         
 </div>
   
 <button class="btn btn-block col-md-2 btn-ttc" href="login.html">Reservar</button>
 
 </form>
 </div>
 <br>
 <div class="card-footer small text-muted">Buscando cita médica...</div>
 </div>
 
 </div>';
echo $pep;
?>