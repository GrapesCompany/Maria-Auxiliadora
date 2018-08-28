<?php
include 'conexion.php';
$strBuscar = $_GET['strPalabra'];
$conexion = conectar();
buscarHistoriaClinicaPaciente($strBuscar);
cerrar($conexion); //pasar la conexion de cerrar al final de cada funcion

echo '
<div class="container">
<div class="card mb-3">
           <div class="card-header">
             <i class="fas fa-list-ul"></i>
             Listado de Historias Clinicas</div><br>
           <div class="container">          
           <form> 
           <div class="form-group">
  <div class="form-row">';
  $historiasClinicas = $_SESSION['historiasClinicas'];
  if($historiasClinicas != null){
  echo '
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID Historia Clinica</th>
      <th scope="col">Cedula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>';
 $c = 1;
 for ($i = 0; $i < count($historiasClinicas); $i++) {
   echo '<tr>
      <th scope="row">'.$c.'</th>
      <td>'.$historiasClinicas[$i]['idHC'].'</td>
      <td>'.$historiasClinicas[$i]['cedulaPac']. '&nbsp;</td>
      <td>'.$historiasClinicas[$i]['nombrePaciente'].'</td>
      <td>'.$historiasClinicas[$i]['apellidoPac'].'</td>
      <td><button type="button" class="btn btn-warning">Modificar</button></td>
    </tr>';
    $c++;
  }
unset($_SESSION['historiasClinicas']);
echo  '</tbody>
</table>
  </div>
</div>         
</form>
</div>';
}
else{
  unset($_SESSION['historiasClinicas']);
  echo 'No hay registros de Historias Clinicas en la Base de Datos...';
}
echo '
</div>
</div> 
 ';



function buscarHistoriaClinicaPaciente($strBuscar)
{

    global $conexion;

    $ct = 0; //variable para el while
    $_HC; //declaracion del vector para almacenar los datos de la consulta
    $findHC = mysqli_query($conexion, "SELECT * FROM	cita c
                                                INNER JOIN historiaclinica hc ON c.ID_HC = hc.ID_HC
                                                INNER JOIN paciente p ON c.CEDULA_PAC = P.CEDULA_PAC
                                                WHERE c.CEDULA_PAC LIKE '%$strBuscar%'
                                                OR p.NOMBRE_PAC LIKE '%$strBuscar%'
                                                OR p.APELLIDO_PAC LIKE '%$strBuscar%'
                                                AND c.ESTADO_CITA = '1'")
    or die("Problemas en el select" . mysqli_error($conexion));

    while ($row = (mysqli_fetch_array($findHC))) { //ciclo while para almacenar todos los datos que vienen de la base
        $_HC[$ct] = array(
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
            'cedulaAux' => $row['CEDULA_AUX'],
            'hcFechCreacion' => $row['HC_FECHA_CREACION'],
            'responsable' => $row['RESPONSABLE'],
            'observaciones' => $row['OBSERVACIONES'],
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

    if (isset($_HC)) { //condicional if para ver si el vector esta lleno
        $_SESSION['historiasClinicas'] = $_HC; //almacenando el vector en una sesion para utilizarlo en otra pagina
        $historiasClinicas = $_SESSION['historiasClinicas']; //forma para recuperar los valores de la sesion
        //echo "*********************************HISTORIAS CLINICAS";
       // echo "<br>";
        /*for ($i = 0; $i < count($historiasClinicas); $i++) { //for para imprimir los valores del vector recuperado de la sesion, conunt es para la dimension del vector
            echo $historiasClinicas[$i]['idCita'];
            echo "<br>";
            echo $historiasClinicas[$i]['cedulaMed'];
            echo "<br>";
            echo $historiasClinicas[$i]['cedulaPac'];
            echo "<br>";
            echo $historiasClinicas[$i]['idHC'];
            echo "<br>";
            echo $historiasClinicas[$i]['horaCita'];
            echo "<br>";
            echo $historiasClinicas[$i]['fechaCita'];
            echo "<br>";
            echo $historiasClinicas[$i]['motivoCita'];
            echo "<br>";
            echo $historiasClinicas[$i]['detalleDiagnoticoCita'];
            echo "<br>";
            echo $historiasClinicas[$i]['tratamientoCita'];
            echo "<br>";
            echo $historiasClinicas[$i]['medicamentoCita'];
            echo "<br>";
            echo $historiasClinicas[$i]['fechProxCita'];
            echo "<br>";
            echo $historiasClinicas[$i]['PesoCita'];
            echo "<br>";
            echo $historiasClinicas[$i]['alturaCita'];
            echo "<br>";
            echo $historiasClinicas[$i]['estadoCita'];
            echo "<br>";
            echo $historiasClinicas[$i]['cedulaAux'];
            echo "<br>";
            echo $historiasClinicas[$i]['hcFechCreacion'];
            echo "<br>";
            echo $historiasClinicas[$i]['responsable'];
            echo "<br>";
            echo $historiasClinicas[$i]['observaciones'];
            echo "<br>";
            echo $historiasClinicas[$i]['nombrePaciente'];
            echo "<br>";
            echo $historiasClinicas[$i]['apellidoPac'];
            echo "<br>";
            echo $historiasClinicas[$i]['telefonoPac'];
            echo "<br>";
            echo $historiasClinicas[$i]['fechNacPaciente'];
            echo "<br>";
            echo $historiasClinicas[$i]['edadPac'];
            echo "<br>";
            echo $historiasClinicas[$i]['provinciaPac'];
            echo "<br>";
            echo $historiasClinicas[$i]['cantonPac'];
            echo "<br>";
            echo $historiasClinicas[$i]['profesionPac'];
            echo "<br>";
            echo $historiasClinicas[$i]['estadoCivilPac'];
            echo "<br>";
            echo $historiasClinicas[$i]['sexoPac'];
            echo "<br>";
            echo $historiasClinicas[$i]['correoPac'];
            echo "<br>";
            echo $historiasClinicas[$i]['direccionPac'];
            echo "<br>";
            echo '------------------------------------------------------------';
            echo "<br>";
        }*/
    }else{
        $_SESSION['historiasClinicas'] = null;
      }
}
?>