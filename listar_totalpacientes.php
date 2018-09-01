<?php
include 'conexion.php';
$strBuscar = $_GET['strPalabra'];
$conexion = conectar();
$listadoPacientes = mysqli_query($conexion,"SELECT *  FROM paciente WHERE (ESTADO_PAC = 0) AND 
                                                    (CEDULA_PAC LIKE '%$strBuscar%' 
                                                      OR NOMBRE_PAC LIKE '%$strBuscar%'
                                                      OR APELLIDO_PAC LIKE '%$strBuscar%'
                                                      OR DIRECCION_PAC LIKE '%$strBuscar%'
                                                      OR TELEFONO_PAC LIKE '%$strBuscar%')")
                                                      or die("Problemas en el select" . mysqli_error($conexion));


$listadoPacientes1 = mysqli_query($conexion,"SELECT *  FROM paciente WHERE (ESTADO_PAC = 0) AND 
                                                    (CEDULA_PAC LIKE '%$strBuscar%' 
                                                      OR NOMBRE_PAC LIKE '%$strBuscar%'
                                                      OR APELLIDO_PAC LIKE '%$strBuscar%'
                                                      OR DIRECCION_PAC LIKE '%$strBuscar%'
                                                      OR TELEFONO_PAC LIKE '%$strBuscar%')")
                                                      or die("Problemas en el select" . mysqli_error($conexion));

echo '<div class="container">
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
       <th scope="col">Cédula</th>
       <th scope="col">Nombres</th>
       <th scope="col">Teléfono</th>
       <th scope="col">Correo</th>
       <th scope="col">Dirección</th>
	<th scope="col">Opción</th>
     </tr>
   </thead>
   <tbody>';

   $c = 1;
   while ($row = (mysqli_fetch_array($listadoPacientes))) {
    echo '
    <tr>
    <th scope="row">'.$c.'</th>
    <td>'.$row[0].'</td>
    <td>'.$row[1].'&nbsp;'.$row[2].'</td>
    <td>'.$row[3].'</td>
    <td>'.$row[13].'</td>
    <td>'.$row[14].'</td>
    <td><button type="button" class="btn btn-warning" value='.$row[0].' onclick="showHistoriaClinica(this.value)">Ver Historia Clínica</button></td>
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
  
   if(mysqli_fetch_array($listadoPacientes1)){
   }
   else{
    echo '<div class="card-footer small text-muted">No existen paciente(s) en el sistema...</div>  ';
   }
   echo '
   </div>
   
   </div>
   
   ';
   cerrar($conexion); 
?>