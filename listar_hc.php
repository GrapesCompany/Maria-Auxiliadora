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
      <td><button type="button" class="btn btn-warning" onclick="showModificarHClinica(this.value)">Modificar</button></td>
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
    }else{
        $_SESSION['historiasClinicas'] = null;
      }
}
?>