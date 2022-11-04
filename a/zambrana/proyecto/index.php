<?php
session_start(); 
include('parciales/cabecera.php') ?>	
<style type="text/css">
	#carousel-turismo div div img{
		width: 100%;
	}
</style>
<?php include('parciales/foot_cabecera.php') ?>	
		<?php include('parciales/menu.php'); 
				include('Sitio.php');
				$arr = Sitio::listarTodo();
				$i=0;
				//var_dump($arr);
		?>

		<div class="container">
			<div class="jumbotron" id="yas">
				<div class="container">
					<h1>Tienda Deportiva</h1>
					<p>Los mejores productos</p>					
				</div>
			</div>	
		<!-- Contenido -->
		<!-- carrusel -->
		<div id="carousel-tur" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-tur" data-slide-to="0" class=""></li>
				<li data-target="#carousel-tur" data-slide-to="1" class=""></li>
				<li data-target="#carousel-tur" data-slide-to="2" class="active"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item">
					<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide"> <img src="img/cr1.jpg" width="1200" height="143">
					<div class="container">
						<div class="carousel-caption">
						</div>
					</div>
				</div>
				<div class="item">
					<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide"><img src="img/adidas3.jpg" width="1200" height="143">
					<div class="container">
						<div class="carousel-caption">
						</div>
					</div>
				</div>
				<div class="item active">
					<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide"><img src="img/23.jpg" width="1200" height="143">
					<div class="container">
						<div class="carousel-caption">
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#carousel-tur" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-tur" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
		<link rel="stylesheet" type="text/css" href="estiloIndex.css">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">

		<div class="social">
		<ul>
			<li><a href="http://www.facebook.com/" target="_blank" class="icon-facebook"></a></li>
			<li><a href="http://www.twitter.com/" target="_blank" class="icon-twitter"></a></li>
			<li><a href="http://www.googleplus.com/" target="_blank" class="icon-google-plus"></a></li>
			<li><a href="http://www.pinterest.com/" target="_blank" class="icon-pinterest"></a></li>
			<li><a href="mailto:contacto@falconmasters.com" class="icon-mail"></a></li>
		</ul>
	</div>

		<!-- fin carrusel -->
			<div class="row">
			 <?php foreach ($arr as $sitio) { ?>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="thumbnail">
						<img src="<?=$sitio->getFoto(); ?>" alt="" >
						<div class="caption" id="rolo">
							<h3><?=$sitio->getNombre(); ?></h3>
							<p>
								<?=$sitio->getDesc(); ?>
							</p>
							<p>
								<a href="#" class="btn btn-primary btn-block" id="verPaquetes">Reservar</a>
								<?php if (isset($_SESSION['usuario'])&&$_SESSION['tipo']==1) { ?>
								<div class="btn-group btn-group-justified">
									<a href="formSitio.php?id=<?=$sitio->getId()?>" class="btn btn-default" id="modificar">Modificar</a>
									<a href="eliminarSitio.php?id=<?=$sitio->getId()?>" class="btn btn-warning" id="eliminar">Eliminar</a>
								</div>
								<?php } ?>
							</p>
						</div>
					</div>
				</div>
			<?php } ?>	
		</div>
		<?php include('parciales/cabecera_footer.php') ?>

<?php include('parciales/footer.php') ?>	