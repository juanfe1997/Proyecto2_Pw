<?php 

	require_once ('header.php');
	require_once('conexion.php');

	$consulta = mysqli_query($conexion, "SELECT * FROM productos");
	$productos = mysqli_fetch_all($consulta, MYSQL_ASSOC);




?>
 
 <div class="container">
 	<h2 class="text-center">Listar Productos</h2>
	<a href="crear_producto.php" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Añadir Nuevo Producto</a>
 	<table class="table table-bordered table-striped">
 <tr>
 <th class="text-center">id</th>
 <th class="text-center">Nombre</th>
 <th class="text-center">referencia</th>
 <th class="text-center">fecha vencimiento</th>
 <th class="text-center">valor</th>
 <th class="text-center">Adjunto producto</th>
 <th class="text-center">Opciones</th>
</tr>
	
<?php foreach ($productos as  $producto):?>

<tr>
	<td class="text-center"><?php echo $producto['id']; ?></td>
	<td class="text-center"><?php echo $producto['nombre']; ?></td>
	<td class="text-center"><?php echo $producto['referencia']; ?></td>
	<td class="text-center"><?php echo $producto['fecha_vencimiento']; ?></td>
	<td class="text-center"><?php echo $producto['valor']; ?></td>
	<td class="text-center"><img src="adjunto_producto/<?php echo $producto['adjunto_producto']; ?>"  class="img-responsive" width="20%"></td>
	<td class="text-center">
	<a href="ver_producto.php?id=<?php echo $producto['id']; ?> " class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></a>
	<a href="editar_producto.php?id=<?php echo $producto['id']; ?>" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a>
	<a href="eliminar_producto.php?id=<?php echo $producto['id']; ?>" class="btn btn-danger" onclick="return confirm('Estas seguro de eliminar este registro')"><i class="fa fa-trash" aria-hidden="true"></i></a>
			</td>
		</tr>

 
 		<?php endforeach; ?>

 
		</table>
	</div>
	<?php
 	require_once('footer.php');
 ?>