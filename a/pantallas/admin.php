<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['usuario']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:los/index.php");
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
<div class="row">
<img src="imagenes/logo.png" height="172"  width="301">
</div>
</header>

  <!-- Navbar
    ================================================== -->

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class="">ADMINISTRADOR DEL SITIO</li>
			 
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['usuario'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar sesión </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
  	<div class="navbar-inner">
  	 <div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="#">Productos</a></li>
			 <li class=""><a href="#">Reservas</a></li>
			 <li class=""><a href="proveedores.html">Proveedores</a></li>
			 <li class=""><a href="clientes.php">Clientes</a></li>
	
		</ul>
		<ul class="dropdown-menu-right pull-right">
		<li><a href="registroneo.php">Registrar nuevo</a></li>
		<li><a href="#">Imprimir c.barras</a></li> 
			

		</ul>
  </div>
</div>
</div><!-- /navbar-inner -->

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Administración de usuarios registrados</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Usuarios</h4>
		<div class="row-fluid">
		



			<?php

				require("conexion_bd.php");
				$sql=("SELECT * FROM empleado");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id empleado</td>";
						echo "<td>nombre</td>";
						echo "<td>apellido paterno</td>";
						echo "<td>apellido materno</td>";
						echo "<td>Correo</td>";
						echo "<td>Usuario</td>";
						echo "<td>Contraseña</td>";
						echo "<td>Teléfono</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";
				    	echo "<td>$arreglo[5]</td>";
				    	echo "<td>$arreglo[6]</td>";
				    	echo "<td>$arreglo[7]</td>";
				    	
				    	
				    	

				    	echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM empleado WHERE ide_empleado=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='admin.php'</script>";
					}

			?>
			
				  
			  			  
			  
		
		
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
<p>&copy; Copyright Joseph Godoy y Equipo de Estudiantes ULS <br/><br/></p>
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