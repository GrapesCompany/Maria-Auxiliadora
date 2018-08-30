<?php

include 'conexion.php';
$strId = $_GET['strPalabra'];
$conexion = conectar();

$historiaClinicaInd = mysqli_query($conexion, "SELECT * FROM `historiaclinica` WHERE ID_HC = $strId")
or die("Problemas en el select" . mysqli_error($conexion));

$findHC = mysqli_query($conexion, "SELECT * FROM	historiaclinica hc
                                  INNER JOIN paciente p ON hc.CEDULA_PAC = p.CEDULA_PAC
                                  WHERE hc.ID_HC = '$strId'")
or die("Problemas en el select" . mysqli_error($conexion));


while ($datosInf = (mysqli_fetch_array($findHC))) {
  echo '<div class="container">
 <div class="card mb-3">
            <div class="card-header text-center">
              <i class="fas fa-address-card"></i>
              Modificar Historia Clínica - Paciente</div><br>
            <div class="container">
            <form> <div class="form-group">
   <div class="form-row">
     <div class="col-md-4">
       <div class="form-label-group">
         <input type="text" id="cedula" name="cedula" class="form-control" placeholder="Cédula" disabled required="required" autofocus="autofocus">
         <label for="cedula">' . $datosInf[1] . '</label>
       </div>
     </div>
     <div class="col-md-4">
       <div class="form-label-group">
         <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" disabled required="required">
         <label for="nombre">' . $datosInf[7] . '</label>
       </div>
     </div>
     <div class="col-md-4">
     <div class="form-label-group">
     <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" disabled required="required" autofocus="autofocus">
     <label for="apellido">' . $datosInf[8] . '</label>
     </div>
   </div>
   </div>
 </div>
 <div class="form-group">
   <div class="form-row">
     <div class="col-md-4">
       <div class="form-label-group">
       <input type="text" id="fech_nac"  name="fech_nac" class="form-control" placeholder="Fecha de Nacimiento" disabled required="required">
       <label for="fech_nac">' . $datosInf[10] . '</label>
       </div>
     </div>
     <div class="col-md-4">
       <div class="form-label-group">
       <input type="text" id="telefono"  name="telefono" class="form-control" placeholder="Telefono" disabled required="required" autofocus="autofocus">
       <label for="telefono">' . $datosInf[9] . '</label>
       </div>
     </div>
     <div class="col-md-4">
     <div class="form-label-group">
     <input type="text" id="provincia" name="provincia" class="form-control" placeholder="Provincia" disabled required="required" autofocus="autofocus">
     <label for="provincia">' . $datosInf[12] . '</label>
     </div>
   </div>
   </div>
 </div>



 <div class="form-group">
   <div class="form-row">
     <div class="col-md-4">
       <div class="form-label-group">
       <input type="text" id="canton" name="canton" class="form-control" placeholder="Cantón" disabled required="required">
       <label for="canton">' . $datosInf[13] . '</label>
       </div>
     </div>
     <div class="col-md-4">
       <div class="form-label-group">
       <input type="text" id="direccion"  name="direccion" placeholder="Dirección" class="form-control" disabled required="required">
       <label for="direccion">Dirección</label>
       </div>
     </div>
     <div class="col-md-4">
     <div class="form-label-group">
     <input type="text" id="profesion"  name="profesion" class="form-control" placeholder="Profesión" disabled required="required" autofocus="autofocus">
     <label for="profesion">' . $datosInf[14] . '</label>
     </div>
   </div>
   </div>
 </div>

 <div class="form-group">
 <div class="form-row">
   <div class="col-md-4">
   <div class="form-label-group">
   <input type="text" id="ecivil"  name="ecivil" class="form-control" placeholder="Profesión" disabled required="required" autofocus="autofocus">
   <label for="ecivil">' . $datosInf[15] . '</label>
   </div>
   </div>
   <div class="col-md-4">
   <div class="form-label-group">
   <input type="text" id="sexo"  name="sexo" class="form-control" placeholder="Profesión" disabled required="required" autofocus="autofocus">
   <label for="sexo">' . $datosInf[16] . '</label>
 </div>
   </div>
   <div class="col-md-4">
   <div class="form-label-group">
   <input type="mail" id="correo" name="correo" class="form-control" placeholder="Correo electrónico" disabled required="required">
   <label for="correo">' . $datosInf[19] . '</label>
 </div>
   </div>
 </div>
</div>';
}

while ($row = (mysqli_fetch_array($historiaClinicaInd))) {
    echo '
<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-clipboard-list"></i>
              Historia Clinica</div><br>
            <div class="container">
            <form> <div class="form-group">
   <div class="form-row">

   <div class="col-md-6">
   <h5>Responsable</h5>
   <div class="form-label-group">
     <textarea type="text" id="responsable" name="responsable" class="form-control" placeholder="Responsable" disabled rows="3">
     ' . $row[4] . '
     </textarea>
     <label for="responsable"></label>
   </div>
 </div>

  

     <div class="col-md-6">
     <h5>Observaciones</h5>
       <div class="form-label-group">
         <textarea type="text" id="observaciones" name="observaciones" class="form-control" placeholder="Observaciones" disabled rows="3">
         ' . $row[5] . '
         </textarea>
         <label for="observaciones"></label>
       </div>
     </div>
   </div>
   </div>
   </div>
 </div>';
}

echo '</form>

 <button class="btn col-md-2 btn-ttc inline-block" href="#" onclick="habilitarcamposhclinica()">Modificar</button>
 <button class="btn col-md-2 btn-ttc inline-block" href="#" onclick="actualizarHistoriaClinica('.$strId.')">Guardar</button>

 </div>
 <br>
 <div class="card-footer small text-muted">Actualizando historia clínica...</div>
 </div>

 </div>';

//cerrar($conexion);

?>
