<?php

include 'conexion.php';
$strIdCita = $_GET['q'];
$conexion = conectar();

$infoCita = mysqli_query($conexion, "SELECT * FROM `cita`
                                                WHERE `ID_CITA` = $strIdCita")
or die("Problemas en el select" . mysqli_error($conexion));

echo '<div class="container">';


while ($row = (mysqli_fetch_array($infoCita))) {
echo '<div class="card mb-3">
           <div class="card-header">
             <i class="fas fa-clipboard-list"></i>
             Información de Cita Médica Pendiente</div><br>
           <div class="container">
           <form> <div class="form-group">
  <div class="form-row">
    <div class="col-md-6">
      <div class="form-label-group">
        <input type="text" id="fecha_cita" class="form-control" placeholder="Fecha" required="required" disabled autofocus="autofocus">
        <label for="fecha_cita">'.$row[5].'</label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-label-group">
        <input type="text" id="hora_cita" class="form-control" placeholder="Hora" disabled required="required">
        <label for="hora_cita">'.$row[4].'</label>
      </div>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="form-row">
  <div class="col-md-6">
  <div class="form-row">
  <div class="col-md-6">
  <div class="form-label-group">
    <input type="number" id="peso" class="form-control" placeholder="Peso" step="any" disabled required="required" size="40">
    <label for="peso">'.$row[11].'</label>
  </div>
</div>
<div class="col-md-6">
<div class="form-label-group">
<i> Kg (Kilogramos) </i>
</div>
</div>

 

<div class="col-md-6">
<div class="form-label-group">
  <input type="number" id="altura" class="form-control" placeholder="Altura" step="any" disabled required="required">
  <label for="altura">'.$row[12].'</label>
</div>
</div>
<div class="col-md-6">
<div class="form-label-group">
 <i> m (metros) </i>
</div>
</div>

 

<div class="col-md-6">
<div class="form-label-group">
 <input type="number" id="presion" class="form-control" placeholder="Presión" step="any" disabled required="required" size="40">
 <label for="presion">'.$row[14].'</label>
</div>
</div>
<div class="col-md-6">
<div class="form-label-group">
<i> mmHg (Milímetro de mercurio) </i>
</div>
</div>

<div class="col-md-6">
<div class="form-label-group">  
  <input type="number" id="temperatura" class="form-control" placeholder="Temperatura" step="any" disabled required="required" size="40">
  <label for="temperatura">Temperatura</label>
</div>
</div> 
<div class="col-md-6">
<div class="form-label-group">   
<i> ºC (Grados) </i>
</div>
</div>

  </div>
  </div>
    <div class="col-md-6">
      <div class="form-label-group">
      <textarea type="text" id="motivo_cita" class="form-control" placeholder="Motivo" disabled placeholder="Motivo" rows="8">
      '.$row[6].'
      </textarea>
      <label for="motivo_cita"></label>
      </div>
    </div>

  </div>
</div>';

}

echo '<hr>

<div class="form-group">
  <div class="form-row">
  <div class="col-md-6">
  <div class="form-row">
  <div class="col-md-3">
  <div class="form-label-group">
  <p></p>
  <p>Tratamiento:</p>
  </div>
 </div>
  <div class="col-md-9">
  <div class="form-label-group">
    <input type="text" id="tratamientoMCM" class="form-control" placeholder="Especificación" step="any" required="required" size="40">
    <label for="tratamientoMCM">Especificación</label>
  </div>
</div>


<div class="form-group">
<div class="form-row">
<div class="col-md-6"> <br><br>
</div></div></div>


<div class="col-md-3">
<div class="form-label-group">
<p></p>
 <p>Medicamento:</p>
</div>
</div>
<div class="col-md-9">
<div class="form-label-group">
  <input type="text" id="medicamentoMCM" class="form-control" placeholder="Especificación" step="any" required="required">
  <label for="medicamentoMCM">Especificación</label>
</div>
</div>


<div class="form-group">
<div class="form-row">
<div class="col-md-6"> <br><br>
</div></div></div>


  </div>
  </div>
    <div class="col-md-6">
      <div class="form-label-group">
      <textarea type="text" id="diagnosticoMCM" class="form-control" placeholder="Detalle de diagnóstico" rows="5" required="required"></textarea>
      <label for="diagnosticoMCM"></label>
      </div>
    </div>

  </div>
</div>


<div class="form-group">
<div class="form-row text-center">
<br> <br>
<div class="col-md-12"> <button class="btn col-md-2 btn-ttc inline-block" onclick="finalizarCitaMedica('.$strIdCita.')">Finalizar</button>
</div></div></div>


</form>
</div>

<div class="card-footer small text-muted">Actualizando información...</div>
</div>

</div>';
?>