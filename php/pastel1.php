

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">   


    
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
</head>
<body>

 <?php 
session_start();
if(isset($_SESSION['userMedico'])){
 $medico=$_SESSION['userMedico'];
}else
{
  header("Location: index2.php?denegado=peligro");
}

$cedulaMedico=$medico[0]['cedulaM'];

$mesphp=$_POST['mes'];
$aniophp=$_POST['anio'];
$messiguiente =(int)$mesphp+1;

include '../conexion.php';

$conexion = conectar();

$sql =  mysqli_query($conexion,"SELECT count(*) FROM cita WHERE CEDULA_MED = '$cedulaMedico' AND (ESTADO_CITA = 0 OR ESTADO_CITA = 1)
 AND FECHA_CITA BETWEEN '$aniophp-$mesphp-01'  AND '$aniophp-$messiguiente-01'")or die('Problemas en el select' . mysqli_error($conexion));

 if($result=mysqli_fetch_array($sql)){
	 $total =(int)$result[0]; }
	 

	 $sql2 =  mysqli_query($conexion,"SELECT count(*) FROM cita WHERE CEDULA_MED = '$cedulaMedico' AND (ESTADO_CITA = 0)
    AND FECHA_CITA BETWEEN '$aniophp-$mesphp-01' AND '$aniophp-$messiguiente-01'")or die('Problemas en el select' . mysqli_error($conexion));
    
      if($result2=mysqli_fetch_array($sql2)){
         $atendidas =(int)$result2[0]; }
     
 



$dataPoints = array( 
 array("label"=>"Total de Citas", "y"=>$total),
 array("label"=>"No atendidas", "y"=>$atendidas),);

 cerrar($conexion);
   
	?>  
	
	

<h2>Médico</h2>      
   <hr>
   <div id="chartContainer" style="height: 300pt; width: 100%;"></div>
   <br>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<button  class="btn btn-block col-md-2 btn-ttc">
<a  href="../adminmedico.php"> salir</a>
</button>



<script>

window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Reporte"
	},
	subtitles: [{
		text: "atenciones medicas:"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0\"\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});

chart.render();
}
</script>
	
</body>
</html>

