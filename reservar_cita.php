<?php

include 'conexion.php';
$conexion=conectar();
$sql = "SELECT * FROM medico";
  $result = mysqli_query ($conexion,$sql);
 

echo '<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-calendar-plus"></i>
              Reservar cita</div><br>
            <div class="container">
            <form> <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="cedula"  name="cedula" class="form-control" placeholder="Cédula" required="required" autofocus="autofocus">
         <label for="cedula">Cédula</label>
       </div>
     </div> 
     <div class="col-md-6">
     <div class="form-label-group">
       <input type="date" id="fech_consul" name="fech_consul"  class="form-control" placeholder="Fecha de Consulta" required="required">
       <label for="fech_consul">Fecha de Consulta</label>
     </div>
   </div>
 </div>
 </div>

 
 <div class="form-group">
   <div class="form-row">

   <div class="col-md-6">   
   <div class="form-row">

   <div class="col-md-3 text-center">
   <div class="form-label-group">
   Médico:
   </div>
   </div>
   <div class="col-md-5">
     <div class="form-label-group">        
     <select type="text" id="medico" name="medico" class="form-control" placeholder="Medico" required="required" autofocus="autofocus">
     <label for="medico"><p>Horario</p></label>';

     while ($medico= mysqli_fetch_row($result)){
      //echo $medico[1];
     echo '<option value="'.$medico[0].'">'.$medico[0].'</option>'; 
    
     }      cerrar($conexion);          
     echo '</select>
     </div>
     </div>
   
     <div class="col-md-4"><div class="form-label-group"></div></div>

     </div>
       </div>


       <div class="col-md-6">   


       <div class="form-row">
    
       <div class="col-md-3 text-center">
       <div class="form-label-group">
       Horario:
       </div>
       </div>
    
       <div class="col-md-5">
         <div class="form-label-group">        
         <select type="text" id="horario_med" name="horario_med" class="form-control" placeholder="Horario Medico" required="required" autofocus="autofocus">
         <label for="horario_med"><p>Horario Medico</p></label>
         <option value="08:00">08:00</option>
         <option value="08:30">08:30</option>
         <option value=09:00">09:00</option>
         <option value="09:30">09:30</option>
         <option value="10:00">10:00</option>
         <option value="10:30">10:30</option>
         <option value="11:00">11:00</option>
         <option value="11:30">11:30</option>
         <option value="12:00">12:00</option>
         <option value="14:00">14:00<</option>
         <option value="14:30">14:30</option>
         <option value="15:00">15:00</option>  
         <option value="15:30">15:30</option>  
         <option value="16:00">16:00</option>                  
         </select>
         </div>
         </div>
    
         <div class="col-md-4"><div class="form-label-group"></div></div>
    
         </div>
           </div>

     </div>
   </div>         

 
 </form>
 <button onclick="reservarCitaPorMedico()" class="btn btn-block col-md-2 btn-ttc" href="#">Reservar</button>
 </div>
 <br>
 <div class="card-footer small text-muted">Reservando Cita Médica...</div>
 </div>
 
 </div>';

?>