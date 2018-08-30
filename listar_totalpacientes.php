<?php
$pep = '<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-list-ul"></i>
              Listado total de pacientes</div><br>
            <div class="container">
           
            <form> 
            <div class="form-group">
   <div class="form-row">
   <table class="table">
   <thead>
     <tr>
       <th scope="col">#</th>
       <th scope="col">First</th>
       <th scope="col">Last</th>
       <th scope="col">Handle</th>
       <th scope="col">Botton</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <th scope="row">1</th>
       <td>Mark</td>
       <td>Otto</td>
       <td>@mdo</td>
       <td><button type="button" class="btn btn-warning" onclick="showHistoriaClinica(this.value)">Ver Historia Clínica</button></td>
     </tr>
     
   </tbody>
 </table>

 </div>
   </div>         
  

 </form>
 </div>
 
 <div class="card-footer small text-muted">Buscando pacientes...</div>
 </div>
 
 </div>
 
 ';
echo $pep;
?>