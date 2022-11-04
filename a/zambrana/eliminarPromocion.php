<?php
	include('Promocion.php');
	Promocion::eliminar($_GET['id']);
	header('Location:http://localhost/proyecto wilder/listaPromociones.php');
?>