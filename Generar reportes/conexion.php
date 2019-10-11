
<?php
//CONEXION A LA BD
$conexion = mysqli_connect("localhost", "root", "", "itic");
/* verificar la conexión */
if ($conexion->connect_errno) {
	printf("Conexión fallida: %s\n", $conexion->connect_error);
	exit();
}

?>