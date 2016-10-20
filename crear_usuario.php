<?php 
	//encabezado 
	require_once ('header.php');
	
	//validar si las variables estan inicializadas  

	if 	(isset($_POST['nombre']) 
		&& isset($_POST['apellido'])
		&& isset($_POST['email'])
		&& isset($_POST['tipo_usuario'])
		&& isset($_POST['contrasena'])
		&& isset($_POST['contrasena2'])
		)

		{

			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$email = $_POST['email'];
			$tipo_usuario = $_POST['tipo_usuario'];
			$contrasena = $_POST['contrasena'];
			$contrasena2 = $_POST['contrasena2'];
				
				//validar contraseña
			if ($contrasena == $contrasena2) 
			
			{
				$contrasena_enc = sha1($contrasena);
				require_once('conexion.php');


				
	$insertar = mysqli_query($conexion, "INSERT INTO usuarios(nombre, apellido, email, tipo_usuario, contrasena) VALUES('$nombre', '$apellido', '$email', '$tipo_usuario', '$contrasena_enc' )");

		$consulta = mysqli_affected_rows($conexion);
		
		if($consulta == 1)
		{
		
			?>

			<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Alerta</strong>El usuario fue registrado con exito.
				</div>
				<?php 
		}
		else
		{

			?>

				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Alerta</strong>El usuario no pudo ser registrado,intentelo de nuevo. 
				</div>
				
				<?php

			}

		}
		else
		{
			?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Alerta</strong>las contraseñas no coinciden intentelo de nuevo. 
				</div>
				
				<?php
		}
	}

	

?>
<div class="container">
	<h2 class="text-center">Crear Nuevo Usuario</h2>
	<div class="row">
	<div class="class col-md-2"></div>
	<form action="crear_usuario.php" class="col-md-8" method="POST">
	  <div class="form-group">

	  	<label for="nombre">Nombre</label>
	  	<input type="text" name="nombre"
	  	class="form-control" placeholder="ingrese nombre" required="">
	  	</div>
	  	<div class="form-group">

	  	<label for="nombre">Apellido</label>
	  	<input type="text" name="apellido" class="form-control" placeholder="ingrese apellido" required="">
	  	</div>
	  	<div class="form-group">

	  	<label for="nombre">Email</label>
	  	<input type="email" name="email" class="form-control" placeholder="ingrese email" required="">
	  	<div class="form-group">
	  	<label for="tipo_usuario">Seleccione un tipo de usuario</label>
	  	<select name="tipo_usuario" class="form-control" >
	  		<option value="administrador">Administrador</option>
	  		<option value="cliente">Cliente</option>
	  	</select>
	  	</div>
	  	<div class="form-group">

	  	<label for="nombre">Contraseña</label>
	  	<input type="password" name="contrasena" class="form-control" placeholder="ingrese contraseña" required="">
	  	</div>
	  	<div class="form-group">

	  	<label for="nombre">Repetir Contraseña</label>
	  	<input type="text" name="contrasena2" class="form-control" placeholder="Repetir contraseña" required="">
	  	</div>
	  	<div class="text-center">
	  		<button type="submit" class="btn btn-primary">Crear Usuario</button>
	  		<a href="listar_usuarios.php" class="btn btn-success">Volver Atras</a>
	  	</div>
	  </form>
		
</div>
	
	  	</div>

 <?php

 //footer
 	require_once('footer.php');
 ?>