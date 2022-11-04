<?php
	include('Sitio.php');
	Sitio::eliminar($_GET['id']);
	header('Location:http://localhost/POS-FASTFOOD_platea21/a/zambrana/index3.php');
?>ok