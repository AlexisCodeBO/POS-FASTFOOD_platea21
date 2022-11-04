<?php include('parciales/cabecera.php') ?>	
<style type="text/css">
	#carousel-turismo div div img{
		width: 100%;
	}
</style>
<?php include('parciales/foot_cabecera.php') ?>	
		<?php include('parciales/menu.php'); 
		?>

		<div class="container">
			<div class="#" id="poi">
				<div class="container" >
					<h1>MARIANNE</h1>
					<p>Tienda de Equitacion</p>
				</div>
			</div>	
		<!-- Contenido -->
		<!-- carrusel -->
		<div id="carousel-tur" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-tur" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-tur" data-slide-to="1" class=""></li>
				<li data-target="#carousel-tur" data-slide-to="2" class=""></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img alt="First slide" src="img/caba.jpg" width="1200" height="143">
					<div class="container">
						<div class="carousel-caption">
						</div>
					</div>
				</div>
				<div class="item">
					<img alt="Second slide" src="img/caball.jpg" width="1200" height="143">
					<div class="container">
						<div class="carousel-caption">
						</div>
					</div>
				</div>
				<div class="item">
					<img alt="Third slide" src="img/cabal.jpg" width="1200" height="143">
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
		<hr>
		<section class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				<div class="thumbnail">
					<img src="img/caballo2.jpg" alt="Articulos para Caballos">
					<div class="caption">
						<h3>Caballos</h3>
						<p>
							Articulos especialmente para el caballo articulos especiales para la practica de este deporte con las mayores seguridades para el caballo
						</p>
						<p class="text-center">
							<a href="index2.php?" class="btn btn-primary">Ver mas</a>
						</p>
					</div>
				</div>			
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				<div class="thumbnail">
					<img src="img/jinete.jpg" alt="Articulos para Jinete">
					<div class="caption">
						<h3>Jinetes</h3>
						<p>
							Articulos de jinete de diferentes marcas tipos tallas para bestir de manera elegante y de una mejor vestimenta para el cliente  
						</p>
						<p class="text-center">
							<a href="index1.php?" class="btn btn-primary">Ver mas </a>
						</p>
					</div>
				</div>			
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				<div class="thumbnail">
					<img src="img/limpieza1.jpg" alt="Elementos de limpieza ">
					<div class="caption">
						<h3>Limpieza</h3>
						<p>
							Articulo de limpieza para el caballo para poder mantenerlo en optias condiciones 
						</p>
						<p class="text-center">
							<a href="index3.php?" class="btn btn-primary">Ver mas </a>
						</p>
					</div>
				</div>			
			</div>
		</section>
		<?php include('parciales/cabecera_footer.php') ?>

<?php include('parciales/footer.php') ?>	