<?php
session_start();
if(isset($_SESSION['userMedico'])){
  $medico=$_SESSION['userMedico'];
 }else
 {
   header("Location: index2.php?denegado=peligro");
 }
include 'conexion.php';
$conexion = conectar();
$cedulaMed = $medico[0]['cedulaM'];

$citasPendientes = mysqli_query($conexion, "SELECT * FROM	cita c
                    INNER JOIN medico m ON c.CEDULA_MED = m.CEDULA_MED
                    INNER JOIN paciente p ON c.CEDULA_PAC = P.CEDULA_PAC
                    WHERE c.CEDULA_MED = '$cedulaMed' AND c.ESTADO_CITA = 0")
                    or die("Problemas en el select" . mysqli_error($conexion));

$citasPendientes1 = mysqli_query($conexion, "SELECT * FROM	cita c
                    INNER JOIN medico m ON c.CEDULA_MED = m.CEDULA_MED
                    INNER JOIN paciente p ON c.CEDULA_PAC = P.CEDULA_PAC
                    WHERE c.CEDULA_MED = '$cedulaMed' AND c.ESTADO_CITA = 0")
                    or die("Problemas en el select" . mysqli_error($conexion));


echo '<div class="container">

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-list-ul"></i>
              Listado de Citas Médicas Pendientes</div><br>
            <div class="container">
           
            <form> 
            <div class="form-group">
   <div class="form-row">
   <table class="table">
   <thead>
     <tr>
       <th scope="col">#</th>
       <th scope="col">Fecha</th>
       <th scope="col">Hora</th>
       <th scope="col">Cédula</th>
       <th scope="col">Nombre</th>
       <th scope="col">Apellido</th>
       <th scope="col">Teléfono</th>
       <th scope="col">Correo</th>
       <th scope="col">Dirección</th>
     </tr>
   </thead>
   <tbody>';
   $c = 1;
   while ($row = (mysqli_fetch_array($citasPendientes))) {
echo '<tr>
      <th scope="row">'.$c.'</th>
      <td>'.$row[5].'</td>
      <td>'.$row[4].'&nbsp;</td>
      <td>'.$row[2].'</td>
      <td>'.$row[25].'</td>
      <td>'.$row[26].'</td>
      <td>'.$row[27].'</td>
      <td>'.$row[37].'</td>
      <td>'.$row[38].'</td>
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

 if(mysqli_fetch_array($citasPendientes1)){
 }
 else{
  echo '<div class="card-footer small text-muted">No existen cita(s) médica(s) pendiente(s)...</div>  ';
 }
 echo '
 </div>
 
 </div>
 
 ';
 cerrar($conexion); 
?>