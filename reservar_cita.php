<?php
$pep = '<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-calendar-plus"></i>
              Reservar cita</div><br>
            <div class="container">
            <form> <div class="form-group">
   <div class="form-row">
     <div class="col-md-6">
       <div class="form-label-group">
         <input type="text" id="cedula"  name="cedula"class="form-control" placeholder="Cédula" required="required" autofocus="autofocus">
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
     <label for="Medico"><p>Horario</p></label>
     <option value="1">Médico General</option>
     <option value="2">Odontólogo</option>
     <option value="3">Fisioterapeuta</option>             
     </select>
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
         <option value="1">08:00am - 08:30am</option>
         <option value="2">08:30am - 09:00am</option>
         <option value="3">09:00am - 09:30am</option>
         <option value="4">09:30am - 10:00am</option>
         <option value="5">10:00am - 10:30am</option>
         <option value="6">10:30am - 11:00am</option>
         <option value="7">11:00am - 11:30am</option>
         <option value="8">11:30am - 12:00pm</option>
         <option value="9">02:00pm - 02:30pm</option>
         <option value="10">02:30pm - 03:00pm</option>
         <option value="11">03:00pm - 03:30pm</option>
         <option value="12">03:30pm - 04:00pm</option>                    
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
echo $pep;
?>