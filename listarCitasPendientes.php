<?php 
include 'conexion.php';
$strBuscar = $_GET['strPalabra'];
$conexion = conectar();
buscarCitasPendientes($strBuscar);
cerrar($conexion);      //pasar la conexion de cerrar al final de cada funcion

echo '
<div class="container">
<div class="card mb-3">
           <div class="card-header">
             <i class="fas fa-list-ul"></i>
             Listado de Citas Medicas Pendientes</div><br>
           <div class="container">          
           <form> 
           <div class="form-group">
  <div class="form-row">';
  $citasPendientes = $_SESSION['citasPendientes'];
  if($citasPendientes != null){//paciente,cedula,fecha,hora,medico
  echo '
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cedula</th>
      <th scope="col">Paciente</th>
      <th scope="col">Fecha</th>
      <th scope="col">Hora</th>
      <th scope="col">Medico</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>';
 $c = 1;
 for ($i = 0; $i < count($citasPendientes); $i++) {
   echo '<tr>
      <th scope="row">'.$c.'</th>
      <td>'.$citasPendientes[$i]['cedulaPac'].'</td>
      <td>'.$citasPendientes[$i]['nombrePaciente'].  '&nbsp;' .$citasPendientes[$i]['apellidoPac'].'</td>
      <td>'.$citasPendientes[$i]['fechaCita'].'</td>
      <td>'.$citasPendientes[$i]['horaCita'].'</td>
      <td>'.$citasPendientes[$i]['nombreM']. '&nbsp;' .$citasPendientes[$i]['apellidoM'].'</td>
      <td><button type="button" class="btn btn-warning" value='.$citasPendientes[$i]['idCita'].' onclick="showCitaMedica(this.value)">Modificar</button></td>
    </tr>';
    $c++;
  }
unset($_SESSION['citasPendientes']);
echo  '</tbody>
</table>
  </div>
</div>         
</form>
</div>';
}
else{
    unset($_SESSION['citasPendientes']);
  echo 'No hay registros de Citas Pendientess en la Base de Datos...';
}
echo '
</div>
</div> 
 ';

function buscarCitasPendientes($strBuscar){

    global $conexion;
    global $strBuscar;

    $ct = 0; //variable para el while
    $_CitasPendientes; //declaracion del vector para almacenar los datos de la consulta
    $findCitasPendientes = mysqli_query($conexion, "SELECT * FROM	cita c
                                        INNER JOIN medico m 
                                        ON c.CEDULA_MED = m.CEDULA_MED
                                        INNER JOIN paciente p 
                                        ON c.CEDULA_PAC = P.CEDULA_PAC
                                        WHERE (c.ESTADO_CITA = 0) AND
                                        (c.CEDULA_PAC LIKE '%$strBuscar%' OR p.NOMBRE_PAC LIKE '%$strBuscar%' OR p.APELLIDO_PAC LIKE '%$strBuscar%')")
    or die("Problemas en el select" . mysqli_error($conexion));

    while ($row = (mysqli_fetch_array($findCitasPendientes))) { //ciclo while para almacenar todos los datos que vienen de la base
        $_CitasPendientes[$ct] = array(
            'idCita' => $row['ID_CITA'],
            'cedulaMed' => $row['CEDULA_MED'],
            'cedulaPac' => $row['CEDULA_PAC'],
            'idHC' => $row['ID_HC'],
            'horaCita' => $row['HORA_CITA'],
            'fechaCita' => $row['FECHA_CITA'],
            'motivoCita' => $row['MOTIVO_CITA'],
            'detalleDiagnoticoCita' => $row['DETALLE_DIAGNOSTICO_CITA'],
            'tratamientoCita' => $row['TRATAMIENTO_CITA'],
            'medicamentoCita' => $row['MEDICAMENTO_CITA'],
            'fechProxCita' => $row['FECHA_PROX_CITA'],
            'PesoCita' => $row['PESO_CITA'],
            'alturaCita' => $row['ALTURA_CITA'],
            'estadoCita' => $row['ESTADO_CITA'],
            'cedulaM' => $row['CEDULA_MED'],
            'nombreM' => $row['NOMBRE_MED'],
            'apellidoM' => $row['APELLIDO_MED'],
            'telefonoM' => $row['TELEFONO_MED'],
            'especialidadM' => $row['ESPECIALIDAD'],
            'estadoM' => $row['ESTADO_MED'],
            'fechNacM' => $row['FECHA_NAC_MED'],
            'direccionM' => $row['DIRECCION_MED'],
            'correoM' => $row['CORREO_MED'],
            'nombrePaciente' => $row['NOMBRE_PAC'],
            'apellidoPac' => $row['APELLIDO_PAC'],
            'telefonoPac' => $row['TELEFONO_PAC'],
            'fechNacPaciente' => $row['FECHA_NAC_PAC'],
            'edadPac' => $row['EDAD_PAC'],
            'provinciaPac' => $row['PROVINCIA_PAC'],
            'cantonPac' => $row['CANTON_PAC'],
            'profesionPac' => $row['PROFESION'],
            'estadoCivilPac' => $row['ESTADOCIVIL'],
            'sexoPac' => $row['SEXO'],
            'correoPac' => $row['CORREO_PAC'],
            'direccionPac' => $row['DIRECCION_PAC']);
        $ct++; //aumento del contador para guardar en el vector
    }
    $ct = 0;

    if (isset($_CitasPendientes)) { //condicional if para ver si el vector esta lleno
        $_SESSION['citasPendientes'] = $_CitasPendientes; //almacenando el vector en una sesion para utilizarlo en otra pagina
        $citasPendientes = $_SESSION['citasPendientes']; //forma para recuperar los valores de la sesion
        //echo "*********************************CITAS PENDIENTES";
       // echo "<br>";
        for ($i = 0; $i < count($citasPendientes); $i++) { //for para imprimir los valores del vector recuperado de la sesion, conunt es para la dimension del vector
          /*  echo $citasPendientes[$i]['idCita'];echo "<br>";
            echo $citasPendientes[$i]['cedulaMed'];echo "<br>";
            echo $citasPendientes[$i]['cedulaPac'];echo "<br>";
            echo $citasPendientes[$i]['idHC'];echo "<br>";
            echo $citasPendientes[$i]['horaCita'];echo "<br>";
            echo $citasPendientes[$i]['fechaCita'];echo "<br>";
            echo $citasPendientes[$i]['motivoCita'];echo "<br>";
            echo $citasPendientes[$i]['detalleDiagnoticoCita'];echo "<br>";
            echo $citasPendientes[$i]['tratamientoCita'];echo "<br>";
            echo $citasPendientes[$i]['medicamentoCita'];echo "<br>";
            echo $citasPendientes[$i]['fechProxCita'];echo "<br>";
            echo $citasPendientes[$i]['PesoCita'];echo "<br>";
            echo $citasPendientes[$i]['alturaCita'];echo "<br>";
            echo $citasPendientes[$i]['estadoCita'];echo "<br>";
            echo $citasPendientes[$i]['cedulaM'];echo "<br>";
            echo $citasPendientes[$i]['nombreM'];echo "<br>";
            echo $citasPendientes[$i]['apellidoM'];echo "<br>";
            echo $citasPendientes[$i]['telefonoM'];echo "<br>";
            echo $citasPendientes[$i]['especialidadM'];echo "<br>";
            echo $citasPendientes[$i]['estadoM'];echo "<br>";
            echo $citasPendientes[$i]['fechNacM'];echo "<br>";
            echo $citasPendientes[$i]['direccionM'];echo "<br>";
            echo $citasPendientes[$i]['correoM'];echo "<br>";
            echo $citasPendientes[$i]['nombrePaciente'];echo "<br>";
            echo $citasPendientes[$i]['apellidoPac'];echo "<br>";
            echo $citasPendientes[$i]['telefonoPac'];echo "<br>";
            echo $citasPendientes[$i]['fechNacPaciente'];echo "<br>";
            echo $citasPendientes[$i]['edadPac'];echo "<br>";
            echo $citasPendientes[$i]['provinciaPac'];echo "<br>";
            echo $citasPendientes[$i]['cantonPac'];echo "<br>";
            echo $citasPendientes[$i]['profesionPac'];echo "<br>";
            echo $citasPendientes[$i]['estadoCivilPac'];echo "<br>";
            echo $citasPendientes[$i]['sexoPac'];echo "<br>";
            echo $citasPendientes[$i]['correoPac'];echo "<br>";
            echo $citasPendientes[$i]['direccionPac'];echo "<br>";
            echo '------------------------------------------------------------';
            echo "<br>";*/
        }
    }

}
?>