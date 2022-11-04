<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['usuario']) {
	header("Location:index.php");
}
?>		
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Proyecto Marianne</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondo3.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->


<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="clientes.php">USUARIO</a></li>
			 
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
		<li><a href="">Hola <strong><?php echo $_SESSION['usuario'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar Sesión </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Administración de Clientes y Reservas</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Agregar </h4>
		<div class="row-fluid">
		
		<?php
		extract($_GET);
		require("conexion_bd.php");

		$sql="SELECT * FROM empleado WHERE id_empleado=$id_empleado";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id_empleado=$row[0];
		    	
		    }



		?>
	

		<form action="ejecutaactualizar2.php" method="post">
				Id cliente<br><input type="text" name="id"  readonly="readonly" value= "<?php echo $id_cliente+1 ?>"><br>
				Apellido Paterno<br> <input type="text" name="app" ><br>
				Apellido Materno<br> <input type="text" name="apm " ><br>
				Dirección <br> <input type="text" name="dire" ><br>
				Teléfono<br> <input type="text" name="tel" ><br>
				Reserva<br> <input type="text" name="reser"><br>
				Pedido<br> <input type="text" name="pedido" ><br>
				
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>

				  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright  alumnos ULS, Joseph Godoy, Gerardo Gutierrez,  Luis Granda<br/><br/></p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>


