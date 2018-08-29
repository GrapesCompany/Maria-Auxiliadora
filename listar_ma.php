<?php
include 'conexion.php';
$strBuscar = $_GET['strPalabra'];
$conexion = conectar();
buscarAuxiliares($strBuscar);
buscarMedicos($strBuscar);
cerrar($conexion);

echo '
<div class="container">
<div class="card mb-3">
           <div class="card-header">
             <i class="fas fa-list-ul"></i>
             Listado de Auxiliares</div><br>
           <div class="container">          
           <form> 
           <div class="form-group">
  <div class="form-row">';
  $auxiliares = $_SESSION['auxiliares'];
  if($auxiliares != null){
  echo '
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cédula</th>
      <th scope="col">Nombres</th>
      <th scope="col">Dirección</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Correo</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>';
 $c = 1;
 for ($i = 0; $i < count($auxiliares); $i++) {
   echo '<tr>
      <th scope="row">'.$c.'</th>
      <td>'.$auxiliares[$i]['cedulaA'].'</td>
      <td>'.$auxiliares[$i]['nombreA']. '&nbsp;' .$auxiliares[$i]['apellidoA'].'</td>
      <td>'.$auxiliares[$i]['direccionA'].'</td>
      <td>'.$auxiliares[$i]['telefonoA'].'</td>
      <td>'.$auxiliares[$i]['correoA'].'</td>
      <td><button type="button" class="btn btn-danger " value='.$auxiliares[$i]['cedulaA'].' onclick="eliminarAuxiliares(this.value)" >Eliminar</button></td>
    </tr>';
    $c++;
  }
unset($_SESSION['auxiliares']);
echo  '</tbody>
</table>
  </div>
</div>         
</form>
</div>';
}
else{
  unset($_SESSION['auxiliares']);
  echo 'No hay registros de auxiliares en la Base de Datos...';
}
echo '
</div>
</div> 
 ';
 /////////////////////////////////////////////////////////////////////////////////////////////////
 echo '
<div class="container">
<div class="card mb-3">
           <div class="card-header">
             <i class="fas fa-list-ul"></i>
             Listado de Medicos</div><br>
           <div class="container">          
           <form> 
           <div class="form-group">
  <div class="form-row">';
  $medicos = $_SESSION['medicos'];
  if($medicos != null){
  echo '
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cédula</th>
      <th scope="col">Nombres</th>
      <th scope="col">Dirección</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Correo</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>';
 $c = 1;
 for ($i = 0; $i < count($medicos); $i++) {
   echo '<tr>
      <th scope="row">'.$c.'</th>
      <td>'.$medicos[$i]['cedulaM'].'</td>
      <td>'.$medicos[$i]['nombreM']. '&nbsp;' .$medicos[$i]['apellidoM'].'</td>
      <td>'.$medicos[$i]['direccionM'].'</td>
      <td>'.$medicos[$i]['telefonoM'].'</td>
      <td>'.$medicos[$i]['correoM'].'</td>
      <td><button type="button" class="btn btn-danger" value='.$medicos[$i]['cedulaM'].' onclick="eliminarMedicos(this.value)">Eliminar</button></td>
    </tr>';
    $c++;
  }
unset($_SESSION['medicos']);
echo  '</tbody>
</table>
  </div>
</div>         
</form>
</div>';
}
else{
  echo 'No hay registros de medicos en la Base de Datos...';
}
echo '
</div>
</div> 
 ';


?>

<?php
function buscarAuxiliares($_strBuscar) //metodo para buscar auxiliares
{
    global $conexion;
    
    $ct = 0; //variable para el while
    $_auxiliares; //declaracion del vector para almacenar los datos de la consulta
    
    $findAuxiliares = mysqli_query($conexion, "SELECT *  FROM auxiliar WHERE (ESTADO_AUX = 0) AND (CEDULA_AUX LIKE '%$_strBuscar%' 
                                                OR NOMBRE_AUX LIKE '%$_strBuscar%'
                                                OR APELLIDO_AUX LIKE '%$_strBuscar%'
                                                OR DIRECCION_AUX LIKE '%$_strBuscar%'
                                                OR TELEFONO_AUX LIKE '%$_strBuscar%')")
    or die("Problemas en el select" . mysqli_error($conexion));

    while ($row = (mysqli_fetch_array($findAuxiliares))) { //ciclo while para almacenar todos los datos que vienen de la base
        $_auxiliares[$ct] = array(
            'cedulaA' => $row['CEDULA_AUX'],
            'nombreA' => $row['NOMBRE_AUX'],
            'apellidoA' => $row['APELLIDO_AUX'],
            'direccionA' => $row['DIRECCION_AUX'],
            'telefonoA' => $row['TELEFONO_AUX'],
            'fecNacA' => $row['FECH_NAC_AUX'],
            'contrasenaA' => $row['CONTRASENA_AUX'],
            'estadoA' => $row['ESTADO_AUX'],
            'correoA' => $row['CORREO_AUX']);
        $ct++; //aumento del contador para guardar en el vector
    }
    $ct = 0;

    if (isset($_auxiliares)) { //condicional if para ver si el vector esta lleno
        $_SESSION['auxiliares'] = $_auxiliares; //almacenando el vector en una sesion para utilizarlo en otra pagina
        //$auxiliares = $_SESSION['auxiliares']; //forma para recuperar los valores de la sesion
        /*echo "*********************************AUXILIARES";
        echo "<br>";
        for ($i = 0; $i < count($auxiliares); $i++) { //for para imprimir los valores del vector recuperado de la sesion, conunt es para la dimension del vector
            echo 'cedula', $auxiliares[$i]['cedulaA'];
            echo "<br>";
            echo 'nombre', $auxiliares[$i]['nombreA'];
            echo "<br>";
            echo 'apellido', $auxiliares[$i]['apellidoA'];
            echo "<br>";
            echo 'direccion', $auxiliares[$i]['direccionA'];
            echo "<br>";
            echo 'telefono', $auxiliares[$i]['telefonoA'];
            echo "<br>";
            echo 'fecha nacimiento', $auxiliares[$i]['fecNacA'];
            echo "<br>";
            echo 'contrasena', $auxiliares[$i]['contrasenaA'];
            echo "<br>";
            echo 'estado', $auxiliares[$i]['estadoA'];
            echo "<br>";
            echo 'correo', $auxiliares[$i]['correoA'];
            echo "<br>";
            echo '------------------------------------------------------------';
            echo "<br>";
        }*/
    }else{
      $_SESSION['auxiliares'] = null;
    }

}

function buscarMedicos($_strBuscar) //metodo para buscar auxiliares
{
    global $conexion;

    $ct = 0; //variable para el while
    $_medicos; //declaracion del vector para almacenar los datos de la consulta

    $findMedicos = mysqli_query($conexion, "
    SELECT *  FROM `medico` WHERE (ESTADO_MED = 0) AND (CEDULA_MED LIKE '%$_strBuscar%'
                                                            OR `NOMBRE_MED` LIKE '%$_strBuscar%'
                                                            OR `APELLIDO_MED` LIKE '%$_strBuscar%'
                                                            OR `TELEFONO_MED` LIKE '%$_strBuscar%'
                                                            OR `ESPECIALIDAD` LIKE '%$_strBuscar%'
                                                            OR `DIRECCION_MED` LIKE '%$_strBuscar%'
                                                            OR `CORREO_MED` LIKE '%$_strBuscar%')")
    or die("Problemas en el select" . mysqli_error($conexion));

    while ($row = (mysqli_fetch_array($findMedicos))) { //ciclo while para almacenar todos los datos que vienen de la base
        $_medicos[$ct] = array(
            'cedulaM' => $row['CEDULA_MED'],
            'nombreM' => $row['NOMBRE_MED'],
            'apellidoM' => $row['APELLIDO_MED'],
            'telefonoM' => $row['TELEFONO_MED'],
            'especialidadM' => $row['ESPECIALIDAD'],
            'contrasenaM' => $row['CONTRASENA_MED'],
            'estadoM' => $row['ESTADO_MED'],
            'fechNacM' => $row['FECHA_NAC_MED'],
            'direccionM' => $row['DIRECCION_MED'],
            'correoM' => $row['CORREO_MED']);
        $ct++; //aumento del contador para guardar en el vector
    }
    $ct = 0;

    if (isset($_medicos)) { //condicional if para ver si el vector esta lleno
        $_SESSION['medicos'] = $_medicos; //almacenando el vector en una sesion para utilizarlo en otra pagina
        $medicos = $_SESSION['medicos']; //forma para recuperar los valores de la sesion
        //echo "*********************************MEDICOS";
        //echo "<br>";
        for ($i = 0; $i < count($medicos); $i++) { //for para imprimir los valores del vector recuperado de la sesion, conunt es para la dimension del vector
            /*echo 'cedula', $medicos[$i]['cedulaM'];
            echo "<br>";
            echo 'nombre', $medicos[$i]['nombreM'];
            echo "<br>";
            echo 'apellido', $medicos[$i]['apellidoM'];
            echo "<br>";
            echo 'telefono', $medicos[$i]['telefonoM'];
            echo "<br>";
            echo 'especialidad', $medicos[$i]['especialidadM'];
            echo "<br>";
            echo 'contrasena', $medicos[$i]['contrasenaM'];
            echo "<br>";
            echo 'estado', $medicos[$i]['estadoM'];
            echo "<br>";
            echo 'fechNac', $medicos[$i]['fechNacM'];
            echo "<br>";
            echo 'direccion', $medicos[$i]['direccionM'];
            echo "<br>";
            echo 'correo', $medicos[$i]['correoM'];
            echo "<br>";
            echo '------------------------------------------------------------';
            echo "<br>";*/
        }
    }
    else{
      $_SESSION['medicos'] = null;
    }

}

?>