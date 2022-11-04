<?php include('parciales/cabecera.php') ?>	
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
				<div class="container" >
					<h1>MARIANEE</h1>
					<p>Tienda de Equitacion</p>
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
					<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide"> <img src="img/cabal.jpg" width="1200" height="143">
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
			<hr>
		<section class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				<div class="thumbnail">
					<img src="img/caballo2.jpg" alt="Articulos para Caballos">
					<img src="caballo2.jpg" width="336" height="173">
					<div class="caption">
						<h3>Caballos</h3>
						<p>
							Articulos especialmente para el caballo articulos especiales para la practica de este deporte con las mayores seguridades para el caballo
						</p>
						<p class="text-center">
							<a href="index.php" class="btn btn-primary">Ver mas</a>
							<a href="#" class="btn btn-default">acceder</a>
						</p>
					</div>
				</div>			
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				<div class="thumbnail">
					<img src="img/jinete.jpg" alt="Articulos para Jinete">
					<img src="jinete.jpg" width="336" height="173">
					<div class="caption">
						<h3>Jinetes</h3>
						<p>
							Articulos de jinete de diferentes marcas tipos tallas para bestir de manera elegante y de una mejor vestimenta para el cliente  
						</p>
						<p class="text-center">
							<a href="jinete.html" class="btn btn-primary">Ver mas </a>
							<a href="#" class="btn btn-default">Acceder</a>
						</p>
					</div>
				</div>			
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				<div class="thumbnail">
					<img src="img/lim11.jpg" alt="Elementos de limpieza ">
					<img src="11.jpg" width="336" height="173">
					<div class="caption">
						<h3>Limpieza</h3>
						<p>
							Articulo de limpieza para el caballo para poder mantenerlo en optias condiciones 
						</p>
						<p class="text-center">
							<a href="#" class="btn btn-primary">Ver mas </a>
							<a href="#" class="btn btn-default">Acceder</a>
						</p>
					</div>
				</div>			
			</div>
			<?php } ?>	
		</div>
		<?php include('parciales/cabecera_footer.php') ?>

<?php include('parciales/footer.php') ?>	