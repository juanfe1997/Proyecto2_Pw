<?php 
	//encabezado 
	require_once ('header.php');
	$id = $_GET['id'];
	require_once('conexion.php');
	$consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id = $id");
	$usuario  = mysqli_fetch_array($consulta);if(mysqli_num_rows($consulta)):
	
?>
<div class="container">
		<h2 class="text-center">Editar Usuario <?php echo $usuario['nombre']; ?></h2>
		<div class="row">
		<div class="class col-md-2"></div>
		<form action="editar_usuario_post.php" method="POST"  class="col-md-8">
		<input type="hidden" name="id" value="<?php echo $usuario ['id']; ?>"></input>
	  
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
	  	<label for="tipo_usuario">Seleccione un tipo de usuario</label>
	  	<select name="tipo_usuario" class="form-control" >
	  	<?php
	  		
	  		if($usuario [tipo_usuario] == 'administrador')
	  		{
	  		echo '<option selected="" value="administrador">Administrador</option>
	  				<option value="cliente">Cliente</option>';

	  			}else
	  			{

	  			echo '<option  value="administrador">Administrador</option>
	  				<option selected="" value="cliente">Cliente</option>';
	  			}


	  			 ?>
	  			 </select>
	  			 </div>
	  	<div class="text-center">
		<button type="submit" class="btn btn-primary">Editar Usuario</button>
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