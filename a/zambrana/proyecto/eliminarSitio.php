<?php
	include('Sitio.php');
	Sitio::eliminar($_GET['id']);
	header('Location:http://localhost/proyecto/index.php');
?>