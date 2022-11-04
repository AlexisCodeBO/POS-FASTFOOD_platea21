<?php
	include('Promocion.php');
	Promocion::eliminar($_GET['id']);
	header('Location:http://localhost/proyecto/listaPromociones.php');
?>