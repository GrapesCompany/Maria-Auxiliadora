<?php
session_start();
include 'conexion.php';
$strFecha = $_GET['q'];
$conexion = conectar();
$medico=$_SESSION['userMedico'];

$cedMed = $medico[0]['cedulaM'];

$PendientesDoctor = mysqli_query($conexion,"SELECT * FROM	cita c
                                            INNER JOIN medico m ON c.CEDULA_MED = m.CEDULA_MED
                                            INNER JOIN paciente p ON c.CEDULA_PAC = P.CEDULA_PAC
                                            WHERE c.ESTADO_CITA = 0 AND c.CEDULA_MED = '$cedMed' AND c.FECHA_CITA = '$strFecha'")
                                                      or die("Problemas en el select" . mysqli_error($conexion));

$PendientesDoctor1 = mysqli_query($conexion,"SELECT * FROM	cita c
                                            INNER JOIN medico m ON c.CEDULA_MED = m.CEDULA_MED
                                            INNER JOIN paciente p ON c.CEDULA_PAC = P.CEDULA_PAC
                                            WHERE c.ESTADO_CITA = 0 AND c.CEDULA_MED = '$cedMed' AND c.FECHA_CITA = '$strFecha'")
                                                      or die("Problemas en el select" . mysqli_error($conexion));

echo '<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-list-ul"></i>
              Citas Medicas Pendientes en la fecha '.$strFecha.'</div><br>
            <div class="container">
           
            <form> 
            <div class="form-group">
   <div class="form-row">
   <table class="table">
   <thead>
     <tr>
       <th scope="col">#</th>
       <th scope="col">Identificador de la Cita</th>
       <th scope="col">Número de HC</th>
       <th scope="col">Hora de la cita</th>
       <th scope="col">Cedula del Paciente</th>
       <th scope="col">Nombres del Paciente</th>
	<th scope="col">Opción</th>
     </tr>
   </thead>
   <tbody>';

   $c = 1;
   while ($row = (mysqli_fetch_array($PendientesDoctor))) {
    echo '
    <tr>
    <th scope="row">'.$c.'</th>
    <td>'.$row[0].'</td>
    <td>'.$row[3].'</td>
    <td>'.$row[4].'</td>
    <td>'.$row[2].'</td>
    <td>'.$row[25].'&nbsp;'.$row[26].'</td>
    <td><button type="button" class="btn btn-warning" value='.$row[0].' onclick="showModificarCMCompleta(this.value)">Ver más...</button></td>
  </tr>';
  $c++;
 }
echo '</tbody>
</table>

 </div>
   </div>         
  

   </form>
   </div>
   <br>';
  
   if(mysqli_fetch_array($PendientesDoctor1)){
   }
   else{
    echo '<div class="card-footer small text-muted">No existen cita(s) pendientes en esa fecha...</div>  ';
   }
   echo '
   </div>
   
   </div>
   
   ';
?>