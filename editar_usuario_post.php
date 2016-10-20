<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$tipo_usuario = $_POST['tipo_usuario'];
$id = $_POST['id'];

require_once('conexion.php');
//consulta a la base de datos para edtiar un usuario 
$editar = mysqli_query($conexion, "UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', email = '$email', tipo_usuario = '$tipo_usuario' WHERE id = 'id' "); 

$consulta = mysqli_affected_rows($conexion);


//Redirigir a la pagina listar usuarios 
header("location: listar_usuarios.php?consulta=".$consulta);
?> 
