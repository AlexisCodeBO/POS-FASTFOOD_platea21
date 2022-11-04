<?php
	include('Sitio1.php');
	Sitio1::eliminar($_GET['id']);
	header('Location:http://localhost/POS-FASTFOOD_platea21/a/zambrana/index1.php');
?>