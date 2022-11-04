<?php
	include('Sitio2.php');
	Sitio2::eliminar($_GET['id']);
	header('Location:http://localhost/POS-FASTFOOD_platea21/a/zambrana/index2.php');
?>