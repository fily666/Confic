<?php

$dbhost	= "localhost";	   // localhost or IP
$dbuser	= "root";		  // database username
$dbpass	= "";		     // database password
$dbname	= "confic";    // database name

$conexion = mysqli_connect("localhost","root","","confic");

$fecha1 =$_POST['fecha1'];
$fecha2 =$_POST['fecha2'];
if(isset($_POST['descargar'])){
    // nombre del archiva
    header('content-type:text/csv; charset-latin1');
    header('content-disposition: attachment; filename="reporte.csv');

    // archivo
    $salida=fopen('php://output','w' );
    fputcsv($salida, array('id','name','identificacion','number','email','novedades','sexo','fecha'));
    //query para crear el reporte 
    $reporteCsv=$conexion->query("SELECT *FROM g1 where fecha BERWEEN '$fecha1' and '$fecha2' ");
    while($filaR=$reporteCsv->fetch_assoc())
    ftputcsv($salida, array($filaR['id'],
    ))

}

?>
