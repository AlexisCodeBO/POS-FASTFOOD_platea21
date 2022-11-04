<?php include('parciales/cabecera.php') ?>
<style type="text/css">
	#carousel-turismo div div img{
		width: 100%;
	}
</style>
<?php include('parciales/foot_cabecera.php') ?>	
		<?php include('parciales/menu.php'); 
				include('Sitio1.php');
				$arr = Sitio1::listarTodo();
				$i=0;
				//var_dump($arr);
		?>

		<div class="container">
			<div class="jumbotron" id="mas">
				<div class="container" >
					<h1>JIENTE</h1>
					<p>Productos de primera calidad </p>
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
					<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide"> <img src="img/caba.jpg" width="1200" height="143">
					<div class="container">
						<div class="carousel-caption">
						</div>
					</div>
				</div>
				<div class="item">
					<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide"><img src="img/caball.jpg" width="1200" height="143">
					<div class="container">
						<div class="carousel-caption">
						</div>
					</div>
				</div>
				<div class="item active">
					<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide"><img src="img/caba.jpg" width="1200" height="143">
					<div class="container">
						<div class="carousel-caption">
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#carousel-tur" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-tur" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
		<!-- fin carrusel -->
			<div class="row">
			 <?php foreach ($arr as $sitio1) { ?>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="thumbnail">
						<img src="<?=$sitio1->getFoto(); ?>" alt="">
						<div class="caption">
							<h3><?=$sitio1->getNombre(); ?></h3>
							<p>
								<?=$sitio1->getDesc(); ?>
							</p>
							<p>
								<a href="sales1.php" class="btn btn-primary btn-block" id="verPaquetes">Reservas</a>
								<div class="btn-group btn-group-justified">
									<a href="formSitio1.php?id=<?=$sitio1->getId()?>" class="btn btn-default" id="modificar">Modificar</a>
									<a href="eliminarSitio1.php?id=<?=$sitio1->getId()?>" class="btn btn-warning" id="eliminar">Eliminar</a>
								</div>
								
							</p>
						</div>
					</div>
				</div>
			<?php } ?>	
		</div>
		<?php include('parciales/cabecera_footer.php') ?>

<?php include('parciales/footer.php') ?>	