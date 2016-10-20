<?php 
	//encabezado 
	require_once ('header.php');
	require_once('conexion.php');

	$consulta = mysqli_query($conexion, "SELECT * FROM usuarios");
	$usuarios = mysqli_fetch_all($consulta, MYSQL_ASSOC);

//recibir variable consulta 

if(isset($_GET['consulta']))
{ 
	$consulta = $_GET['consulta'];
	if($consulta == 1)
{
		
?>

<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<strong>Alerta</strong>El usuario fue actualizado con exito.
</div>
<?php 
		}
		else
		{

		?>

			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Alerta</strong>El usuario no pudo ser actualizado,intentelo de nuevo. 
			</div>
				
		<?php
	}

}

//recibir variable eliminado

if(isset($_GET['eliminado']))
{ 
	$eliminado = $_GET['eliminado'];
	if($eliminado == 1)
	{
		
?>

<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<strong>Alerta</strong>El usuario fue eliminado con exito.
</div>
<?php 
		}
		else
		{

			?>

			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Alerta</strong>El usuario no pudo ser eliminado,intentelo de nuevo. 
			</div>
				
		<?php
	}

}

//recibir la variable de inicio de sesion 
if(isset($_GET['login']))
{
	?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Alerta</strong> Bienvenido has iniciado sesion correctamente
	</div>
	<?php
}

?>
 
 <div class="container">
 <h2 class="text-center">Listar Usuarios</h2>
<a href="crear_usuario.php" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Añadir Nuevo Usuario</a>
 <table class="table table-bordered table-striped">
 <tr>
 <th class="text-center">id</th>
 <th class="text-center">nombre</th>
 <th class="text-center">apellido</th>
 <th class="text-center">email</th>
 <th class="text-center">tipo de usuario</th>
 <th class="text-center">fecha de creacion</th>
 <th class="text-center">Opciones</th>

</tr>
	
	<?php foreach ($usuarios as $usuario): ?>

<tr>
	<td class="text-center"><?php echo $usuario['id']; ?></td>
	<td class="text-center"><?php echo $usuario['nombre']; ?></td>
	<td class="text-center"><?php echo $usuario['apellido']; ?></td>
	<td class="text-center"><?php echo $usuario['email']; ?></td>
	<td class="text-center"><?php echo $usuario['tipo_usuario']; ?></td>
	<td class="text-center"><?php echo $usuario['fecha_creacion']; ?></td>
	<td class="text-center">
		<a href="ver_usuario.php?id=<?php echo $usuario['id'] ?> " class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></a>
		<a href="editar_usuario.php?id=<?php echo $usuario['id'] ?>" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a>
		<a href="eliminar_usuario.php?id=<?php echo $usuario['id'] ?>" class="btn btn-danger" onclick="return confirm('Estas seguro de eliminar este registro')"><i class="fa fa-trash" aria-hidden="true"></i></a>
	</td>
</tr>

<?php endforeach; ?>

 
</table>
 	
 </div>


<?php

 //footer
 	require_once('footer.php');
 ?>