<?php 
require_once('header.php');
require_once('conexion.php');

	$consulta = mysqli_query($conexion, "SELECT * FROM productos");
	$productos = mysqli_fetch_all($consulta, MYSQL_ASSOC);

?>
<div class="container-fluid">
<div class="row">

<div class="col-md-2">
</div>
<div class="col-md-8">


<div id="carousel-id" class="carousel slide text-center" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-id" data-slide-to="0" class=""></li>
			<li data-target="#carousel-id" data-slide-to="1" class=""></li>
			<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item imagen-centrada">
				<img alt="First slide" src="slider/pandebono.jpg">
				<div class="container">
					<div class="carousel-caption">
						<h1>PANDEBONO</h1>
						<p>Los mejores y mas ricos pandebonos de cartago al mejor precio .</p>
					</div>
				</div>
			</div>
			<div class="item">
				<img alt="Second slide" src="slider/pan_jamon.jpg">
				<div class="container">
					<div class="carousel-caption">
						<h1>PAN JAMON </h1>
						<p>Los mas ricos panes de cartago los encuentras aqui en la panderia el rosario </p>
					</div>
				</div>
			</div>
			<div class="item active">
				<img alt="Third slide" src="slider/pan_coco.jpg">
					<div class="carousel-caption">
						<h1>PAN COCO</h1>
						<p>todos los viernes, sabados y domingos un descuento del 30% en todos los productos </p>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
</div>
	
</div>
<div class="row">
<?php
foreach ($productos as  $producto):
?>
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	<div class="thumbnail text-center">
		<img src="adjunto_producto/<?php echo $producto['adjunto_producto']; ?>" alt="">
		<div class="caption">
			<h3><?php echo $producto ['nombre'] ?>;</h3>
			<p>
				<a href="#" class="btn btn-primary"> $ <?php echo $producto ['valor'] ?></a>
				<a href="#" class="btn btn-default">Comprar</a>
			</p>
		</div>
	</div>
</div>
<?php endforeach; ?>
</div>
	
</div>

	
<?php
require_once('footer.php');
 ?>
