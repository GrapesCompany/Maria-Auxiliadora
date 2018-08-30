<?php
include 'conexion.php';
$conexion = conectar();
$strBuscar = $_GET['q'];

$datosPaciente = mysqli_query($conexion, "SELECT * FROM paciente
                                                WHERE paciente.`CEDULA_PAC`='$strBuscar'")
or die("Problemas en el select" . mysqli_error($conexion));

while ($f = mysqli_fetch_array($datosPaciente)) {
    $arreglo_paciente[] = array('cedulaP' => $f['CEDULA_PAC'],
        'nombreP' => $f['NOMBRE_PAC'],
        'apellidoP' => $f['APELLIDO_PAC'],
        'telefonoP' => $f['TELEFONO_PAC'],
        'fechaNacP' => $f['FECHA_NAC_PAC'],
        'edadP' => $f['EDAD_PAC'],
        'provinciaP' => $f['PROVINCIA_PAC'],
        'cantonP' => $f['CANTON_PAC'],
        'profesionP' => $f['PROFESION'],
        'estadoCivilP' => $f['ESTADOCIVIL'],
        'sexoP' => $f['SEXO'],
        'estadoP' => $f['ESTADO_PAC'],
        'contrasenaP' => $f['CONTRASENA_PAC'],
        'correoP' => $f['CORREO_PAC'],
        'direccionP' => $f['DIRECCION_PAC'],
    );
}
$datosHC = mysqli_query($conexion, "SELECT * FROM `historiaclinica` WHERE CEDULA_PAC = '$strBuscar'")
or die("Problemas en el select" . mysqli_error($conexion));
while ($f = mysqli_fetch_array($datosHC)) {
    $arregloHC[] = array('responsableHC' => $f['RESPONSABLE'],
        'observacionesHC' => $f['OBSERVACIONES'],
    );
}

$datosCitaMedica = mysqli_query($conexion, "SELECT * FROM	cita c
                                            INNER JOIN medico m ON c.CEDULA_MED = m.CEDULA_MED
                                            INNER JOIN paciente p ON c.CEDULA_PAC = P.CEDULA_PAC
                                            WHERE c.CEDULA_PAC = '$strBuscar' AND c.ESTADO_CITA = 1")   //CAMBIAR A 1 CAPEON SI NONO FUNCIONA
or die("Problemas en el select" . mysqli_error($conexion));


echo '<div class="container">

<div class="card mb-3">
           <div class="card-header text-center">
             <i class="fas fa-address-card"></i>
             Detalle de Historia Clínica del Paciente</div><br>
           <div class="container">
           <form> <div class="form-group">

            
           <h3>Historia Clínica:</h3>
           <hr>
                      <div class="container">
                      <form>
                      <div class="form-group">
             <div class="form-row">
             <div class="col-md-2">
             <div class="form-label-group">
                <label>Responsable:</label>
             </div>
           </div>
               <div class="col-md-4">
                 <div class="form-label-group">
                   <input type="text" id="responsable" name="responsable" class="form-control" placeholder="Responsable" disabled required="required" autofocus="autofocus">
                   <label for="responsable">' . $arregloHC[0]['responsableHC'] . '</label>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="form-label-group">
                   <textarea type="text" id="observaciones" name="observaciones" class="form-control" placeholder="Observaciones" disabled rows="3">
                   ' . $arregloHC[0]['observacionesHC'] . '
                   </textarea>
                 <label for="observaciones"></label>
                 </div>
               </div>
             </div>
             </div>
             </div>
           

           <h3>Datos Personales:</h3><hr>
  <div class="form-row">

  <div class="col-md-2">
  <div class="form-label-group">
     <label>Cédula:</label>
  </div>
</div>
    <div class="col-md-2">
      <div class="form-label-group">
        <input type="text" id="cedula" name="cedula" class="form-control" placeholder="Cedula" required="required" disabled autofocus="autofocus">
        <label for="nombre">' . $arreglo_paciente[0]['cedulaP'] . '</label>
      </div>
    </div>
    <div class="col-md-2">
    <div class="form-label-group">
       <label>Nombre:</label>
    </div>
  </div>
    <div class="col-md-2">
      <div class="form-label-group">
        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" disabled required="required">
        <label for="nombre">' . $arreglo_paciente[0]['nombreP'] . '</label>
      </div>
    </div>
    <div class="col-md-2">
    <div class="form-label-group">
       <label>Apellido:</label>
    </div>
  </div>
    <div class="col-md-2">
    <div class="form-label-group">
    <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" disabled required="required" autofocus="autofocus">
    <label for="apellido">' . $arreglo_paciente[0]['apellidoP'] . '</label>
    </div>
  </div>
  </div>
</div>
<div class="form-group">
  <div class="form-row">
  <div class="col-md-2">
  <div class="form-label-group">
     <label>Fecha de Nacimiento:</label>
  </div>
</div>
    <div class="col-md-2">
      <div class="form-label-group">
      <input type="text" id="fech_nac"  name="fech_nac" class="form-control" placeholder="Fecha de Nacimiento" disabled required="required">
      <label for="fech_nac">' . $arreglo_paciente[0]['fechaNacP'] . '</label>
      </div>
    </div>
    <div class="col-md-2">
    <div class="form-label-group">
       <label>Teléfono:</label>
    </div>
  </div>
    <div class="col-md-2">
      <div class="form-label-group">
      <input type="text" id="telefono"  name="telefono" class="form-control" placeholder="Telefono" disabled required="required" autofocus="autofocus">
      <label for="telefono">' . $arreglo_paciente[0]['telefonoP'] . '</label>
      </div>
    </div>
    <div class="col-md-2">
    <div class="form-label-group">
       <label>Provincia:</label>
    </div>
  </div>
    <div class="col-md-2">
    <div class="form-label-group">
    <input type="text" id="provincia" name="provincia" class="form-control" placeholder="Provincia" disabled required="required" autofocus="autofocus">
    <label for="provincia">' . $arreglo_paciente[0]['provinciaP'] . '</label>
    </div>
  </div>
  </div>
</div>



<div class="form-group">
  <div class="form-row">
  <div class="col-md-2">
    <div class="form-label-group">
       <label>Cantón:</label>
    </div>
  </div>
    <div class="col-md-2">
      <div class="form-label-group">
      <input type="text" id="canton" name="canton" class="form-control" placeholder="Cantón" disabled required="required">
      <label for="canton">' . $arreglo_paciente[0]['cantonP'] . '</label>
      </div>
    </div>

    <div class="col-md-2">
    <div class="form-label-group">
       <label>Sexo:</label>
    </div>
  </div>
  <div class="col-md-2">
  <div class="form-label-group">
  <input type="text" id="sexo" name="sexo" class="form-control" placeholder="Sexo" disabled required="required">
  <label for="sexo">' . $arreglo_paciente[0]['sexoP'] . '</label>

</div>
  </div>

    <div class="col-md-2">
    <div class="form-label-group">
       <label>Profesión:</label>
    </div>
  </div>
    <div class="col-md-2">
    <div class="form-label-group">
    <input type="text" id="profesion"  name="profesion" class="form-control" placeholder="Profesión" disabled required="required" autofocus="autofocus">
    <label for="profesion">' . $arreglo_paciente[0]['profesionP'] . '</label>
    </div>
  </div>
  </div>
</div>

<div class="form-group">
<div class="form-row">
<div class="col-md-2">
    <div class="form-label-group">
       <label>Estado Civil:</label>
    </div>
  </div>
  <div class="col-md-2">
  <div class="form-label-group">
  <input type="text" id="ecivil" name="ecivil" class="form-control" placeholder="Masculino" disabled required="required">
  <label for="ecivil">' . $arreglo_paciente[0]['estadoCivilP'] . '</label>
</div>
  </div>

</div>
</div>

<div class="form-group">
<div class="form-row">
<div class="col-md-2">
    <div class="form-label-group">
       <label>Dirección:</label>
    </div>
  </div>
    <div class="col-md-4">
      <div class="form-label-group">
      <input type="text" id="direccion"  name="direccion" placeholder="Dirección" class="form-control" disabled required="required">
      <label for="direccion">' . $arreglo_paciente[0]['direccionP'] . '</label>
      </div>
    </div>
<div class="col-md-2">
  <div class="form-label-group">
     <label>Correo electrónico:</label>
  </div>
</div>
  <div class="col-md-4">
  <div class="form-label-group">
  <input type="mail" id="correo" name="correo" class="form-control" placeholder="Correo electrónico" disabled required="required">
  <label for="correo">' . $arreglo_paciente[0]['correoP'] . '</label>
</div>
  </div>
</div>
</div>


<br>
<h3>Citas Médicas:</h3>
<hr>
<br>

<div class="container">
<table class="table">
   <thead>
     <tr>
       <th scope="col">#</th>
       <th scope="col">Fecha cita</th>
       <th scope="col">Detalle cita</th>
       <th scope="col">Tratamiento</th>
       <th scope="col">Medicamento</th>
     </tr>
   </thead>
   <tbody>';

   $c = 1;
   while ($row = (mysqli_fetch_array($datosCitaMedica))) {

   echo '  <tr>
       <th scope="row">'.$c.'</th>
       <td>'.$row[5].'</td>
       <td>'.$row[7].'</td>
       <td>'.$row[8].'</td>
       <td>'.$row[9].'</td>
      </tr>';
      $c++;
    }
   echo '
   </tbody>
 </table>
 </div>
</form>

<div class="text-center">
<button class="btn col-md-2 btn-ttc inline-block text-center" href="#" onclick="recargar(this.value)">Aceptar</button>
</div>

</div>
<br>
<div class="card-footer small text-muted">Actualizando historia clínica...</div>
</div>

</div>';
?>