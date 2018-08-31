<?php
session_start();
include 'conexion.php';

$paciente=$_SESSION['userPaciente'];

$idPaciente = $paciente[0]['cedulaP'];
$conexion = conectar();

$findCita = mysqli_query($conexion, "SELECT * FROM	cita c
                      INNER JOIN medico m ON c.CEDULA_MED = m.CEDULA_MED 
                      WHERE c.CEDULA_PAC = '$idPaciente' AND c.ESTADO_CITA = 0")
or die("Problemas en el select" . mysqli_error($conexion));


echo '<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-question"></i>
              Listado de Citas Medicas Pendientes</div><br>
            <div class="container">
            <form> 
            <div class="form-group">
   <div class="form-row">
   <h1>Paciente: Listado de Citas Medicas Pendientes</h1><br>
   <table class="table">
   <thead>
     <tr>
       <th scope="col">#</th>
       <th scope="col">Fecha de cita</th>
       <th scope="col">Hora de la cita</th>
       <th scope="col">Medico</th>
       <th scope="col">Opcion</th>
     </tr>
   </thead>
   <tbody>';
$c = 1;
   while ($row = (mysqli_fetch_array($findCita))) {
echo '
   <tr>
       <th scope="row">'.$c.'</th>
       <td>'.$row[5].'</td>
       <td>'.$row[4].'</td>
       <td>'.$row[16].' &nbsp; '.$row[17].'</td>
       <td><button type="button" class="btn btn-warning"  value="'.$row[0].'" onclick="CancelarCitaMedica(this.value)">Cancelar</button></td>
     </tr>';
     $c++;
   }
echo '   
   </tbody>
 </table>
 </div>
   </div>         
  

 </form>
 </div>
 <br>
 <div class="card-footer small text-muted">Buscando cita(s) médica(s)...</div>
 </div>
 
 </div>
 
 ';

 cerrar($conexion);
?>