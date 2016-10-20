<?php 
	//encabezado 
	require_once ('header.php');
	$id = $_GET['id'];
	require_once('conexion.php');

	$consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id = $id");
	$usuario  = mysqli_fetch_array($consulta);	

	if(mysqli_num_rows($consulta)):
	
?>
<div class="container">
		<h2 class="text-center">Detalles Usuario <?php echo $usuario['nombre']; ?></h2>
		<div class="row">
		<div class="class col-md-2"></div>
		<form  class="col-md-8">
	  	<div class="form-group">

	  	<label for="nombre">Nombre</label>
	  	<input type="text" name="nombre"
	  	class="form-control" placeholder="ingrese nombre" required="" value="<?php echo $usuario ['nombre']; ?>">
	  	</div>
	  	<div class="form-group">
		<label for="nombre">Apellido</label>
	  	<input type="text" name="apellido" class="form-control" placeholder="ingrese apellido" required="" value="<?php echo $usuario ['apellido']; ?>">
	  	</div>
	  	<div class="form-group">

	  	<label for="nombre">Email</label>
	  	<input type="email" name="email" class="form-control" placeholder="ingrese email" required="" value="<?php echo $usuario ['email']; ?>">
	  	<div class="form-group">
	  	<label for="tipo_usuario">Tipo de usuario</label>
	  	<input type="text" name="tipo_usuario" class="form-control" placeholder="ingrese tipo de usuario" required="" value="<?php echo $usuario ['tipo_usuario']; ?>">
	  	</div>
	  	
	  	<div class="text-center">
	  		<a href="listar_usuarios.php" class="btn btn-success">Volver Atras</a>
	  	</div>
	  </form>
	</div>
</div>


<?php 
 endif;
 //footer
 	require_once('footer.php');
 ?>
	