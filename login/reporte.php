<?php

$dbhost	= "localhost";	   // localhost or IP
$dbuser	= "root";		  // database username
$dbpass	= "";		     // database password
$dbname	= "confic";    // database name

$conexion = mysqli_connect("localhost","root","","confic");
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}


$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];

if(isset($_POST['descargar']))
{
	// NOMBRE DEL ARCHIVO Y CHARSET
	header('Content-Type:text/csv; charset=latin1');
	header('Content-Disposition: attachment; filename="reporte.csv"');

	// SALIDA DEL ARCHIVO
	$salida=fopen('php://output', 'w');
	// ENCABEZADOS
	fputcsv($salida, array('id', 'name', 'identificacion', 'number', 'email', 'novedades', 'sexo', 'fecha'));
	// QUERY PARA CREAR EL REPORTE
	$reporteCsv=$conexion->query("SELECT *  FROM g1 where fecha BETWEEN '$fecha1' AND '$fecha2' ORDER BY id");
	while($filaR= $reporteCsv->fetch_assoc())
		fputcsv($salida, array($filaR['id'], 
								$filaR['name'],
								$filaR['identificacion'],
								$filaR['number'],
								$filaR['email'],
								$filaR['novedades'],
								$filaR['sexo'],
								$filaR['fecha']));

}

?>
