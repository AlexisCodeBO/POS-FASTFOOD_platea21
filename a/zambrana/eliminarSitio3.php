<?php
	include('Sitio3.php');
	Sitio::eliminar($_GET['id']);
	header('Location:http://localhost/zambrana/index3.php');
?>