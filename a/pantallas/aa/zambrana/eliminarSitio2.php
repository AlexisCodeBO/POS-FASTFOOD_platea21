<?php
	include('Sitio2.php');
	Sitio::eliminar($_GET['id']);
	header('Location:http://localhost/aa/zambrana/index2.php');
?>