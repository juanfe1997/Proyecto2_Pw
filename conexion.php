<?php
 require_once('configuracion.php');
 $conexion = mysqli_connect($configuracion['servidor'], $configuracion['usuario'], $configuracion['contrasena'], $configuracion['base_datos']);

if(!$conexion) 
	{
		die("error de conexion a la base de datos: " . mysql_connect_error());
	}

?>