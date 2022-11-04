<?php
	include('Sitio1.php');
	Sitio::eliminar($_GET['id']);
	header('Location:http://localhost/aa/zambrana/index1.php');
?>