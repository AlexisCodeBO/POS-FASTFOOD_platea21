<?php
	include('Sitio3.php');
	Sitio::eliminar($_GET['id']);
	header('Location:http://localhost/pantallas/aa/zambrana/index3.php');
?>